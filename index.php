<?php
/*
Plugin name:Custom Toolbar
Plugin URI:http://www.wordpress/toolbar
Description:This is a testing toolbar
Author:Rishni Meemeduma
Author URI:http://www.ris.tt
Version:1.3

*/
// Add Toolbar Menus
// Add Toolbar Menus
function custom_toolbar() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'parent-menu',
		'title'  => __( 'Main Menu', 'text_domain' ),
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'child-menu',
		'parent' => 'parent-menu',
		'title'  => __( 'Sub Menu', 'text_domain' ),
	);
	$wp_admin_bar->add_menu( $args );

}
add_action( 'wp_before_admin_bar_render', 'custom_toolbar', 999 );

?>