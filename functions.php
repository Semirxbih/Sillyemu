<?php

/**
 * Sillyemu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sillyemu
 * @since Sillyemu 1.0
 */

require_once __DIR__ . '/lib/init.php';

if (!function_exists('sillyemu_setup')) {
    function sillyemu_setup() {
        require get_template_directory() . '/lib/enqueue.php';
        require get_template_directory() . '/lib/functions.php';
    }
}
add_action('after_setup_theme', 'sillyemu_setup');