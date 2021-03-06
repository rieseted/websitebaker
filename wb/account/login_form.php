<?php
/**
 *
 * @category        frontend
 * @package         account
 * @author          WebsiteBaker Project
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
if(!defined('WB_PATH')) {
require_once(dirname(dirname(__FILE__)).'/framework/globalExceptionHandler.php');
throw new IllegalFileException();
}
/* -------------------------------------------------------- */

	// Generate username field name
$username_fieldname = 'username_';
$password_fieldname = 'password_';
$output = '';
msgQueue::clear();

if(defined('SMART_LOGIN') AND SMART_LOGIN == 'true') {

	$temp = array_merge(range('a','z'), range(0,9));
	shuffle($temp);
	for($i=0;$i<=7;$i++) {
		$username_fieldname .= $temp[$i];
		$password_fieldname .= $temp[$i];
	}
} else {
	$username_fieldname = 'username';
	$password_fieldname = 'password';
}

$thisApp->redirect_url = (isset($thisApp->redirect_url) && ($thisApp->redirect_url!='')  ? $thisApp->redirect_url : $_SESSION['HTTP_REFERER'] );
//$thisApp->redirect_url = '';
$sIncludeHeadLinkCss = '';
if( is_readable(WB_PATH .'/account/frontend.css')) {
	$sIncludeHeadLinkCss .= '<link href="'.WB_URL.'/account/frontend.css"';
	$sIncludeHeadLinkCss .= ' rel="stylesheet" type="text/css" media="screen" />'."\n";
}

// set template file and assign module and template block
	$oTpl = new Template(dirname(__FILE__).'/htt');
	$oTpl->set_file('page', 'login.htt');
	$oTpl->debug = false; // false, true
	$oTpl->set_block('page', 'main_block', 'main');

	$oTpl->set_block('main_block', 'message_block', 'message');
	$oTpl->set_block('message', '');

// generell vars
	$oTpl->set_var(array(
		'FTAN' => $wb->getFTAN(),
		'ACTION_URL' => WB_URL.'/account/login.php',
		'FORGOT_URL' => WB_URL.'/account/forgot.php',
		'REDIRECT_URL' => $thisApp->redirect_url,
		'WB_URL' => WB_URL,
		'THEME_URL' => THEME_URL,
		'TEMPLATE_URL' => TEMPLATE_DIR,
		'HTTP_REFERER' => $thisApp->redirect_url,
        'CSS_BLOCK'	=> $sIncludeHeadLinkCss,
		'MESSAGE_VALUE' => '',
		'ERROR_VALUE' => '',
		'THISAPP_MESSAGE_VALUE' => $thisApp->message,
		'TEXT_FORGOTTEN_DETAILS' => $TEXT['FORGOTTEN_DETAILS'],
		'TEXT_USERNAME' => $TEXT['USERNAME'],
		'TEXT_PASSWORD' => $TEXT['PASSWORD'],
		'USER_FIELDNAME' => $username_fieldname,
		'PASSWORD_FIELDNAME' => $password_fieldname,
		'TEXT_LOGIN' => $TEXT['LOGIN'],
		'TEXT_RESET' => $TEXT['RESET'],
		'TEXT_CANCEL' => $TEXT['CANCEL'],
		)
	);

	$oTpl->set_block('main_block', 'show_smart_login_block', 'show_smart_login');
//	$oTpl->parse('show_smart_login', '');
	if($username_fieldname != 'username') {
		$oTpl->set_var(array(
		'TEXT_REMEMBER_ME' => $TEXT['REMEMBER_ME'],
			)
		);

		$oTpl->parse('show_smart_login', 'show_smart_login_block', true);
	} else {
		$oTpl->set_block('show_smart_login', '');
	}

	//$oTpl->parse('message', 'message_block', true);
	$oTpl->parse('main', 'main_block', false);
	$output = $oTpl->finish($oTpl->parse('output', 'page'));
	unset($oTpl);
	print $output;

