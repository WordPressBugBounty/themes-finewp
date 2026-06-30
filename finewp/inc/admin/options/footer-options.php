<?php
/**
* Footer options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_finewp_footer', array( 'title' => esc_html__( 'Footer', 'finewp' ), 'panel' => 'finewp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'finewp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_html', ) );

    $wp_customize->add_control( 'finewp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'finewp' ), 'section' => 'sc_finewp_footer', 'settings' => 'finewp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'finewp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'finewp' ), 'section' => 'sc_finewp_footer', 'settings' => 'finewp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}