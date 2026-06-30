<?php
/**
* FineWP functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

define( 'FINEWP_PROURL', 'https://themesdna.com/finewp-pro-wordpress-theme/' );
define( 'FINEWP_CONTACTURL', 'https://themesdna.com/contact/' );
define( 'FINEWP_THEMEOPTIONSDIR', get_template_directory() . '/inc/admin' );

// Add new constant that returns true if WooCommerce is active
define( 'FINEWP_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

require_once( FINEWP_THEMEOPTIONSDIR . '/customizer.php' );

function finewp_get_option($option) {
    $finewp_options = get_option('finewp_options');
    if ((is_array($finewp_options)) && (array_key_exists($option, $finewp_options))) {
        return $finewp_options[$option];
    }
    else {
        return '';
    }
}

if ( ! function_exists( 'finewp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function finewp_setup() {
    
    global $wp_version;

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on FineWP, use a find and replace
     * to change 'finewp' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'finewp', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'finewp-large-image',  1200, 9999, false );
        add_image_size( 'finewp-featured-image',  850, 9999, false );
        add_image_size( 'finewp-horizontal-image',  480, 360, true );
        add_image_size( 'finewp-square-image',  480, 480, true );
        add_image_size( 'finewp-vertical-image',  480, 640, true );
        add_image_size( 'finewp-hauto-image',  480, 9999, false );
        add_image_size( 'finewp-mini-image',  100, 100, true );
    }

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => esc_html__('Primary Menu', 'finewp'),
    'secondary' => esc_html__('Secondary Menu', 'finewp')
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'navigation-widgets' );
    add_theme_support( 'html5', $markup );

    add_theme_support( 'custom-logo', array(
        'height'      => 90,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Support for Custom Header
    add_theme_support( 'custom-header', apply_filters( 'finewp_custom_header_args', array(
        'default-image'          => '',
        'default-text-color'     => '333333',
        'width'                  => 1920,
        'height'                 => 375,
        'flex-height'            => true,
        'wp-head-callback'       => 'finewp_header_style',
        'uploads'                => true,
    ) ) );

    // Set up the WordPress core custom background feature.
    $background_args = array(
            'default-color'          => 'e6e6e6',
            'default-image'          => get_template_directory_uri() .'/assets/images/background.png',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'     => 'auto',
            'default-attachment'     => 'fixed',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => 'admin_head_callback_func',
            'admin-preview-callback' => 'admin_preview_callback_func',
    );
    add_theme_support( 'custom-background', apply_filters( 'finewp_custom_background_args', $background_args) );
    
    // Support for Custom Editor Style
    add_editor_style( 'assets/css/editor-style.css' );

    if ( !(finewp_get_option('enable_widgets_block_editor')) ) {
        remove_theme_support( 'widgets-block-editor' );
    }

}
endif;
add_action( 'after_setup_theme', 'finewp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function finewp_content_width() {
    $finewp_content_width = 850;

    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
           $finewp_content_width = 1200;
        }
    } else {
        if ( is_404() ) {
            $finewp_content_width = 1200;
        }
    }

    $GLOBALS['content_width'] = apply_filters( 'finewp_content_width', $finewp_content_width ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
}
add_action( 'template_redirect', 'finewp_content_width', 0 );

require_once( trailingslashit( get_template_directory() ) . 'inc/functions/enqueue-scripts.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/widgets-init.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/social-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/post-author-bio-box.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/postmeta.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/posts-navigation.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/menu.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/slider.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/other.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/custom.php' );