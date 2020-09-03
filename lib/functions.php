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

if (!function_exists('sillyemu_navbar_burger')) {
    function sillyemu_navbar_burger() {
        $output = '
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>';
        echo $output;
    }
}