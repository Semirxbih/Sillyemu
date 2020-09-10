<?php
/**
 * Scripts and Styles
 *
 * This file contains functions that will enqueue scripts and styles
 *
 * @package Sillyemu
 * @version 1.0
 */

/**
 * Enqueue scripts and styles
 */
if (!function_exists('sillyemu_scripts')) {
    function sillyemu_scripts() {
        wp_enqueue_style('bulma-style', get_template_directory_uri() . '/node_modules/bulma/css/bulma.css', [], time(), '');
    }
}
add_action('wp_enqueue_scripts', 'sillyemu_scripts');