<?php
/**
 * Header Navigation File
 *
 * @package luxury-travel
 */
?>

<div id="header">
  <div class="menu-sec">
    <div class="container">
      <div class="row">
        <div class="logo col-lg-3 col-md-5 wow bounceInDown">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php else: ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php endif; ?>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
              ?>
              <p class="site-description">
                <?php echo esc_html($description); ?>
              </p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="menubox col-lg-7 col-md-3">
          <div id="sidelong-menu" class="nav side-nav">
            <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'luxury-travel' ); ?>">
              <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><?php esc_html_e('Close Menu','luxury-travel'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','luxury-travel'); ?></span></a>
              <?php 
                wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu-navigation clearfix' ,
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) ); 
              ?>
            </nav>
          </div>
        </div>
        <div class="top-contact col-lg-2 col-md-4">
          <?php if( get_theme_mod( 'luxury_travel_call','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_call','' ) ); ?>"><i class="fa fa-phone" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Call Link', 'luxury-travel' ); ?></span></a>
          <?php } ?>     
          <?php if( get_theme_mod( 'luxury_travel_mail','' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_mail','' ) ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Email Link', 'luxury-travel' ); ?></span></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>