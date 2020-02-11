<?php
/**
 * The template for displaying the footer.
 * @package Luxury Travel
 */
?>
<?php if( get_theme_mod( 'luxury_travel_hide_scroll',true) != '') { ?>
  <?php $scroll_align = get_theme_mod( 'luxury_travel_back_to_top','Right');
  if($scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left"><?php esc_html_e('Top', 'luxury-travel'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'luxury-travel'); ?></span></a>
  <?php }else if($scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center"><?php esc_html_e('Top', 'luxury-travel'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'luxury-travel'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right"><?php esc_html_e('Top', 'luxury-travel'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'luxury-travel'); ?></span></a>
  <?php }?>
<?php }?>
<footer role="contentinfo" id="footer" class="copyright-wrapper">
  <?php //Set widget areas classes based on user choice
    $footer_columns = get_theme_mod('luxury_travel_footer_widget', '4');
    if ($footer_columns == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($footer_columns == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($footer_columns == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <div class="container">
    <div class="footerinner row">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
          <?php dynamic_sidebar( 'footer-1'); ?>
        </div>
      <?php endif; ?> 
      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
          <?php dynamic_sidebar( 'footer-2'); ?>
        </div>
      <?php endif; ?> 
      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
          <?php dynamic_sidebar( 'footer-3'); ?>
        </div>
      <?php endif; ?> 
      <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
        <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
          <?php dynamic_sidebar( 'footer-4'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="inner">
    <div class="copyright text-center">
      <p class="testparabt"><?php echo esc_html(get_theme_mod('luxury_travel_text',__('Copyright 2017','luxury-travel'))); ?> <?php luxury_travel_credit_link(); ?></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>