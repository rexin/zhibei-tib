<?php
/*
Plugin Name: Permalink Encoding 
Plugin URI: http://www.freakcommander.de/4967/computer/wordpress/wp-plugin-permalink-encoding/
Description: This plugin encodes NON-ASCII characters in pretty permalinks by using Percent-Encoding described in RFC3986.
Version: 1.0
Author: Christian Hops
Author URI: http://www.freakcommander.de
License: GPL2
*/

function raw_title( $title, $raw_title="", $context="" ) {
	if ( $context == 'save' )
		return $raw_title;
	else
		return $title;
}

function custom_permalinks($title) {
	$title = sanitize_title_with_dashes($title);
	$toupper = create_function('$m', 'return strtoupper($m[0]);');
	$title = preg_replace_callback('/(%[0-9a-f]{2}?)+/', $toupper, $title);
	return $title;
}

remove_filter('sanitize_title', 'sanitize_title_with_dashes');
add_filter( 'sanitize_title', 'raw_title', 9, 3 );
add_filter( 'sanitize_title', 'custom_permalinks' , 10);
?>
