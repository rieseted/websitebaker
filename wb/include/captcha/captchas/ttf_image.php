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

require_once("../../../config.php");
require_once(WB_PATH.'/include/captcha/captcha.php');

// get lists of fonts and backgrounds
require_once(WB_PATH.'/search/search_modext.php');
list($fonts, $dirs) = list_files_dirs(WB_PATH.'/include/captcha/fonts', false);
list($bgs, $dirs) = list_files_dirs(WB_PATH.'/include/captcha/backgrounds', false);
$fonts = clear_filelist($fonts, '\.ttf$');
$bgs = clear_filelist($bgs, '\.png$');

// make random string
if(!function_exists('randomString')) {
	function randomString($len) {
		list($usec, $sec) = explode(' ', microtime());
		srand((float)$sec + ((float)$usec * 100000));
		//$possible="ABCDEFGHJKLMNPRSTUVWXYZabcdefghkmnpqrstuvwxyz23456789";
		$possible="abdfhkrsvwxyz23456789";
		$str="";
		while(strlen($str)<$len) {
			$str.=substr($possible,(rand()%(strlen($possible))),1);
		}
		return($str);
	}
}
$text = randomString(5); // number of characters
$_SESSION['captcha'] = $text; 

// choose a font and background
$font = $fonts[array_rand($fonts)];
$bg = $bgs[array_rand($bgs)];
// get image-dimensions
list($width, $height, $type, $attr) = getimagesize($bg);

// create image
$image_failed = true;
$i=0;
do {
	$image = ImageCreateFromPNG($bg); // backgroundimage
	$grey = rand(0,50);
	$color = ImageColorAllocate($image, $grey, $grey, $grey); // Farbe
	$ttf = $font;
	$ttfsize = 25; // fontsize
	$angle = rand(0,5);
	$t_x = rand(5,30);
	$t_y = rand($height-10,$height-2);
	$res = imagettftext($image, $ttfsize, $angle, $t_x, $t_y, $color, $ttf, $text);
	// check if text fits into the image
	if(($res[0]>0 && $res[0]<$width) && ($res[1]>0 && $res[1]<$height) && 
	   ($res[2]>0 && $res[2]<$width) && ($res[3]>0 && $res[3]<$height) && 
	   ($res[4]>0 && $res[4]<$width) && ($res[5]>0 && $res[5]<$height) && 
	   ($res[6]>0 && $res[6]<$width) && ($res[7]>0 && $res[7]<$height)
	) {
		$image_failed = false;
	}
	if(++$i > 5) // too many tries! Use the image
		break;
} while($image_failed);

captcha_header();
ob_start();
imagepng($image);
header("Content-Length: ".ob_get_length()); 
ob_end_flush();
imagedestroy($image);

?>