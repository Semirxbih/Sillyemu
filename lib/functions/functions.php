<?php

if (!function_exists('sillyemu_navbar_burger')) {
    /**
     * Display the needed Bulma hamburger icon on mobile
     */
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

/**
 * Display the logo inside the header.php file
 *
 * @param $class
 * @param $logo
 */
//if (!function_exists('sillyemu_logo')) {
//    function sillyemu_logo($class, $logo) {
//        $output = '
//            <a class="' . $class . '" href="' . esc_url(home_url('/')) . '">
//              <img src="' . esc_url($logo) . '" width="112" height="28">
//            </a>';
//        echo $output;
//    }
//}

if (!function_exists('sillyemu_copyright')) {
    function sillyemu_copyright() {
        $output = '
			<p class="copyright">Copyright &copy; '. date('Y') . '
				<a href=" ' . home_url() . '">' . PARENT_THEME_NAME . '</a> - All rights reserved.
			</p>';
        echo $output;
    }
}

// WordPress Core Function Upgrades
/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
 */
if (!function_exists('sillyemu_wp_body_open')) {
    function sillyemu_wp_body_open() {
        do_action('wp_body_open');
    }
}