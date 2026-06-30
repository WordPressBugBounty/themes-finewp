<?php
/**
* The header for FineWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('finewp-animated finewp-fadein'); ?> id="finewp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#finewp-posts-wrapper"><?php esc_html_e( 'Skip to content', 'finewp' ); ?></a>

<?php if ( !(finewp_get_option('disable_secondary_menu')) ) { ?>
<div class="finewp-container finewp-secondary-menu-container clearfix">
<div class="finewp-secondary-menu-container-inside clearfix">
<nav class="finewp-secondary-nav" id="finewp-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'finewp' ); ?>">
<div class="finewp-outer-wrapper">
<button class="finewp-secondary-responsive-menu-icon" aria-controls="finewp-menu-secondary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'finewp' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'finewp-menu-secondary-navigation', 'menu_class' => 'finewp-secondary-nav-menu finewp-menu-secondary', 'fallback_cb' => 'finewp_top_fallback_menu', 'container' => '', ) ); ?>
</div>
</nav>
</div>
</div>
<?php } ?>

<div class="finewp-container" id="finewp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="finewp-head-content clearfix" id="finewp-head-content">

<?php finewp_header_image(); ?>

<?php if ( !(finewp_get_option('hide_header_content')) ) { ?>
<div class="finewp-outer-wrapper">
<div class="finewp-header-inside clearfix">

<div id="finewp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="finewp-logo-img-link">
        <img src="<?php echo esc_url( finewp_custom_logo() ); ?>" alt="" class="finewp-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php finewp_site_title(); ?>
    </div>
<?php endif; ?>
</div><!--/#finewp-logo -->

<div class="finewp-header-banner">
<?php dynamic_sidebar( 'finewp-header-banner' ); ?>
</div><!--/.finewp-header-banner -->

</div>
</div>
<?php } ?>

</div><!--/#finewp-head-content -->
</div><!--/#finewp-header -->

<?php if ( !(finewp_get_option('disable_primary_menu')) ) { ?>
<div class="finewp-container finewp-primary-menu-container clearfix">
<div class="finewp-primary-menu-container-inside clearfix">
<nav class="finewp-primary-nav" id="finewp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'finewp' ); ?>">
<div class="finewp-outer-wrapper">
<button class="finewp-primary-responsive-menu-icon" aria-controls="finewp-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'finewp' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'finewp-menu-primary-navigation', 'menu_class' => 'finewp-primary-nav-menu finewp-menu-primary', 'fallback_cb' => 'finewp_fallback_menu', 'container' => '', ) ); ?>
<?php if ( !(finewp_get_option('hide_header_social_buttons')) ) { finewp_header_social_buttons(); } ?>
</div>
</nav>
</div>
</div>
<?php } ?>

<div id="finewp-search-overlay-wrap" class="finewp-search-overlay">
  <button class="finewp-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'finewp' ); ?>"><i class="fa fa-times" aria-hidden="true" title="<?php esc_attr_e('Close Search','finewp'); ?>"></i></button>
  <div class="finewp-search-overlay-content">
    <?php get_search_form( array(
        'echo'       => true,
        'aria_label' => esc_attr__('Overlay Search Box','finewp'),
    ) ); ?>
  </div>
</div>

<?php if(is_front_page() && !is_paged()) { ?>
<?php if ( finewp_get_option('enable_slider') ) { finewp_slider(); } ?>
<?php } ?>

<div class="finewp-outer-wrapper">
<?php finewp_top_wide_widgets(); ?>
</div>

<div class="finewp-outer-wrapper">
<div class="finewp-container clearfix" id="finewp-wrapper">
<div class="finewp-content-wrapper clearfix" id="finewp-content-wrapper">