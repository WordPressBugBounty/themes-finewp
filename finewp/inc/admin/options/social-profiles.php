<?php
/**
* Social profiles options
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_finewp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'finewp' ), 'panel' => 'finewp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'finewp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'finewp_options[hide_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'finewp_hide_footer_social_buttons_control', array( 'label' => esc_html__( 'Hide Footer Social Buttons', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[hide_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'finewp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'finewp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'finewp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'finewp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'finewp_sanitize_email' ) );

    $wp_customize->add_control( 'finewp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[telephonenumber]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'finewp_telephonenumber_control', array( 'label' => esc_html__( 'Telephone Number', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[telephonenumber]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'finewp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'finewp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'finewp' ), 'section' => 'sc_finewp_sociallinks', 'settings' => 'finewp_options[rsslink]', 'type' => 'text' ) );

}