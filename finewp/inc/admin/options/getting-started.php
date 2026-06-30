<?php
/**
* Getting started options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_finewp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'finewp' ), 'description' => esc_html__( 'Thanks for your interest in FineWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'finewp' ), 'panel' => 'finewp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'finewp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new FineWP_Customize_Button_Control( $wp_customize, 'finewp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'finewp' ), 'section' => 'sc_finewp_getting_started', 'settings' => 'finewp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/finewp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'finewp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new FineWP_Customize_Button_Control( $wp_customize, 'finewp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'finewp' ), 'section' => 'sc_finewp_getting_started', 'settings' => 'finewp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}