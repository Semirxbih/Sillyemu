<?php

/**
 * Hide the admin bar on checkbox configuration
 */
if (true == get_theme_mod('admin_panel_adminbar', false)) {
    show_admin_bar(false);
}

if (!function_exists('sillyemu_screen_reader_text')) {
    function sillyemu_screen_reader_text() {
        $output = '<a class="skip-link screen-reader-text" href="#content">Skip to content</a>';
        echo $output;
    }
}