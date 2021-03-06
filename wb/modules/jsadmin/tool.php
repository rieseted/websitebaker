<?php
/**
 *
 * @category        modules
 * @package         JsAdmin
 * @author          Ryan Djurovich (2004-2009), WebsiteBaker Project
 * @copyright       2009-2012, WebsiteBaker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version         $Id$
 * @filesource		$HeadURL$
 * @lastmodified    $Date$
 *
*/

/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(!defined('WB_URL')) {
	require_once(dirname(dirname(dirname(__FILE__))).'/framework/globalExceptionHandler.php');
	throw new IllegalFileException();
}
/* -------------------------------------------------------- */

// check if module language file exists for the language set by the user (e.g. DE, EN)
if(!file_exists(WB_PATH .'/modules/jsadmin/languages/'.LANGUAGE .'.php')) {
	// no module language file exists for the language set by the user, include default module language file EN.php
	require_once(WB_PATH .'/modules/jsadmin/languages/EN.php');
} else {
	// a module language file exists for the language defined by the user, load it
	require_once(WB_PATH .'/modules/jsadmin/languages/'.LANGUAGE .'.php');
}
/*
// check if backend.css file needs to be included into the <body></body>
if(!method_exists($admin, 'register_backend_modfiles') && file_exists(WB_PATH .'/modules/jsadmin/backend.css')) {
	echo '<style type="text/css">';
	include(WB_PATH .'/modules/jsadmin/backend.css');
	echo "\n</style>\n";
}
*/
require_once(WB_PATH.'/modules/jsadmin/jsadmin.php');

// Check if user selected what add-ons to reload
if(isset($_POST['save_settings']))  {

	if (!$admin->checkFTAN())
	{
		if(!$admin_header) { $admin->print_header(); }
		$admin->print_error($MESSAGE['GENERIC_SECURITY_ACCESS'],$_SERVER['REQUEST_URI']);
	}

	// Include functions file
	require_once(WB_PATH.'/framework/functions.php');
	save_setting('mod_jsadmin_persist_order', isset($_POST['persist_order']));
	save_setting('mod_jsadmin_ajax_order_pages', isset($_POST['ajax_order_pages']));
	save_setting('mod_jsadmin_ajax_order_sections', isset($_POST['ajax_order_sections']));
   // 	echo '<div style="border: solid 2px #9c9; background: #ffd; padding: 0.5em; margin-top: 1em">'.$MESSAGE['SETTINGS']['SAVED'].'</div>';
	// check if there is a database error, otherwise say successful
	if(!$admin_header) { $admin->print_header(); }
	if($database->is_error()) {
		$admin->print_error($database->get_error(), $js_back);
	} else {

		$admin->print_success($MESSAGE['PAGES_SAVED'], ADMIN_URL.'/admintools/tool.php?tool=jsadmin');
	}

} else {
	// $admin->print_header();
}

// Display form
	$persist_order = get_setting('mod_jsadmin_persist_order', true) ? 'checked="checked"' : '';
	$ajax_order_pages = get_setting('mod_jsadmin_ajax_order_pages', true) ? 'checked="checked"' : '';
	$ajax_order_sections = get_setting('mod_jsadmin_ajax_order_sections', true) ? 'checked="checked"' : '';

// THIS ROUTINE CHECKS THE EXISTING OFF ALL NEEDED YUI FILES
  $YUI_ERROR=false; // ist there an Error
  $YUI_PUT ='';   // String with javascipt includes
  $YUI_PUT_MISSING_Files=''; // String with missing files
  reset($js_yui_scripts);
  foreach($js_yui_scripts as $script) {
     if(!file_exists($WB_MAIN_RELATIVE_PATH.$script)){
        $YUI_ERROR=true;
        $YUI_PUT_MISSING_Files =$YUI_PUT_MISSING_Files."- ".WB_URL.$script."<br />";   // catch all missing files
    }
	}
	if($YUI_ERROR)
	{
?>
	<div id="jsadmin_install" style="border: solid 2px #c99; background: #ffd; padding: 0.5em; margin-top: 1em">

     <?php echo $MOD_JSADMIN['TXT_ERROR_INSTALLINFO_B'].$YUI_PUT_MISSING_Files; ?>
      </div>
<?php
  }
  else
  {
  ?>
<div  id="jsadmin_form"></div>
   <form name="store_settings" style="margin-top: 1em; display: true;" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	<?php echo $admin->getFTAN(); ?>
   <table class="jsadmin_drag_area">
<tbody>
   <tr>
	     <td colspan="2"><?php echo $MOD_JSADMIN['TXT_HEADING_B']; ?>:</td>
   </tr>
   <tr>
	     <td style="width: 20px;"><input type="checkbox" name="persist_order" id="persist_order" value="true" <?php echo $persist_order; ?>/></td>
	     <td><label for="persist_order"><?php echo $MOD_JSADMIN['TXT_PERSIST_ORDER_B']; ?></label></td>
   </tr>
   <tr>
	     <td  style="width: 20px;"><input type="checkbox" name="ajax_order_pages" id="ajax_order_pages" value="true" <?php echo $ajax_order_pages; ?>/></td>
	     <td><label for="ajax_order_pages"><?php echo $MOD_JSADMIN['TXT_AJAX_ORDER_PAGES_B']; ?></label></td>
   </tr>
   <tr>
	     <td style="width: 20px;"><input type="checkbox" name="ajax_order_sections" id="ajax_order_sections" value="true" <?php echo $ajax_order_sections; ?>/></td>
	     <td><label for="ajax_order_sections"><?php echo $MOD_JSADMIN['TXT_AJAX_ORDER_SECTIONS_B']; ?></label></td>
   </tr>
   <tr>
	     <td style="width: 20px;">&nbsp;</td>
	     <td>
		   <input type="submit" name="save_settings" value="<?php echo $TEXT['SAVE']; ?>" />
	    </td>
   </tr>
</tbody>
   </table>
   </form>
 <?php
 }
