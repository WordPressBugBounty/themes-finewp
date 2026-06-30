<?php
/**
* The template for displaying archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="finewp-main-wrapper clearfix" id="finewp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="finewp-main-wrapper-inside clearfix">

<?php finewp_top_widgets(); ?>

<div class="finewp-posts-wrapper" id="finewp-posts-wrapper">

<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>

<div class="finewp-posts-content">
<div class="finewp-posts-container">

<?php if (have_posts()) : ?>

    <div class="finewp-posts">
    <div class="<?php echo esc_attr( finewp_post_grid_cols() ); ?>-sizer"></div>
    <div class="<?php echo esc_attr( finewp_post_grid_cols() ); ?>-gutter"></div>
    <?php $finewp_total_posts = $wp_query->post_count; ?>
    <?php $finewp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', finewp_post_style() ); ?>

    <?php $finewp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php finewp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#finewp-posts-wrapper -->

<?php finewp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#finewp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>