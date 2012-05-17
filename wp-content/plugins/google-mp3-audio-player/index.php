<?php
/*
Plugin Name: CodeArt - Google MP3 Player
Plugin URI: http://CodeArt.mk
Description: Embeding MP3 audio files using Google MP3 Audio Player.
Version: 1.0.0
Author: CodeArt
Author URI: http://codeart.mk
License: GPL3
*/


/*  Copyright 2012  CodeArt  (email : tomislav@codeart.mk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/




	define('CA_PLUGIN_NAME', 		'codeart-google-mp3-player');
	define( 'CA_PLUGIN_PATH', plugin_dir_path(__FILE__) );
	// define('CA_PLUGIN_PATH', 		ABSPATH . 'wp-content/plugins/' . CA_PLUGIN_NAME);
	define('CA_PLUGIN_TITLE', 		'CodeArt - Google MP3 Audio Plyer');
	define('CA_PLUGIN_ADMIN_PAGE', 	'ca-admin-page.php');
	define('CA_PLUGIN_MENU_TITLE', 	'Google MP3 Player');



	
	/*****************************************************************************
	*	Start of ca_audio shortcode
	******************************************************************************/
	

	/**
	*	Method to generate embed code
	*	@param string $url The URL of the mp3 audio file
	*	@param integer $width Player width in pixels (Optional) [Default: 500px]
	*	@param integer $height Player height in pixels (Optional) [Default: 27px]
	*	@param string $css_class The class of the div (Optional) [Default: ca_google_mp3_audio_player]
	*	@return string HTML code
	*/
	function ca_google_audio_player_code($url = NULL, $width = 500, $height = 27, $css_class = CA_PLUGIN_NAME)
	{
		if( empty($url) ) return 'No File Found';
		
		$width = is_numeric($width) ? $width : 500;
		$height = is_numeric($height) ? $height : 27;
		$css_class = empty($css_class) ? 'ca_google_mp3_audio_player' : $css_class;
		$google_swf_player 	= 'http://www.google.com/reader/ui/3523697345-audio-player.swf';
		$size = ' width="' . $width . '" height="' . $height . '"';
		$embed = '<embed type="application/x-shockwave-flash" src="' . $google_swf_player . '" quality="best" flashvars="audioUrl=' . $url . '" ' . $size . '></embed>';
		
		return '<div class="' . $css_class . '">' . $embed . '</div>';
	}
	
	
	
	
	
	/**
	*	Method to handle 'ca_audio' shortcode
	*	@params array $atts An associative array of attributes
	*	@return callback function ca_google_audio_player_code(...)
	*/
	function ca_google_mp3_audio_player_shortcode_handler( $atts )
	{
		extract( shortcode_atts( array(
			'url' 			=> '',
			'width' 		=> '500',
			'height' 		=> '27',
			'css_class' 	=> CA_PLUGIN_NAME,
		), $atts ) );
		
		return ca_google_audio_player_code($url, $width, $height, $css_class);
	}
	
	
	
	
	/**
	*	Hook, add shorcode 'ca_audio'
	*	@shortcode_name: ca_audio
	*/
	add_shortcode( 'ca_audio', 'ca_google_mp3_audio_player_shortcode_handler' );
	
	
	/*****************************************************************************
	*	End of ca_audio shortcode
	******************************************************************************/



	
	
	
	
	
	/*********************************************
	*	Admin Panel
	*	CodeArt - Google MP3 Audiot Player
	**********************************************/
	
	/**
	*	Method to display the admin page
	*/
	function ca_google_mp3_audio_player_admin_page() {
		$filename = CA_PLUGIN_PATH;
		if( file_exists($filename) ) {
			@require_once(CA_PLUGIN_ADMIN_PAGE);
		} else {
			echo CA_PLUGIN_TITLE . ' ' . CA_PLUGIN_PATH;
		}
	}
	
	
	
	/**
	*	Method to add a submenu into admin area, in settings menu
	*	@submenu_name: CodeArt: Google MP3 Audio Player Plugin
	*	@title: Google MP3 Player
	*	@alias: ca-google-mp3-audio-player
	*	@callback_func: ca_google_mp3_audio_player_admin_page
	*/
	function ca_google_audio_player_menu() {
		//add_options_page('CodeArt - Google MP3 Audio Player Plugin', 'Google MP3 Player', 'manage_options', 'ca-google-mp3-audio-player', 'ca_google_mp3_audio_player_admin_page');
		add_options_page(CA_PLUGIN_TITLE, CA_PLUGIN_MENU_TITLE, 'manage_options', CA_PLUGIN_NAME, 'ca_google_mp3_audio_player_admin_page');
	}
	
	
	
	/**
	*	Hook, add submenu into admin area (in settings menu)
	*/
	add_action('admin_menu', 'ca_google_audio_player_menu');

	
?>