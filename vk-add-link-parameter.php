<?php
/**
 * Plugin Name: VK Add Link Parameter
 * Description: Adds a custom parameter to the VK share link.
 * Version: 0.1.0
 * Author: Vektor, Inc.
 * Author URI: https://www.vektor-inc.co.jp
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: vk-add-link-parameter
 *
 * @package VK Add Link Parameter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

require_once __DIR__ . '/vendor/autoload.php';

$valp_update_checker = PucFactory::buildUpdateChecker(
	'https://license.vektor-inc.co.jp/check/?action=get_metadata&slug=vk-add-link-parameter',
	__FILE__,
	'vk-add-link-parameter'
);


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
