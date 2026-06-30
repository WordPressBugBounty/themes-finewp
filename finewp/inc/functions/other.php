<?php
/**
* More Custom Functions
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function finewp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $finewp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $finewp_logo = wp_get_attachment_image_src( $finewp_custom_logo_id , 'full' );
    return $finewp_logo[0];
}

// Site Title
function finewp_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_singular() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_category() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_tag() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_author() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_search() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_404() ) { ?>
            <p class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } else { ?>
            <h1 class="finewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="finewp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php }
}

function finewp_read_more_text() {
       $readmoretext = esc_html__( 'Continue Reading...', 'finewp' );
        if ( finewp_get_option('read_more_text') ) {
                $readmoretext = finewp_get_option('read_more_text');
        }
       return $readmoretext;
}

// Category ids in post class
function finewp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'finewp_category_id_class');

// Change excerpt length
function finewp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 20;
    if ( finewp_get_option('read_more_length') ) {
        $read_more_length = finewp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'finewp_excerpt_length');

// Change excerpt more word
function finewp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'finewp_excerpt_more');

// Adds custom classes to the array of body classes.
function finewp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'finewp-group-blog';
    }

    if ( is_archive() ) {
        $classes[] = 'finewp-site-archive';
    }

    if ( is_search() ) {
        $classes[] = 'finewp-site-search';
    }

    if( is_singular() ) {
        $classes[] = 'finewp-site-singular';

        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
           $classes[] = 'finewp-layout-full-width';
        }
    } else {
        if ( is_404() ) {
            $classes[] = 'finewp-layout-full-width';
        }
    }

    if ( !is_active_sidebar( 'finewp-home-bottom-widgets' ) && !is_active_sidebar( 'finewp-single-bottom-widgets' ) && !is_active_sidebar( 'finewp-singular-bottom-widgets' ) && !is_active_sidebar( 'finewp-bottom-widgets' ) ) {
        $classes[] = 'finewp-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'finewp_body_classes' );


function finewp_post_style() {
       $post_style = 'grid';
       return $post_style;
}

function finewp_grid_thumb_style() {
       $thumb_style = 'finewp-horizontal-image';
       return $thumb_style;
}

function finewp_post_grid_cols() {
       $post_column = 'finewp-3-col';
       return $post_column;
}

function finewp_grid_no_thumb_url() {
       $thumb_url = get_template_directory_uri() . '/assets/images/no-image-4-3.jpg';
       return $thumb_url;
}

function finewp_header_image() {
    if ( get_header_image() ) : ?>
    <div class="finewp-header-image clearfix">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="finewp-header-img-link">
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="finewp-header-img"/>
    </a>
    </div>
    <?php endif;
}

if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;