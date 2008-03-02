<?php

// $Id$

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2008, Ryan Djurovich

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

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}
require_once(WB_PATH.'/include/captcha/captcha.php');
require_once(WB_PATH.'/include/captcha/asp.php');
?>

<style>
.value_input input, .value_input text, .value_input select {
	width: 300px;
}
</style>

<h1>&nbsp;<?php echo $TEXT['SIGNUP']; ?></h1>

<form name="user" action="<?php echo WB_URL.'/account/signup.php'; ?>" method="post">

<table cellpadding="5" cellspacing="0" border="0" width="90%">
<tr>
	<?php if(ENABLED_ASP) { // add some honeypot-fields
	?>
	<input type="hidden" name="submitted_when" value="<?php $t=time(); echo $t; $_SESSION['submitted_when']=$t; ?>" />
	<p class="nixhier">
	email-address:
	<label for="email-address">Leave this field empty, dont enter your e-mail address:</label>
	<input id="email-address" name="email-address" size="60" value="" /><br />
	username (id):
	<label for="name">Enter your user name or id not here:</label>
	<input id="name" name="name" size="60" value="" /><br />
	Full Name:
	<label for="full_name">This is to leave blank, dont enter your full name here:</label>
	<input id="full_name" name="full_name" size="60" value="" /><br />
	</p>
	<?php }
	?>
	<td width="180"><?php echo $TEXT['USERNAME']; ?>:</td>
	<td class="value_input">
		<input type="text" name="username" maxlength="30" />
	</td>
</tr>
<tr>
	<td><?php echo $TEXT['DISPLAY_NAME']; ?> (<?php echo $TEXT['FULL_NAME']; ?>):</td>
	<td class="value_input">
		<input type="text" name="display_name" maxlength="255" />
	</td>
</tr>
<tr>
	<td><?php echo $TEXT['EMAIL']; ?>:</td>
	<td class="value_input">
		<input type="text" name="email" maxlength="255" />
	</td>
</tr>
<?php
// Captcha
if(ENABLED_CAPTCHA) {
	?><tr>
		<td class="field_title"><?php echo $TEXT['VERIFICATION']; ?>:</td>
		<td><?php call_captcha(); ?></td>
		</tr>
	<?php
}
?>
<tr>
	<td>&nbsp;</td>
	<td>
		<input type="submit" name="submit" value="<?php echo $TEXT['SIGNUP']; ?>" />
		<input type="reset" name="reset" value="<?php echo $TEXT['RESET']; ?>" />
	</td>
</tr>
</table>

</form>

<br />
&nbsp; 
