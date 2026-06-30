<?php
/**
* Slider
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'finewp_slider' ) ) :

function finewp_slider() { ?>
<div class="finewp-posts-carousel-wrapper">
<div class="finewp-outer-wrapper">
<div class="finewp-box">
<div class="finewp-box-inside">

    <?php
    $slider_length = 5;
    if ( finewp_get_option('slider_length') ) {
        $slider_length = finewp_get_option('slider_length');
    }

    $slider_post_type = 'recent-posts';
    if ( finewp_get_option('slider_post_type') ) {
        $slider_post_type = finewp_get_option('slider_post_type');
    }

    $slider_cat = finewp_get_option('slider_cat');


    if(($slider_post_type === 'category-posts') && $slider_cat) {
        $slider_query = new WP_Query("orderby=date&posts_per_page=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post&cat=$slider_cat");
    } else {
        $slider_query = new WP_Query("orderby=date&posts_per_page=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post");
    }

    if ($slider_query->have_posts()) : ?>

    <div class="finewp-posts-carousel">
    <div class="owl-carousel owl-theme">
    <?php while ($slider_query->have_posts()) : $slider_query->the_post();  ?>
    <div class="finewp-slide-item">
        <?php if(has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('finewp-horizontal-image', array('class' => 'finewp-slider-post-thumbnail-img', 'title' => the_title_attribute( 'echo=0' ))); ?>
        <?php } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-3.jpg' ); ?>" class="finewp-slider-post-thumbnail-img"/>
        <?php } ?>
        <div class="text-over"><h2 class="finewp-carousel-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2></div>
    </div>
    <?php endwhile; ?>
    </div>
    </div>

    <?php wp_reset_postdata();  // Restore global post data stomped by the_post().
    endif; ?>

</div>
</div>
</div>
</div>
<?php }

endif;