<?php
/*
Plugin name: MP3 link player
Plugin URI: http://wordpress.org/extend/plugins/mp3-link-player/
Version: 1.0
Author: Reuben Gunday
Author URI: http://www.revood.com
Description: Turns all mp3 links into a playlist using Yahoo Media Player API. To use this plugin you should agree to the <a href="http://info.yahoo.com/legal/us/yahoo/utos/utos-173.html">Yahoo! Terms of service</a>.
Licence: GPLv2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_action( 'init', 'include_yapi');
function include_yapi( ) {
	if( !is_admin() ) {
		wp_register_script( 'yplayer', 'http://mediaplayer.yahoo.com/js' );
		wp_enqueue_script( 'yplayer' );
	}
}
?>