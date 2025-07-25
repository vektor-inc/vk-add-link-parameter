<?php
/**
 * Plugin Name: VK Add Link Parameter
 * Description: Adds a custom parameter to the VK share link.
 * Version: 1.0
 * Author: Vektor, Inc.
 * Author URI: https://www.vektor-inc.co.jp
 *
 * @package VK Add Link Parameter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add Link Script
 */
function valp_add_script() {
	wp_enqueue_script(
		'vk-add-link-parameter',
		plugin_dir_url( __FILE__ ) . 'build/vk-add-link-parameter.js',
		array(),
		'1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'valp_add_script' );
