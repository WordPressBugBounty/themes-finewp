<?php
/**
* Header options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_header_options($wp_customize) {

    $wp_customize->add_section( 'sc_finewp_header', array( 'title' => esc_html__( 'Header Options', 'finewp' ), 'panel' => 'finewp_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'finewp_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'finewp' ), 'section' => 'sc_finewp_header', 'settings' => 'finewp_options[hide_header_content]', 'type' => 'checkbox', ) );

}