<?php
/**
 *
 * @category        backend
 * @package         wysiwyg
 * @author          WebsiteBaker Project
 * @copyright       2009-2012, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version         $Id$
 * @filesource		$HeadURL$
 * @lastmodified    $Date$
 *
*/

require('../../config.php');

// suppress to print the header, so no new FTAN will be set
$admin_header = false;
// Tells script to update when this page was last updated
$update_when_modified = true;
// Include WB admin wrapper script
require(WB_PATH.'/modules/admin.php');

if (!$admin->checkFTAN()) {
	$admin->print_header();
	$admin->print_error($MESSAGE['GENERIC_SECURITY_ACCESS'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}
// After check print the header
$admin->print_header();

// Include the WB functions file
require_once(WB_PATH.'/framework/functions.php');
$aErrors = array();
$sMediaUrl = WB_URL.MEDIA_DIRECTORY;
// Update the mod_wysiwygs table with the contents
if(isset($_POST['content'.$section_id])) {
	$content = $_POST['content'.$section_id];
	if(ini_get('magic_quotes_gpc')==true)
	{
		$content = $admin->strip_slashes($_POST['content'.$section_id]);
	};
	$searchfor = '@(<[^>]*=\s*")('.preg_quote($sMediaUrl).')([^">]*".*>)@siU';
	$content = preg_replace($searchfor, '$1{SYSVAR:MEDIA_REL}$3', $content);
	// searching in $text will be much easier this way
	$content = WbDatabase::getInstance()->escapeString ($content);
	$text = umlauts_to_entities(strip_tags($content), strtoupper(DEFAULT_CHARSET), 0);
	$sql  = 'UPDATE `'.TABLE_PREFIX.'mod_wysiwyg` ';
	$sql .= 'SET `content`=\''.$content.'\', `text`=\''.$text.'\' ';
	$sql .= 'WHERE `section_id`='.(int)$section_id;
	if(!WbDatabase::getInstance()->query($sql)){
		$aErrors[] = $MESSAGE['GENERIC_NOT_UPGRADED'].((defined('DEBUG') && DEBUG) ? '<br />'.WbDatabase::getInstance()->get_error() : '');
	}
} else {
	$aErrors[] = $MESSAGE['GENERIC_NOT_UPGRADED'].((defined('DEBUG') && DEBUG) ? '<br />'.$MESSAGE['FRONTEND_SORRY_NO_ACTIVE_SECTIONS'] : '');
}

$sec_anchor = '#'.(defined( 'SEC_ANCHOR' ) && ( SEC_ANCHOR != '' )  ? SEC_ANCHOR.$section_id : 'section_'.$section_id );
if(defined('EDIT_ONE_SECTION') and EDIT_ONE_SECTION){
	$edit_page = ADMIN_URL.'/pages/modify.php?page_id='.$page_id.'&wysiwyg='.$section_id;
} else {
	$edit_page = ADMIN_URL.'/pages/modify.php?page_id='.$page_id.$sec_anchor;
}

// Check if there is a database error, otherwise say successful
if(sizeof($aErrors) ) {
	$admin->print_error( implode('<br />',$aErrors), $edit_page);
} else {
	$admin->print_success($MESSAGE['GENERIC_UPGRADED'], $edit_page );
}

// Print admin footer
$admin->print_footer();
