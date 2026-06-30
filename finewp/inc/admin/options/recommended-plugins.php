<?php
/**
* Recommended plugins options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'finewp' ), 'panel' => 'finewp_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'finewp_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new FineWP_Customize_Recommended_Plugins( $wp_customize, 'finewp_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'finewp' ), 'section' => 'sc_recommended_plugins', 'settings' => 'finewp_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins' ) ) );

}