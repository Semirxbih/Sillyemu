<?php

if (!class_exists('Customizer'))
{
    // Set the priority on init to 0 to not call it later, default: 10
    add_action('init', ['Customizer', 'init'], 0);

    /**
     * Class Customizer
     */
    class Customizer
    {
        /**
         * The Customizer Object
         *
         * @var $class
         */
        static private $class = null;

        /**
         * Initialize the class
         *
         * @return Customizer|null
         */
        public static function init() : object
        {
            // If the class object is null, create new object
            if (null === self::$class) {
                self::$class = new self();
            }
            return self::$class;
        }

        /**
         * Customizer constructor.
         */
        public function __construct()
        {
            add_action('init', [$this, 'actions']);
        }

        /**
         * Hook into actions
         */
        public function actions()
        {
            add_action('customize_register', [$this, 'register'], 998);
            add_action('customize_register', [$this, 'deregister'], 999);
        }

        /**
         * @param $wp_customize
         */
        public function register(object $wp_customize)
        {
            // Login Screen
            $wp_customize->add_section('admin_login_panel_section_logo',
                [
                    'title' => 'Admin Login',
                    'panel' => 'admin_panel',
                    'capability' => 'edit_theme_options',
                ]
            );
            $wp_customize->add_setting('admin_login_panel_logo',
                [
                    'default' => '',
                    'transport' => 'refresh',
                    'sanitize_callback' => 'absint',
                ]
            );
            $wp_customize->add_setting('admin_login_panel_logo_url',
                [
                    'default' => '',
                    'transport' => 'refresh',
                    'sanitize_callback' => 'sanitize_url',
                ]
            );
            $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'admin_login_panel_logo',
                [
                    'label' => __('Login Logo'),
                    'description' => esc_html__( 'Upload a logo to be featured on the Admin login page' ),
                    'section' => 'admin_login_panel_section_logo',
                    'priority' => 9, // Optional. Order priority to load the control. Default: 10
                    'mime_type' => 'image',
                    'flex_width' => false,
                    'flex_height' => false,
                    'width' => 320,
                    'height' => 100,
                    'button_labels' => [ // The button labels can be optional
                        'select' => __('Select File'),
                        'change' => __('Change File'),
                        'default' => __('Default'),
                        'remove' => __('Remove'),
                        'placeholder' => __('No file selected'),
                        'frame_title' => __('Select File'),
                        'frame_button' => __('Choose File'),
                    ]
                ]
            ));
            $wp_customize->add_control('admin_login_panel_logo_url',
                [
                    'label' => __('Logo URL'),
                    'description' => esc_html__('Please enter the url that will be used to represent the login logo.'),
                    'section' => 'admin_login_panel_section_logo',
                    'type' => 'url',
                    'capability' => 'edit_theme_options',
                    'input_attrs' => [
//                        'class' => 'my-custom-class',
//                        'style' => 'border: 1px solid rebeccapurple',
                        'placeholder' => __('Enter URL...'),
                    ],
                ]
            );

            // Admin Customizer
            $wp_customize->add_panel('admin_panel',
                [
                    'title' => __('Admin', 'admin-customizer'),
                    'description' => esc_html__('Use this section for random UI configurations.'),
                    'capability' => 'edit_theme_options',
                ]
            );
            $wp_customize->add_section('admin_panel_ui',
                [
                    'title' => 'Admin UI',
                    'panel' => 'admin_panel',
                    'capability' => 'edit_theme_options',
                ]
            );
            $wp_customize->add_setting('admin_panel_adminbar',
                [
                    'default' => '0',
                    'transport' => 'refresh',
                    'sanitize_callback' => '',
                ]
            );
            $wp_customize->add_control('admin_panel_adminbar',
                [
                    'label' => __('Hide Admin bar'),
                    'description' => esc_html__('Check the box if you would like to hide the admin bar for logged in users.'),
                    'section' => 'admin_panel_ui',
                    'type' => 'checkbox',
                    'capability' => 'edit_theme_options',
                ]
            );
        }

        /**
         * Deregister Customizer items
         *
         * @param $wp_customize
         */
        public function deregister(object $wp_customize)
        {
            // Remove the tagline in Customizer
            $wp_customize->remove_control('blogdescription');

            // Remove the static page section
            $wp_customize->remove_section('static_front_page');

            // Remove the menus section
            $wp_customize->remove_panel('nav_menus');
        }
    }
}