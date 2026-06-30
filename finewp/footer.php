<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#finewp-content-wrapper -->
</div><!--/#finewp-wrapper -->
</div>

<div class="finewp-outer-wrapper">
<?php finewp_bottom_wide_widgets(); ?>
</div>

<?php if ( !(finewp_get_option('hide_footer_social_buttons')) ) { ?>
<div class="finewp-bottom-social-bar">
<div class="finewp-outer-wrapper">
<?php finewp_footer_social_buttons(); ?>
</div>
</div>
<?php } ?>

<?php if ( !(finewp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'finewp-footer-1' ) || is_active_sidebar( 'finewp-footer-2' ) || is_active_sidebar( 'finewp-footer-3' ) || is_active_sidebar( 'finewp-footer-4' ) ) : ?>
<div class='clearfix' id='finewp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='finewp-container clearfix'>
<div class="finewp-outer-wrapper">

<div class='finewp-footer-block'>
<?php dynamic_sidebar( 'finewp-footer-1' ); ?>
</div>

<div class='finewp-footer-block'>
<?php dynamic_sidebar( 'finewp-footer-2' ); ?>
</div>

<div class='finewp-footer-block'>
<?php dynamic_sidebar( 'finewp-footer-3' ); ?>
</div>

<div class='finewp-footer-block'>
<?php dynamic_sidebar( 'finewp-footer-4' ); ?>
</div>

</div>
</div><!--/#finewp-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>

<div class='clearfix' id='finewp-footer'>
<div class='finewp-foot-wrap finewp-container'>
<div class="finewp-outer-wrapper">
<?php if ( finewp_get_option('footer_text') ) : ?>
  <p class='finewp-copyright'><?php echo wp_kses_post( force_balance_tags( finewp_get_option('footer_text') ) ); ?></p>
<?php else : ?>
  <p class='finewp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'finewp' ), esc_html(date_i18n(__('Y','finewp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='finewp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'finewp' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#finewp-footer -->
</div>

<button class="finewp-scroll-top"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll to Top', 'finewp' ); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>