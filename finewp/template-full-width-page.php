<?php
/**
* The template for displaying full-width page.
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: page
*/

get_header(); ?>

<div class="finewp-main-wrapper clearfix" id="finewp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="finewp-main-wrapper-inside clearfix">

<?php finewp_top_widgets(); ?>

<div class="finewp-posts-wrapper" id="finewp-posts-wrapper">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#finewp-posts-wrapper -->

<?php finewp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#finewp-main-wrapper -->

<?php get_footer(); ?>