<?php
/**
 * Plugin name: My fancybox3
 * Description: Подключает fancybox 3
 */

defined( 'ABSPATH' ) || die();

add_action( 'wp_enqueue_scripts', 'add_my_fancybox_3' );

function add_my_fancybox_3() {
	wp_enqueue_style( 'fancybox-3-css', plugin_dir_url( __FILE__ ) . 'jquery.fancybox.min.css' );
	wp_enqueue_script( 'fancybox-3-js', plugin_dir_url( __FILE__ ) . 'jquery.fancybox.min.js', array( 'jquery' ) );
}