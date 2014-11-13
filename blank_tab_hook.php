<?php
/**
* Plugin Name: TJ Blank Tab
* Plugin URI: https: https://github.com/themejunkie/tj-blank-tab
* Description: This plugin will add target="_blank" functionality, which open the link with a new window(Tab).
* Version: 1.0
* Author: Theme Junkie
* Author URI: http://www.theme-junkie.com/
* Author Email: tanvir.focus@gmail.com
*
* This program is free software; you can redistribute it and/or modify it under the terms of the GNU
* General Public License as published by the Free Software Foundation; either version 2 of the License,
* or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
* even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* You should have received a copy of the GNU General Public License along with this program; if not, write
* to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*
*/


//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class blank_tab{
	//calling constructor method
	public function __construct(){
		add_filter('get_comment_author_link', array($this, 'links_in_new_tab'));
		add_filter('comment_text', array($this, 'links_in_new_tab'));
		add_filter('the_content', array($this, 'links_in_new_tab'));
	}

	//functionality method
	public function links_in_new_tab($x){
		$link = str_replace('<a', '<a target="_blank"', $x);
		return $link;
	}
}

$obj= new blank_tab;
?>
