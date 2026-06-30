<?php
/**
* Upgrade to pro options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_finewp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'finewp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'finewp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new FineWP_Customize_Static_Text_Control( $wp_customize, 'finewp_upgrade_text_control', array(
        'label'       => esc_html__( 'FineWP Pro', 'finewp' ),
        'section'     => 'sc_finewp_upgrade',
        'settings' => 'finewp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy FineWP? Upgrade to FineWP Pro now and get:', 'finewp' ).
            '<ul class="finewp-customizer-pro-features">' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Color Options', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Font Options', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Layout Options (separate options for singular and non-singular pages)', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Page Templates', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Post Templates', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Slider with More Options', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Posts Grid-Layout Styles (2/3/4/5 Columns)', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Posts Grid-Thumbnails Styles (Horizontal/Square/Vertical/Auto Height)', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Featured Posts Widgets with Layout Styles (2/3/4/5 Columns) and Thumbnail Styles (Horizontal/Square/Vertical/Auto Height) : These widgets displays recent/popular/random posts or posts from a given category or tag.', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Tabbed Widget', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Widget Areas', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Header Layouts', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Share Buttons', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Contact Form', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'WooCommerce Support', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Search Engine Optimized', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Customizer options', 'finewp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Features...', 'finewp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.FINEWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__( 'Upgrade To FineWP PRO', 'finewp' ) . '</a></strong>'
    ) ) );

}