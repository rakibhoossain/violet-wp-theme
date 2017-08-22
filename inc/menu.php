<?php
/**
 * @package violet
 */

//Dynamic styles
function violet_custom_styles($custom) {

	$custom = '';
	//Header
	if  ( is_front_page())  {
		$custom = "header {background-color: transparent!important;}";
	}
	//Output all the styles
	wp_add_inline_style( 'violet', $custom );	
}
add_action( 'wp_enqueue_scripts', 'violet_custom_styles' );