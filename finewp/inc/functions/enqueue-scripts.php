<?php
/**
* Enqueue scripts and styles
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_scripts() {
    wp_enqueue_style('finewp-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
    wp_enqueue_style('finewp-webfont', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Domine:400,700|Oswald:400,700|Patua+One&amp;display=swap', array(), NULL);
    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);

    $finewp_primary_menu_active = FALSE;
    if ( !finewp_get_option('disable_primary_menu') ) {
        $finewp_primary_menu_active = TRUE;
    }
    $finewp_secondary_menu_active = FALSE;
    if ( !finewp_get_option('disable_secondary_menu') ) {
        $finewp_secondary_menu_active = TRUE;
    }

    $finewp_sticky_menu = TRUE;
    $finewp_sticky_mobile_menu = TRUE;
    if ( !finewp_get_option('enable_sticky_mobile_menu') ) {
        $finewp_sticky_mobile_menu = FALSE;
    }

    $finewp_sticky_sidebar = TRUE;
    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
           $finewp_sticky_sidebar = FALSE;
        }
    } else {
        if ( is_404() ) {
            $finewp_sticky_sidebar = FALSE;
        }
    }
    if ( $finewp_sticky_sidebar ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    $finewp_slider = FALSE;
    if ( finewp_get_option('enable_slider') ) {
        $finewp_slider = TRUE;
    }
    if ( $finewp_slider ) {
    if(is_front_page() && !is_paged()) {
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), NULL );
        wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array( 'jquery' ), NULL, true);
    }
    }

    $finewp_columnwidth = '.finewp-3-col-sizer';
    $finewp_gutter = '.finewp-3-col-gutter';

    wp_enqueue_script('finewp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('finewp-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('finewp-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery', 'imagesloaded', 'masonry' ), NULL, true);
    wp_localize_script( 'finewp-customjs', 'finewp_ajax_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'primary_menu_active' => $finewp_primary_menu_active,
            'secondary_menu_active' => $finewp_secondary_menu_active,
            'sticky_menu' => $finewp_sticky_menu,
            'sticky_menu_mobile' => $finewp_sticky_mobile_menu,
            'sticky_sidebar' => $finewp_sticky_sidebar,
            'columnwidth' => $finewp_columnwidth,
            'gutter' => $finewp_gutter,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'finewp_scripts' );

/**
 * Enqueue customizer styles.
 */
function finewp_enqueue_customizer_styles() {
    wp_enqueue_style( 'finewp-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'finewp_enqueue_customizer_styles' );