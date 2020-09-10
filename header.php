<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sillyemu
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

        <!-- Outputting scripts that must come immediately after body -->
        <?php if (function_exists('wp_body_open')) {
            wp_body_open();
        } ?>

        <header id="header" style="background-color: skyblue">

            <nav class="navbar container" style="background-color: lightyellow">
                <div class="navbar-brand">
                    <?php sillyemu_logo('navbar-item', get_custom_logo()); ?>
                    <?php sillyemu_navbar_burger(); ?>
                </div>

                <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start">
                        <p>Test</p>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="navbar-item" href="https://bulma.io/">
                                Home
                            </a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
                                    Docs
                                </a>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
                                        Overview
                                    </a>
                                    <a class="navbar-item" href="https://bulma.io/documentation/overview/modifiers/">
                                        Modifiers
                                    </a>
                                    <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                                        Columns
                                    </a>
                                    <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                                        Layout
                                    </a>
                                    <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                                        Form
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                                        Elements
                                    </a>
                                    <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                                        Components
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>


        </header>



        <div id="content" class="site-content" style="background-color: #00a699">
