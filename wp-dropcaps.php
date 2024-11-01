<?php
/*
Plugin Name: wp-dropcaps
Version: 0.1
Plugin URI: http://conanblog.me/
Author: Conan Chou
Author URI: http://conanblog.me/
Description: wp-dropcaps makes it easy to change the first letter of charactor into a drop-cap. It supports any language.
Example: [dc]T[/dc]his is my paragraph with a drop cap. The first letter 'T' will turn into a drop cap.
*/
function dc_func( $atts, $content = null ) {
	$text = '<span class="dropcap">'.$content.'</span>'; 
	return $text;
}
add_shortcode( 'dc', 'dc_func' );

function dropcap_css() {

	echo "
	<style type='text/css'>
	span.dropcap {
		display: inline;
		float: left;
		margin: 0;
		padding: .26em .08em 0 0;
		#padding: 0.26em 0.08em 0.2em 0.00em;/* override for Microsoft Internet Explorer browsers*/
		_padding: 0.26em 0.08em 0.4em 0.00em; /* override for IE browsers 6.0 and older */	
		font-size: 3.8em;
		line-height: .4em;
		text-transform: capitalize;
		color: #c30;
		font-family: Georgia, Times New Romans, Trebuchet MS, Lucida Grande;
	}
	</style>
	";
}

add_action('wp_head', 'dropcap_css');

?>