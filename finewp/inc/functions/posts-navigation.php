<?php
/**
* Posts navigation functions
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'finewp_wp_pagenavi' ) ) :
function finewp_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'finewp_posts_navigation' ) ) :
function finewp_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        finewp_wp_pagenavi();
    } else {
        the_posts_navigation(array('prev_text' => esc_html__( '&larr; Older posts', 'finewp' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'finewp' )));
    }
}
endif;