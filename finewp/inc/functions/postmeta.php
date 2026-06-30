<?php
/**
* Post meta functions
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'finewp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function finewp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'finewp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="finewp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'finewp' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'finewp_grid_cats' ) ) :
function finewp_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'finewp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="finewp-grid-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'finewp' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'finewp_grid_comments' ) ) :
function finewp_grid_comments() { ?>
    <?php if ( !(finewp_get_option('hide_comments_link_home')) ) { ?>
    <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="finewp-grid-post-comment-box">
    <?php comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'finewp' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            ); ?>
    </span>
    <?php } ?>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'finewp_grid_postmeta' ) ) :
function finewp_grid_postmeta() { ?>
    <?php if ( !(finewp_get_option('hide_post_author_home')) || !(finewp_get_option('hide_posted_date_home')) ) { ?>
    <div class="finewp-grid-post-footer">
    <div class="finewp-grid-post-footer-inside">
    <?php if ( !(finewp_get_option('hide_post_author_home')) ) { ?><span class="finewp-grid-post-author finewp-grid-post-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Posted by ', 'finewp'); ?></span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(finewp_get_option('hide_posted_date_home')) ) { ?><span class="finewp-grid-post-date finewp-grid-post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Posted on ', 'finewp'); ?></span><?php echo get_the_date(); ?></span><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'finewp_single_cats' ) ) :
function finewp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'finewp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="finewp-entry-meta-single finewp-entry-meta-single-top"><span class="finewp-entry-meta-single-cats"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'finewp' ) . '</span></div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'finewp_single_postmeta' ) ) :
function finewp_single_postmeta() { ?>
    <?php if ( !(finewp_get_option('hide_post_author')) || !(finewp_get_option('hide_posted_date')) || !(finewp_get_option('hide_comments_link')) || !(finewp_get_option('hide_post_edit')) ) { ?>
    <div class="finewp-entry-meta-single">
    <?php if ( !(finewp_get_option('hide_post_author')) ) { ?><span class="finewp-entry-meta-single-author"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Posted by ', 'finewp'); ?></span><span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(finewp_get_option('hide_posted_date')) ) { ?><span class="finewp-entry-meta-single-date"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span class="screen-reader-text"><?php esc_html_e('Posted on ', 'finewp'); ?></span><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(finewp_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="finewp-entry-meta-single-comments"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'finewp' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(finewp_get_option('hide_post_edit')) ) { ?><?php edit_post_link(
    sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Edit <span class="screen-reader-text">%s</span>', 'finewp' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ),
    '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ',
    '</span>'
); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;