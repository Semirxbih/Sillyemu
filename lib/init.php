<?php

/**
 * This function defines the SillyEmu theme constants
 */
if (!function_exists('sillyemu_constants')) {
    function sillyemu_constants()
    {
        define('PARENT_THEME_NAME', 'Sillyemu');
        define('PARENT_THEME_NAME_CAMELCASE', 'SillyEmu');
        define('PARENT_THEME_NAME_LOWERCASE', 'sillyemu');
        define('PARENT_THEME_VERSION', '1.0.0');
        define('PARENT_THEME_STARTING_DATE', 'August 20th, 2020');

        // Define theme locations
        define('PARENT_DIR', get_template_directory());
        define('PARENT_URL', get_template_directory_uri());
    }
}
add_action('init', 'sillyemu_constants');

/**
 * This function hooks into the theme setup
 */
if (!function_exists('sillyemu_setup')) {
    function sillyemu_setup()
    {
        // Define the file requirements
        require __DIR__ . '/admin/login.php';
        require __DIR__ . '/classes/Customizer.php';
        require __DIR__ . '/functions/functions.php';
        require __DIR__ . '/functions/enqueue.php';

        // Make theme available for translations
        load_theme_textdomain('sillyemu', get_template_directory() . '/languages');
    }
}
add_action('after_setup_theme', 'sillyemu_setup');

?>