<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<?php do_action('luxury_travel_slider_section'); ?>

  <?php if( get_theme_mod( 'luxury_travel_slider_hide') != '') { ?>
    <?php /** slider section **/ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'luxury_travel_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $content_pages[] = $mod;
            }
          }
          if( !empty($content_pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $content_pages,
              'orderby' => 'post__in'
          ) ;
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h1><?php the_title();?></h1>  
                <div class ="read-more">
                  <a href="<?php echo esc_url( get_permalink() );?>"> <?php echo esc_html_e('FIND OUT MORE','luxury-travel'); ?><i class="fas fa-caret-right"></i><span class="screen-reader-text"><?php echo esc_html_e('FIND OUT MORE','luxury-travel'); ?></span></a>
                </div>                  
              </div>
            </div>
            <div class="social-media">  
              <?php if( get_theme_mod( 'luxury_travel_facebook_url') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'luxury-travel' ); ?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'luxury_travel_twitter_url') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'luxury-travel' ); ?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'luxury_travel_insta_url') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_insta_url','' ) ); ?>"><i class="fab fa-instagram" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'luxury-travel' ); ?></span></a>    
              <?php } ?>
              <?php if( get_theme_mod( 'luxury_travel_youtube_url') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'luxury-travel' ); ?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'luxury_travel_pintrest_url') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'luxury_travel_pintrest_url','' ) ); ?>"><i class="fab fa-pinterest-p" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'luxury-travel' ); ?></span></a>
              <?php } ?>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-caret-left"></i></span>
            <span class="screen-reader-text"><?php echo esc_html_e('Previous','luxury-travel'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-caret-right"></i></span>
            <span class="screen-reader-text"><?php echo esc_html_e('Next','luxury-travel'); ?></span>
          </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <div class="header-nav">
    <?php get_template_part( 'template-parts/header/navigation' ); ?> 
  </div>
  
  <main id="maincontent" role="main">
    <?php if( get_theme_mod( 'luxury_travel_maintitle') != '') { ?>
      <section id="our-products">
        <div class="container">
          <div class="text-center">
            <?php if( get_theme_mod('luxury_travel_maintitle') != ''){ ?>     
              <h2><?php echo esc_html(get_theme_mod('luxury_travel_maintitle','')); ?></h2>
            <?php }?>
          </div>
          <?php $content_pages = array();
          for ( $count = 0; $count <= 3; $count++ ) {
            $mod = absint( get_theme_mod( 'luxury_travel_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $content_pages[] = $mod;
            }
          }
          if( !empty($content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $count = 0;
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class=" box-image">
                  <?php the_content(); ?>
                  <div class="clearfix"></div>
                </div>
              <?php $count++; endwhile; 
              wp_reset_postdata(); ?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;?>
          <div class="clearfix"></div> 
        </div>
      </section>
    <?php }?>
      
    <?php do_action('luxury_travel_above_about_section'); ?>

    <?php if( get_theme_mod( 'luxury_travel_about_setting') != '') { ?>
      <?php /*--About Us--*/?>
      <section class="about">
        <div class="container">
          <div class="row">
            <?php
             $postData1 =  get_theme_mod('luxury_travel_about_setting');
              if($postData1){
                $args = array( 'name' => esc_html($postData1 ,'luxury-travel'));
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="col-lg-8 col-md-8">
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3><span class="screen-reader-text"><?php the_title(); ?></span></a>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="abt-image">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>          
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php
            endif; }?>
          </div>
        </div>
      </section>
    <?php }?>

    <?php do_action('luxury_travel_after_about_section'); ?>

    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </main>

<?php get_footer(); ?>