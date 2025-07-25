<?php
/**
 * Plugin Name: VK Add Link Parameter
 * Description: Adds a custom parameter to the VK share link.
 * Version: 1.0
 * Author: Vektor, Inc.
 * Author URI: https://www.vektor-inc.co.jp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

/**
 * Adds a custom parameter to the VK share link.
 *
 * @param string $url The original URL.
 * @return string Modified URL with the custom parameter.
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