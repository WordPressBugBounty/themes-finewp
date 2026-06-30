<?php
/**
* Other options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_other_options($wp_customize) {

    $wp_customize->add_section( 'sc_other_options', array( 'title' => esc_html__( 'Other Options', 'finewp' ), 'panel' => 'finewp_main_options_panel', 'priority' => 560 ) );

    $wp_customize->add_setting( 'finewp_options[enable_widgets_block_editor]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_enable_widgets_block_editor_control', array( 'label' => esc_html__( 'Enable Gutenberg Widget Block Editor', 'finewp' ), 'section' => 'sc_other_options', 'settings' => 'finewp_options[enable_widgets_block_editor]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'finewp_options[enable_sticky_mobile_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_enable_sticky_mobile_menu_control', array( 'label' => esc_html__( 'Enable Sticky Menu on Small Screen', 'finewp' ), 'section' => 'sc_other_options', 'settings' => 'finewp_options[enable_sticky_mobile_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'finewp_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'finewp' ), 'section' => 'sc_other_options', 'settings' => 'finewp_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'finewp_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'finewp' ), 'section' => 'sc_other_options', 'settings' => 'finewp_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

}