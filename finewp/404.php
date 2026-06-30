<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='finewp-main-wrapper clearfix' id='finewp-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="finewp-main-wrapper-inside clearfix">

<div class='finewp-posts-wrapper finewp-box' id='finewp-posts-wrapper'>
<div class='finewp-box-inside'>

<header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'finewp' ); ?></h1>
</header><!-- .page-header -->

<div class='finewp-posts-content'>

    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'finewp' ); ?></p>

    <?php get_search_form( array(
        'echo'       => true,
        'aria_label' => esc_attr__('404 Page Search Box','finewp'),
    ) ); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    
    <div>
        <h2><?php esc_html_e( 'Most Used Categories', 'finewp' ); ?></h2>
        <ul>
        <?php
                wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                ) );
        ?>
        </ul>
    </div>

    <?php
        /* translators: %1$s: smiley */
        $finewp_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'finewp' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$finewp_archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>

</div>
</div><!--/#finewp-posts-wrapper -->

</div>
</div>
</div><!-- /#finewp-main-wrapper -->

<?php get_footer(); ?>