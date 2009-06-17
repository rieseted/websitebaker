<?php

// $Id$

/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]
*/

// Direct access prevention
defined('WB_PATH') OR die(header('Location: ../index.php'));

// Load Language file
if(LANGUAGE_LOADED) {
	if(!file_exists(WB_PATH.'/modules/droplets/languages/'.LANGUAGE.'.php')) {
		require_once(WB_PATH.'/modules/droplets/languages/EN.php');
	} else {
		require_once(WB_PATH.'/modules/droplets/languages/'.LANGUAGE.'.php');
	}
}

// check if backend.css file needs to be included into the <body></body>
if(!method_exists($admin, 'register_backend_modfiles') && file_exists(WB_PATH .'/modules/droplets/backend.css')) {
	echo '<style type="text/css">';
	include(WB_PATH .'/modules/droplets/backend.css');
	echo "\n</style>\n";
}

// Get userid for showing admin only droplets or not
$loggedin_user = $admin->get_user_id();
	
// And... action
$admintool_url = ADMIN_URL .'/admintools/index.php';

//removes empty entries from the table so they will not be displayed
$database->query("DELETE FROM ".TABLE_PREFIX."mod_droplets WHERE name=''");
?>
<style type="text/css">
a.tooltip span {display:none; margin-left:14px; width:430px;}
a.tooltip:hover span{display:inline; position:absolute; padding:5px; border:1px solid #000000; background:#ffffff; color:#000000;}
</style>

<br />
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
	<td valign="bottom" width="30%">
		<button class="add" type="button" name="add_droplet" onclick="javascript: window.location = '<?php echo WB_URL; ?>/modules/droplets/add_droplet.php';"><?php echo $TEXT['ADD'].' '.$DR_TEXT['DROPLETS']; ?></button>	
	</td>
	<td align="center"><img src="<?php echo WB_URL; ?>/modules/droplets/img/droplets_logo.png" border="1" alt=""/></td>
	<td valign="top" width="30%" align="right">
		<a href="#" onclick="javascript: window.open('<?php echo WB_URL; ?>/modules/droplets/readme/<?php echo $DR_TEXT['README']; ?>','helpwindow','width=700,height=550,directories=no,location=no,menubar=no,scrollbars=yes,status=no,toolbar=no,resizable=yes');"><?php echo $DR_TEXT['HELP']; ?></a>
		<br /><br />
		<a href="#" onclick="javascript: window.location = '<?php echo WB_URL; ?>/modules/droplets/backup_droplets.php';"><?php echo $DR_TEXT['BACKUP']; ?></a>
	</td>
</tr>
</table>
<br />

<h2><?php echo $TEXT['MODIFY'].'/'.$TEXT['DELETE'].' '.$DR_TEXT['DROPLETS']; ?></h2>
<?php
if ($loggedin_user == '1') {
	$query_droplets = $database->query("SELECT * FROM ".TABLE_PREFIX."mod_droplets ORDER BY modified_when DESC");
} else { 
	$query_droplets = $database->query("SELECT * FROM ".TABLE_PREFIX."mod_droplets WHERE admin_view <> '1' ORDER BY modified_when DESC");
}
$num_droplets = $query_droplets->numRows();
if($num_droplets > 0) {
	?>
	<table class="row_a" border="0" cellspacing="0" cellpadding="3" width="100%">
	<tr>
		<thead>
			<td width="3%"></td>
			<td width="21%"><?php echo $TEXT['NAME']; ?></td>
			<td width="68%"><?php echo $TEXT['DESCRIPTION']; ?></td>
			<td width="4%"><?php echo $TEXT['ACTIVE']; ?></td>  
			<td width="3%"></td>
		</thead>
	</tr>
	<?php
	$row = 'a';
	while($droplet = $query_droplets->fetchRow()) {
		$get_modified_user = $database->query("SELECT display_name,username, user_id FROM ".TABLE_PREFIX."users WHERE user_id = '".$droplet['modified_by']."' LIMIT 1");
		if($get_modified_user->numRows() > 0) {
			$fetch_modified_user = $get_modified_user->fetchRow();
			$modified_user = $fetch_modified_user['username'];
			$modified_userid = $fetch_modified_user['user_id'];
		} else {
			$modified_user = $TEXT['UNKNOWN'];
			$modified_userid = 0;
		}
		$comments = str_replace(array("\r\n", "\n", "\r"), '<br />', $droplet['comments']);
		if (!strpos($comments,"[[")) $comments = "Use: [[".$droplet['name']."]]<br />".$comments;
		$comments = str_replace(array("[[", "]]"), array('<b>[[',']]</b>'), $comments);
		$valid_code = check_syntax($droplet['code']);
		if (!$valid_code === true) $comments = '<font color=\'red\'><strong>'.$DR_TEXT['INVALIDCODE'].'</strong></font><br /><br />'.$comments;
		$unique_droplet = check_unique ($droplet['name']);
		if ($unique_droplet === false) $comments = '<font color=\'red\'><strong>'.$DR_TEXT['NOTUNIQUE'].'</strong></font><br /><br />'.$comments;
		$comments = '<span>'.$comments.'</span>';
		?>
		
		<tr class="row_<?php echo $row; ?>" height="20">
			<td >
				<a href="<?php echo WB_URL; ?>/modules/droplets/modify_droplet.php?droplet_id=<?php echo $droplet['id']?>" title="<?php echo $TEXT['MODIFY']; ?>">
					<img src="<?php echo THEME_URL; ?>/images/modify_16.png" border="0" alt="Modify" /> 
				</a>
			</td>
			<td >
				<a href="<?php echo WB_URL; ?>/modules/droplets/modify_droplet.php?droplet_id=<?php echo $droplet['id']?>" class="tooltip">
							<?php if ($valid_code && $unique_droplet) { ?><img src="<?php echo WB_URL; ?>/modules/droplets/img/droplet.png" border="0" alt=""/>
							<?php } else {  ?><img src="<?php echo WB_URL; ?>/modules/droplets/img/invalid.gif" border="0" title="" alt=""/><?php }  ?>
					<?php echo $droplet['name']; ?><?php echo $comments; ?>
				</a>
			</td>
			<td >
				<small><?php echo substr($droplet['description'],0,90); ?></small>
			</td>
			<td >
				<b><?php if($droplet['active'] == 1){ echo '<span style="color: green;">'. $TEXT['YES']. '</span>'; } else { echo '<span style="color: red;">'.$TEXT['NO'].'</span>';  } ?></b>
			</td>
			<td >
				<a href="javascript: confirm_link('<?php echo $TEXT['ARE_YOU_SURE']; ?>', '<?php echo WB_URL; ?>/modules/droplets/delete_droplet.php?droplet_id=<?php echo $droplet['id']?>');" title="<?php echo $TEXT['DELETE']; ?>">
					<img src="<?php echo THEME_URL; ?>/images/delete_16.png" border="0" alt="X" />
				</a>
			</td>
		</tr>
		<?php
		// Alternate row color
		if($row == 'a') {
			$row = 'b';
		} else {
			$row = 'a';
		}
	}
	?>
	</table>
	<?php
}

function check_syntax($code) {
    return @eval('return true;' . $code);
}

function check_unique($name) {
	global $database;
	$query_droplets = $database->query("SELECT name FROM ".TABLE_PREFIX."mod_droplets WHERE name = '$name'");
	return ($query_droplets->numRows() == 1);
}
?>