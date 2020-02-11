<?php
/**
 * The template part for displaying post
 * @package Luxury Travel
 * @subpackage luxury_travel
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="blog-sec">
  <div class="mainimage">
    <?php 
      if(has_post_thumbnail()) { 
        the_post_thumbnail(); 
      }
    ?>
  </div>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <div class="post-info">
    <?php if(get_theme_mod('luxury_travel_metafields_date',true)==1){ ?>
      <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
    <?php }?>
    <?php if(get_theme_mod('luxury_travel_metafields_author',true)==1){ ?>
      <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
    <?php }?>
    <?php if(get_theme_mod('luxury_travel_metafields_comment',true)==1){ ?>
      <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','luxury-travel'), __('0 Comments','luxury-travel'), __('% Comments','luxury-travel') ); ?></span> 
    <?php }?>
  </div>
  <p><?php $excerpt = get_the_excerpt(); echo esc_html( luxury_travel_string_limit_words( $excerpt, esc_attr(get_theme_mod('luxury_travel_post_excerpt_number','20')))); ?></p>
  <div class="blogbtn">
    <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php esc_html_e('Read Full','luxury-travel'); ?><span class="screen-reader-text"><?php esc_html_e('Read Full','luxury-travel'); ?></span></a>
  </div>
</article>