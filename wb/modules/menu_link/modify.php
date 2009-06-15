<?php

// $Id$

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2009, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Must include code to stop this file being accessed directly
if(defined('WB_PATH') == false) { exit("Cannot access this file directly"); }

// check if module language file exists for the language set by the user (e.g. DE, EN)
if(!file_exists(WB_PATH .'/modules/menu_link/languages/'.LANGUAGE .'.php')) {
	// no module language file exists for the language set by the user, include default module language file EN.php
	require_once(WB_PATH .'/modules/menu_link/languages/EN.php');
} else {
	// a module language file exists for the language defined by the user, load it
	require_once(WB_PATH .'/modules/menu_link/languages/'.LANGUAGE .'.php');
}

// get target page_id
$table = TABLE_PREFIX.'mod_menu_link';
$sql_result = $database->query("SELECT * FROM $table WHERE section_id = '$section_id'");
$sql_row = $sql_result->fetchRow();
$target_page_id = $sql_row['target_page_id'];
$r_type = $sql_row['redirect_type'];
$extern = $sql_row['extern'];
$anchor = $sql_row['anchor'];
$sel = ' selected';

// Get list of all visible pages, except actual one, and build a page-tree

// this function will fetch the page_tree, recursive
if(!function_exists('menulink_make_tree')) {
function menulink_make_tree($parent, $link_pid, $tree) {
	global $database, $admin, $menulink_titles;
	$table_p = TABLE_PREFIX."pages";
	// get list of page-trails, recursive
	if($query_page = $database->query("SELECT * FROM `$table_p` WHERE `parent`=$parent ORDER BY `position`")) {
		while($page = $query_page->fetchRow()) {
			if($admin->page_is_visible($page) && $page['page_id']!=$link_pid) {
				$pids = explode(',', $page['page_trail']);
				$entry = '';
				foreach($pids as $pid)
					$entry .= $menulink_titles[$pid].' / ';
				$tree[$page['page_id']] = rtrim($entry, '/ ');
				$tree = menulink_make_tree($page['page_id'], $link_pid, $tree);
			}
		}
	}
	return($tree);
}
}
// get list of all page_ids and page_titles
global $menulink_titles;
$menulink_titles = array();
$table_p = TABLE_PREFIX."pages";
if($query_page = $database->query("SELECT `page_id`,`page_title` FROM `$table_p`")) {
	while($page = $query_page->fetchRow())
		$menulink_titles[$page['page_id']] = $page['page_title'];
}
// now get the tree
$links = array();
$links = menulink_make_tree(0, $page_id, $links);

// Get list of targets (id=... or <a name ...>) from pages in $links
$targets = array();
$table_mw = TABLE_PREFIX."mod_wysiwyg";
$table_s = TABLE_PREFIX."sections";
foreach($links as $pid=>$l) {
	if($query_section = $database->query("SELECT section_id, module FROM $table_s WHERE page_id = '$pid' ORDER BY position")) {
		while($section = $query_section->fetchRow()) {
			// get section-anchor
			if(defined('SEC_ANCHOR') && SEC_ANCHOR!='') {
				$targets[$pid][] = SEC_ANCHOR.$section['section_id'];
			} else {
				$targets[$pid] = array();
			}
			if($section['module'] == 'wysiwyg') {
				if($query_page = $database->query("SELECT content FROM $table_mw WHERE section_id = '{$section['section_id']}' LIMIT 1")) {
					$page = $query_page->fetchRow();
					if(preg_match_all('/<(?:a[^>]+name|[^>]+id)\s*=\s*"([^"]+)"/i',$page['content'], $match)) {
						foreach($match[1] AS $t) {
							$targets[$pid][$t] = $t;
						}
					}
				}
			}
		}
	}
}
// get target-window for actual page
$table = TABLE_PREFIX."pages";
$query_page = $database->query("SELECT target FROM $table WHERE page_id = '$page_id'");
$page = $query_page->fetchRow();
$target = $page['target'];


