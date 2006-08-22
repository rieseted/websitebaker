<?php

// $Id$

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2006, Ryan Djurovich

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

/*

wb class

This class is the basis for admin and frontend classes.

*/

// Include PHPLIB template class
require_once(WB_PATH."/include/phplib/template.inc");

require_once(WB_PATH.'/framework/class.database.php');

class wb
{
	// General initialization function 
	// performed when frontend or backend is loaded.
	function wb() {
	}

	// Check whether we should show a page or not (for front-end)
	function show_page($page) {
		// First check if the page is set to private
		if($page['visibility'] == 'private' OR $page['visibility'] == 'registered') {
			// Check if the user is logged in
			if($this->is_authenticated() == true) {
				// Now check if the user has perms to view it
				$viewing_groups = explode(',', $page['viewing_groups']);
				$viewing_users = explode(',', $page['viewing_users']);
				if(is_numeric(array_search($this->get_group_id(), $viewing_groups)) OR is_numeric(array_search($this->get_user_id(), $viewing_users))) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} elseif($page['visibility'] == 'public') {
			return true;
		} else {
			return false;
		}
	}

	// Check if the user is already authenticated or not
	function is_authenticated() {
		if(isset($_SESSION['USER_ID']) AND $_SESSION['USER_ID'] != "" AND is_numeric($_SESSION['USER_ID'])) {
			return true;
		} else {
			return false;
		}
	}
	// Modified addslashes function which takes into account magic_quotes
	function add_slashes($input) {
		if ( get_magic_quotes_gpc() || ( !is_string($input) ) ) {
			return $input;
		}
		$output = addslashes($input);
		return $output;
	}

	// Ditto for stripslashes
	function strip_slashes($input) {
		if ( !get_magic_quotes_gpc() || ( !is_string($input) ) ) {
			return $input;
		}
		$output = stripslashes($input);
		return $output;
	}

	// Escape backslashes for use with mySQL LIKE strings
	function escape_backslashes($input) {
		return str_replace("\\","\\\\",$input);
	}

	function page_link($link){
		// Check for :// in the link (used in URL's) as well as mailto:
		if(strstr($link, '://') == '' AND substr($link, 0, 7) != 'mailto:') {
			return WB_URL.PAGES_DIRECTORY.$link.PAGE_EXTENSION;
		} else {
			return $link;
		}
	}
	
	// Get POST data
	function get_post($field) {
		if(isset($_POST[$field])) {
			return $_POST[$field];
		} else {
			return null;
		}
	}

	// Get POST data and escape it
	function get_post_escaped($field) {
		$result = $this->get_post($field);
		return (is_null($result)) ? null : $this->add_slashes($result);
	}
	
	// Get GET data
	function get_get($field) {
		if(isset($_GET[$field])) {
			return $_GET[$field];
		} else {
			return null;
		}
	}

	// Get SESSION data
	function get_session($field) {
		if(isset($_SESSION[$field])) {
			return $_SESSION[$field];
		} else {
			return null;
		}
	}

	// Get SERVER data
	function get_server($field) {
		if(isset($_SERVER[$field])) {
			return $_SERVER[$field];
		} else {
			return null;
		}
	}

	// Get the current users id
	function get_user_id() {
		return $_SESSION['USER_ID'];
	}

	// Get the current users group id
	function get_group_id() {
		return $_SESSION['GROUP_ID'];
	}

	// Get the current users group name
	function get_group_name() {
		return $_SESSION['GROUP_NAME'];
	}

	// Get the current users username
	function get_username() {
		return $_SESSION['USERNAME'];
	}

	// Get the current users display name
	function get_display_name() {
		return ($_SESSION['DISPLAY_NAME']);
	}

	// Get the current users email address
	function get_email() {
		return $_SESSION['EMAIL'];
	}

	// Get the current users home folder
	function get_home_folder() {
		return $_SESSION['HOME_FOLDER'];
	}

	// Get the current users timezone
	function get_timezone() {
		if(!isset($_SESSION['USE_DEFAULT_TIMEZONE'])) {
			return $_SESSION['TIMEZONE'];
		} else {
			return '-72000';
		}
	}

	// Validate supplied email address
	function validate_email($email) {
		if(eregi("^([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$", $email)) {
			return true;
		} else {
			return false;
		}
	}

	// Print a success message which then automatically redirects the user to another page
	function print_success($message, $redirect = 'index.php') {
		global $TEXT;
		$success_template = new Template(ADMIN_PATH.'/interface');
		$success_template->set_file('page', 'success.html');
		$success_template->set_block('page', 'main_block', 'main');
		$success_template->set_var('MESSAGE', $message);
		$success_template->set_var('REDIRECT', $redirect);
		$success_template->set_var('NEXT', $TEXT['NEXT']);
		$success_template->parse('main', 'main_block', false);
		$success_template->pparse('output', 'page');
	}
	
	// Print an error message
	function print_error($message, $link = 'index.php', $auto_footer = true) {
		global $TEXT;
		$success_template = new Template(ADMIN_PATH.'/interface');
		$success_template->set_file('page', 'error.html');
		$success_template->set_block('page', 'main_block', 'main');
		$success_template->set_var('MESSAGE', $message);
		$success_template->set_var('LINK', $link);
		$success_template->set_var('BACK', $TEXT['BACK']);
		$success_template->parse('main', 'main_block', false);
		$success_template->pparse('output', 'page');
		if($auto_footer == true) {
			$this->print_footer();
		}
		exit();
	}
	// Validate send email
	function mail($fromaddress, $toaddress, $subject, $message) {
		$fromaddress = preg_replace('/[\r\n]/', '', $fromaddress);
		$toaddress = preg_replace('/[\r\n]/', '', $toaddress);
		$subject = preg_replace('/[\r\n]/', '', $subject);
		if ($fromaddress=='') {
			$fromaddress = SERVER_EMAIL;
		}
		if(defined('DEFAULT_CHARSET')) { 
			$charset = DEFAULT_CHARSET; 
		} else {
			$charset='utf-8';
		}
		$headers  = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/plain; charset=".$charset."\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-MSMail-Priority: Normal\n";
		$headers .= "X-Mailer: Website Baker\n";
		$headers .= "From: ".$fromaddress."\n";
		$headers .= "Return-Path: ".$fromaddress."\n";
		$headers .= "Reply-To: ".$fromaddress."\n";
		$headers .= "\n"; // extra empty line needed??
		if (OPERATING_SYSTEM=='windows') {
			str_replace("\n","\r\n",$headers);
			str_replace("\n","\r\n",$message);
		}	
		if(mail($toaddress, $subject, $message, $headers)) {
			return true;
		} else {
			return false;
		}
	}

}
?>