<?php
/**
* Social buttons
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_header_social_buttons() { ?>

<div class="finewp-top-social-icons clearfix" aria-label="<?php esc_attr_e('Header Social Icons','finewp'); ?>">
    <?php if ( finewp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('twitterlink') ); ?>" target="_blank" class="finewp-social-icon-twitter" aria-label="<?php esc_attr_e('Twitter Button in Header','finewp'); ?>"><i class="fa fa-twitter" aria-hidden="true" title="<?php esc_attr_e('Twitter','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('facebooklink') ); ?>" target="_blank" class="finewp-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button in Header','finewp'); ?>"><i class="fa fa-facebook" aria-hidden="true" title="<?php esc_attr_e('Facebook','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('googlelink') ); ?>" target="_blank" class="finewp-social-icon-google-plus" aria-label="<?php esc_attr_e('Google Plus Button in Header','finewp'); ?>"><i class="fa fa-google-plus" aria-hidden="true" title="<?php esc_attr_e('Google Plus','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('pinterestlink') ); ?>" target="_blank" class="finewp-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button in Header','finewp'); ?>"><i class="fa fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('linkedinlink') ); ?>" target="_blank" class="finewp-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button in Header','finewp'); ?>"><i class="fa fa-linkedin" aria-hidden="true" title="<?php esc_attr_e('Linkedin','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('instagramlink') ); ?>" target="_blank" class="finewp-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button in Header','finewp'); ?>"><i class="fa fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('youtubelink') ); ?>" target="_blank" class="finewp-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button in Header','finewp'); ?>"><i class="fa fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( finewp_get_option('emailaddress') ); ?>" class="finewp-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button in Header','finewp'); ?>"><i class="fa fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('rsslink') ); ?>" target="_blank" class="finewp-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button in Header','finewp'); ?>"><i class="fa fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','finewp'); ?>"></i></a><?php endif; ?>
    <a href="<?php echo esc_url( '#' ); ?>" class="finewp-social-icon-search" aria-label="<?php esc_attr_e('Search Button in Header','finewp'); ?>"><i class="fa fa-search" aria-hidden="true" title="<?php esc_attr_e('Search','finewp'); ?>"></i></a>
</div>

<?php }

function finewp_footer_social_buttons() { ?>

<div class="finewp-bottom-social-icons clearfix" aria-label="<?php esc_attr_e('Footer Social Icons','finewp'); ?>">
    <?php if ( finewp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('twitterlink') ); ?>" target="_blank" class="finewp-social-icon-twitter" aria-label="<?php esc_attr_e('Twitter Button','finewp'); ?>"><i class="fa fa-twitter" aria-hidden="true" title="<?php esc_attr_e('Twitter','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('facebooklink') ); ?>" target="_blank" class="finewp-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','finewp'); ?>"><i class="fa fa-facebook" aria-hidden="true" title="<?php esc_attr_e('Facebook','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('googlelink') ); ?>" target="_blank" class="finewp-social-icon-google-plus" aria-label="<?php esc_attr_e('Google Plus Button','finewp'); ?>"><i class="fa fa-google-plus" aria-hidden="true" title="<?php esc_attr_e('Google Plus','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('pinterestlink') ); ?>" target="_blank" class="finewp-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','finewp'); ?>"><i class="fa fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('linkedinlink') ); ?>" target="_blank" class="finewp-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','finewp'); ?>"><i class="fa fa-linkedin" aria-hidden="true" title="<?php esc_attr_e('Linkedin','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('instagramlink') ); ?>" target="_blank" class="finewp-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','finewp'); ?>"><i class="fa fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('flickrlink') ); ?>" target="_blank" class="finewp-social-icon-flickr" aria-label="<?php esc_attr_e('Flickr Button','finewp'); ?>"><i class="fa fa-flickr" aria-hidden="true" title="<?php esc_attr_e('Flickr','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('youtubelink') ); ?>" target="_blank" class="finewp-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','finewp'); ?>"><i class="fa fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('vimeolink') ); ?>" target="_blank" class="finewp-social-icon-vimeo" aria-label="<?php esc_attr_e('Vimeo Button','finewp'); ?>"><i class="fa fa-vimeo" aria-hidden="true" title="<?php esc_attr_e('Vimeo','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('soundcloudlink') ); ?>" target="_blank" class="finewp-social-icon-soundcloud" aria-label="<?php esc_attr_e('SoundCloud Button','finewp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true" title="<?php esc_attr_e('SoundCloud','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('lastfmlink') ); ?>" target="_blank" class="finewp-social-icon-lastfm" aria-label="<?php esc_attr_e('Lastfm Button','finewp'); ?>"><i class="fa fa-lastfm" aria-hidden="true" title="<?php esc_attr_e('Lastfm','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('githublink') ); ?>" target="_blank" class="finewp-social-icon-github" aria-label="<?php esc_attr_e('Github Button','finewp'); ?>"><i class="fa fa-github" aria-hidden="true" title="<?php esc_attr_e('Github','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('bitbucketlink') ); ?>" target="_blank" class="finewp-social-icon-bitbucket" aria-label="<?php esc_attr_e('Bitbucket Button','finewp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true" title="<?php esc_attr_e('Bitbucket','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('tumblrlink') ); ?>" target="_blank" class="finewp-social-icon-tumblr" aria-label="<?php esc_attr_e('Tumblr Button','finewp'); ?>"><i class="fa fa-tumblr" aria-hidden="true" title="<?php esc_attr_e('Tumblr','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('digglink') ); ?>" target="_blank" class="finewp-social-icon-digg" aria-label="<?php esc_attr_e('Digg Button','finewp'); ?>"><i class="fa fa-digg" aria-hidden="true" title="<?php esc_attr_e('Digg','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('deliciouslink') ); ?>" target="_blank" class="finewp-social-icon-delicious" aria-label="<?php esc_attr_e('Delicious Button','finewp'); ?>"><i class="fa fa-delicious" aria-hidden="true" title="<?php esc_attr_e('Delicious','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('stumblelink') ); ?>" target="_blank" class="finewp-social-icon-stumbleupon" aria-label="<?php esc_attr_e('Stumbleupon Button','finewp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true" title="<?php esc_attr_e('Stumbleupon','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('redditlink') ); ?>" target="_blank" class="finewp-social-icon-reddit" aria-label="<?php esc_attr_e('Reddit Button','finewp'); ?>"><i class="fa fa-reddit" aria-hidden="true" title="<?php esc_attr_e('Reddit','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('dribbblelink') ); ?>" target="_blank" class="finewp-social-icon-dribbble" aria-label="<?php esc_attr_e('Dribbble Button','finewp'); ?>"><i class="fa fa-dribbble" aria-hidden="true" title="<?php esc_attr_e('Dribbble','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('behancelink') ); ?>" target="_blank" class="finewp-social-icon-behance" aria-label="<?php esc_attr_e('Behance Button','finewp'); ?>"><i class="fa fa-behance" aria-hidden="true" title="<?php esc_attr_e('Behance','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('vklink') ); ?>" target="_blank" class="finewp-social-icon-vk" aria-label="<?php esc_attr_e('VK Button','finewp'); ?>"><i class="fa fa-vk" aria-hidden="true" title="<?php esc_attr_e('VK','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('codepenlink') ); ?>" target="_blank" class="finewp-social-icon-codepen" aria-label="<?php esc_attr_e('Codepen Button','finewp'); ?>"><i class="fa fa-codepen" aria-hidden="true" title="<?php esc_attr_e('Codepen','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('jsfiddlelink') ); ?>" target="_blank" class="finewp-social-icon-jsfiddle" aria-label="<?php esc_attr_e('JSFiddle Button','finewp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true" title="<?php esc_attr_e('JSFiddle','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('stackoverflowlink') ); ?>" target="_blank" class="finewp-social-icon-stackoverflow" aria-label="<?php esc_attr_e('Stack Overflow Button','finewp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true" title="<?php esc_attr_e('Stack Overflow','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('stackexchangelink') ); ?>" target="_blank" class="finewp-social-icon-stackexchange" aria-label="<?php esc_attr_e('Stack Exchange Button','finewp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true" title="<?php esc_attr_e('Stack Exchange','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('bsalink') ); ?>" target="_blank" class="finewp-social-icon-buysellads" aria-label="<?php esc_attr_e('BuySellAds Button','finewp'); ?>"><i class="fa fa-buysellads" aria-hidden="true" title="<?php esc_attr_e('BuySellAds','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('slidesharelink') ); ?>" target="_blank" class="finewp-social-icon-slideshare" aria-label="<?php esc_attr_e('SlideShare Button','finewp'); ?>"><i class="fa fa-slideshare" aria-hidden="true" title="<?php esc_attr_e('SlideShare','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( finewp_get_option('skypeusername') ); ?>?chat" class="finewp-social-icon-skype" aria-label="<?php esc_attr_e('Skype Button','finewp'); ?>"><i class="fa fa-skype" aria-hidden="true" title="<?php esc_attr_e('Skype','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( finewp_get_option('emailaddress') ); ?>" class="finewp-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button','finewp'); ?>"><i class="fa fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('telephonenumber') ) : ?>
            <a href="tel:<?php echo esc_html( finewp_get_option('telephonenumber') ); ?>" class="finewp-social-icon-phone" aria-label="<?php esc_attr_e('Phone Button','finewp'); ?>"><i class="fa fa-phone" aria-hidden="true" title="<?php esc_attr_e('Phone','finewp'); ?>"></i></a><?php endif; ?>
    <?php if ( finewp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( finewp_get_option('rsslink') ); ?>" target="_blank" class="finewp-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button','finewp'); ?>"><i class="fa fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','finewp'); ?>"></i></a><?php endif; ?>
    <a href="<?php echo esc_url( '#' ); ?>" class="finewp-social-icon-search" aria-label="<?php esc_attr_e('Search Button','finewp'); ?>"><i class="fa fa-search" aria-hidden="true" title="<?php esc_attr_e('Search','finewp'); ?>"></i></a>
</div>

<?php }