// script for target-select-box
?>
<script type="text/javascript">
	function populate() {
		o=document.getElementById('page_link');
		d=document.getElementById('page_target');
		e=document.getElementById('extern');
		if(!d){return;}			
		var mitems=new Array();
		mitems['0']=[' ','0'];
		mitems['-1']=[' ','0'];
		<?php
		foreach($links AS $pid=>$link) {
			$str="mitems['$pid']=[";
			$str.="' ',";
			$str.="'0',";
			if(is_array($targets) && is_array($targets[$pid])) {
				foreach($targets[$pid] AS $value) {
					$str.="'#$value',";
					$str.="'$value',";
				}
				$str=rtrim($str, ',');
				$str.="];\n";
			}
			echo $str;
		}
		?>
		d.options.length=0;
		cur=mitems[o.options[o.selectedIndex].value];
		if(!cur){return;}
		d.options.length=cur.length/2;
		j=0;
		for(var i=0;i<cur.length;i=i+2)
		{
			d.options[j].text=cur[i];
			d.options[j++].value=cur[i+1];
		}
		
		if(o.value=='-1') {
			e.disabled = false;
		} else {
			e.disabled = true;
		}
	}
</script>

<form name="menulink" action="<?php echo WB_URL ?>/modules/menu_link/save.php" method="post">
<input type="hidden" name="page_id" value="<?php echo $page_id ?>" />
<input type="hidden" name="section_id" value="<?php echo $section_id ?>" />
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
	<td>
		<?php echo $TEXT['LINK'].':' ?>
	</td>
	<td>
		<select name="page_link" id="page_link" onchange="populate()" style="width:250px;" />
			<option value="0"<?php echo $target_page_id=='0'?$sel:''?>><?php echo $TEXT['PLEASE_SELECT']; ?></option>
			<option value="-1"<?php echo $target_page_id=='-1'?$sel:''?>><?php echo $MOD_MENU_LINK['EXTERNAL_LINK']; ?></option>
			<?php foreach($links AS $pid=>$link) {
				echo "<option value=\"$pid\" ".($target_page_id==$pid?$sel:'').">$link</option>";
			} ?>
		</select>
		&nbsp;
		<input type="text" name="extern" id="extern" value="<?php echo $extern; ?>" style="width:250px;" <?php if($target_page_id!='-1') echo 'disabled="disabled"'; ?> />
	</td>
</tr>
<tr>
	<td>
		<?php echo $TEXT['ANCHOR'].':' ?>
	</td>
	<td>
		<select name="page_target" id="page_target" onfocus="populate()" style="width:250px;" />
			<option value="<?php echo $anchor ?>" selected><?php echo $anchor=='0'?' ':'#'.$anchor ?></option>
		</select>
	</td>
</tr>
<tr>
	<td>
		<?php echo $TEXT['TARGET'].':' ?>
	</td>
	<td>
		<select name="target" style="width:250px;" />
			<option value="_blank"<?php if($target=='_blank') echo ' selected="selected"'; ?>><?php echo $TEXT['NEW_WINDOW'] ?></option>
			<option value="_self"<?php if($target=='_self') echo ' selected="selected"'; ?>><?php echo $TEXT['SAME_WINDOW'] ?></option>
			<option value="_top"<?php if($target=='_top') echo ' selected="selected"'; ?>><?php echo $TEXT['TOP_FRAME'] ?></option>
		</select>
	</td>
</tr>
<tr>
	<td>
		<?php echo $MOD_MENU_LINK['R_TYPE'].':' ?>
	</td>
	<td>
		<select name="r_type" style="width:250px;" />
			<option value="301"<?php if($r_type=='301') echo ' selected="selected"'; ?>>301</option>
			<option value="302"<?php if($r_type=='302') echo ' selected="selected"'; ?>>302</option>
		</select>
	</td>
</tr>
</table>

<br />

<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
	<td align="left">
		<input type="submit" value="<?php echo $TEXT['SAVE'] ?>" style="width: 100px; margin-top: 5px;" />
	</td>
	<td align="right">
		</form>
		<input type="button" value="<?php echo $TEXT['CANCEL'] ?>" onclick="javascript: window.location = 'index.php';" style="width: 100px; margin-top: 5px;" />
	</td>
</tr>
</table>

</form>

