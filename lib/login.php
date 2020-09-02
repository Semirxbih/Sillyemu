<?php

/**
 * Change wp-login.php logo
 *
 * Author: Semir Smajlovic
 */
if (!function_exists('sillyemu_login_logo')) {
    function sillyemu_login_logo()
    {
        // @todo: Fix bug that doesn't show the default WordPress logo when there is no theme mod.
        $logo_url = wp_get_attachment_url(get_theme_mod('login_panel_logo'));
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo $logo_url ?>)!important;
                background-size: cover;
                margin: 0 0 15px auto;
                width: auto;
                height: 100px;
        }
        </style>
        <?php
    }
}
add_action('login_head', 'sillyemu_login_logo');

/**
 * Change wp-login.php logo URL
 *
 * @return string
 */
if (!function_exists('sillyemu_login_url')) {
    function sillyemu_login_url() {
        return esc_url(get_theme_mod('login_panel_logo_url'));
    }
}
add_filter('login_headerurl', 'sillyemu_login_url');