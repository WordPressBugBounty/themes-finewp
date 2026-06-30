<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="finewp-grid-post <?php echo esc_attr( finewp_post_grid_cols() ); ?>">
<div class="finewp-grid-post-inside">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(finewp_get_option('hide_thumbnail')) ) { ?>
    <div class="finewp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'finewp' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="finewp-grid-post-thumbnail-link"><?php the_post_thumbnail(finewp_grid_thumb_style(), array('class' => 'finewp-grid-post-thumbnail-img')); ?></a>
        <?php if ( !(finewp_get_option('hide_comments_link_home')) ) { ?><?php finewp_grid_comments(); ?><?php } ?>
        <?php if ( !(finewp_get_option('hide_read_more_button')) ) { ?><div class='finewp-grid-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( finewp_read_more_text() ); ?><span class="screen-reader-text"> <?php the_title(); ?></span></a></div><?php } ?>
    </div>
    <?php } else { ?>
    <div class="finewp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'finewp' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="finewp-grid-post-thumbnail-link"><img src="<?php echo esc_url( finewp_grid_no_thumb_url() ); ?>" class="finewp-grid-post-thumbnail-img"/></a>
        <?php if ( !(finewp_get_option('hide_comments_link_home')) ) { ?><?php finewp_grid_comments(); ?><?php } ?>
        <?php if ( !(finewp_get_option('hide_read_more_button')) ) { ?><div class='finewp-grid-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( finewp_read_more_text() ); ?><span class="screen-reader-text"> <?php the_title(); ?></span></a></div><?php } ?>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="finewp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'finewp' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="finewp-grid-post-thumbnail-link"><img src="<?php echo esc_url( finewp_grid_no_thumb_url() ); ?>" class="finewp-grid-post-thumbnail-img"/></a>
        <?php if ( !(finewp_get_option('hide_comments_link_home')) ) { ?><?php finewp_grid_comments(); ?><?php } ?>
        <?php if ( !(finewp_get_option('hide_read_more_button')) ) { ?><div class='finewp-grid-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( finewp_read_more_text() ); ?><span class="screen-reader-text"> <?php the_title(); ?></span></a></div><?php } ?>
    </div>
    <?php } ?>

    <div class="finewp-grid-post-details">
    <?php if ( !(finewp_get_option('hide_post_categories_home')) ) { finewp_grid_cats(); } ?>

    <?php the_title( sprintf( '<h3 class="finewp-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php finewp_grid_postmeta(); ?>

    <?php if ( !(finewp_get_option('hide_post_snippet')) ) { ?><div class="finewp-grid-post-snippet"><?php the_excerpt(); ?></div><?php } ?>
    </div>

</div>
</div>