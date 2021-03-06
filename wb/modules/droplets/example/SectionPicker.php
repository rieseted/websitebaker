//:Load the view.php from any other section-module, including the frontend.css
//:Use [[SectionPicker?sid=123]]
global $database, $wb, $TEXT, $DGTEXT,$section_id,$page_id;
$content = '';
$sid = isset($sid) ? intval($sid) : 0;
if( $sid ) {
	$oldSid = $section_id; // save old sectionID
	$sql  = 'SELECT `module` FROM `'.TABLE_PREFIX.'sections` ';
	$sql .= 'WHERE `section_id`='.$sid;
	if (($module = $database->get_one($sql))) {
		if (is_readable(WB_PATH.'/modules/'.$module.'/view.php')) {
			$_sFrontendCss = '/modules/'.$module.'/frontend.css';
			if(is_readable(WB_PATH.$_sFrontendCss)) {
				$_sSearch = preg_quote(WB_URL.'/modules/'.$module.'/frontend.css', '/');
				if(preg_match('/<link[^>]*?href\s*=\s*\"'.$_sSearch.'\".*?\/>/si', $wb_page_data)) {
					$_sFrontendCss = '';
				}else {
					$_sFrontendCss = '<link href="'.WB_URL.$_sFrontendCss.'" rel="stylesheet" type="text/css" media="screen" />';
				}
			} else { $_sFrontendCss = ''; }
			$section_id = $sid;
			ob_start();
            $sectionAnchor = (defined('SEC_ANCHOR') && SEC_ANCHOR!='') ? SEC_ANCHOR.$section_id : 'section_'.$section_id;
            echo PHP_EOL.'<div id="'.$sectionAnchor.'" class="wb_'.$module.'" >'.PHP_EOL;
            require(WB_PATH.'/modules/'.$module.'/view.php');
            echo PHP_EOL.'</div><!-- '.$module.$section_id.' -->'.PHP_EOL;
			$content = $_sFrontendCss.ob_get_clean();
			$section_id = $oldSid; // restore old sectionID
		}
	}
}
return $content;