<?php

/**
 * Hide the admin bar on checkbox configuration
 */
if (true == get_theme_mod('admin_panel_adminbar', false)) {
    show_admin_bar(false);
}