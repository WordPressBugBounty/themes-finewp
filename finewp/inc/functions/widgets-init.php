<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_widgets_init() {

register_sidebar(array(
    'id' => 'finewp-header-banner',
    'name' => esc_html__( 'Header Banner', 'finewp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="finewp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'finewp-sidebar-one',
    'name' => esc_html__( 'Main Sidebar', 'finewp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-side-widget finewp-box widget %2$s"><div class="finewp-side-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-home-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'finewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'finewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-home-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Home Page Only)', 'finewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of homepage.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Every Page)', 'finewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of every page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'finewp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'finewp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'finewp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'finewp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-main-widget finewp-box widget %2$s"><div class="finewp-main-widget-inside finewp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-footer-1',
    'name' => esc_html__( 'Footer 1', 'finewp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-footer-2',
    'name' => esc_html__( 'Footer 2', 'finewp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-footer-3',
    'name' => esc_html__( 'Footer 3', 'finewp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'finewp-footer-4',
    'name' => esc_html__( 'Footer 4', 'finewp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'finewp' ),
    'before_widget' => '<div id="%1$s" class="finewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="finewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'finewp_widgets_init' );


function finewp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'finewp-home-top-fullwidth-widgets' ) || is_active_sidebar( 'finewp-top-fullwidth-widgets' ) ) : ?>
<div class="finewp-top-wrapper-outer clearfix">
<div class="finewp-featured-posts-area finewp-top-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'finewp-home-top-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'finewp-top-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function finewp_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'finewp-home-bottom-fullwidth-widgets' ) || is_active_sidebar( 'finewp-bottom-fullwidth-widgets' ) ) : ?>
<div class="finewp-bottom-wrapper-outer clearfix">
<div class="finewp-featured-posts-area finewp-bottom-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'finewp-home-bottom-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'finewp-bottom-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function finewp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'finewp-home-top-widgets' ) || is_active_sidebar( 'finewp-top-widgets' ) ) : ?>
<div class="finewp-featured-posts-area finewp-featured-posts-area-top clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'finewp-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'finewp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function finewp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'finewp-home-bottom-widgets' ) || is_active_sidebar( 'finewp-bottom-widgets' ) ) : ?>
<div class='finewp-featured-posts-area finewp-featured-posts-area-bottom clearfix'>
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'finewp-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'finewp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }