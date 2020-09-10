<?php

require __DIR__ . '/login.php';
require __DIR__ . '/classes/Customizer.php';

/**
 * This function defines the SillyEmu theme constants
 */
function sillyemu_constants() {
    define('PARENT_THEME_NAME' , 'Sillyemu');
    define('PARENT_THEME_NAME_CAMELCASE', 'SillyEmu');
    define('PARENT_THEME_VERSION', '1.0.0');
    define('PARENT_THEME_STARTING_DATE', 'August 20th, 2020');
    define('PARENT_DIR', get_template_directory());
    define('PARENT_URL', get_template_directory_uri());
}
add_action('init', 'sillyemu_constants');

?>