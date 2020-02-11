<?php
/**
 * The Header for our theme.
 * @package Luxury Travel
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'luxury-travel' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if(get_theme_mod('luxury_travel_preloader',true)){ ?>
	    <div id="overlayer"></div>
	    <span class="loader">
	      <span class="loader-inner"></span>
	    </span>
	<?php }?>
	<header role="banner">
	  	<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'luxury-travel' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'luxury-travel' ); ?></span></a>
	  	<div class="toggle-menu responsive-menu">
	      <button role="tab" onclick="resMenu_open()"><i class="fas fa-bars"></i><?php esc_html_e('Menu','luxury-travel'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','luxury-travel'); ?></span></button>
	    </div>

	  	<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header>