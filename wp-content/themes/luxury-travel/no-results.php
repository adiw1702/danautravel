<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Luxury Travel
 */
?>

<header role="banner">
	<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'luxury-travel' ); ?></h2>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'luxury-travel' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'luxury-travel' ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip; it happens to the best of us.', 'luxury-travel' ); ?></p><br />
	<div class="read-moresec">
		<div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'luxury-travel' ); ?></a><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'luxury-travel' ); ?></span></div>
	</div>
<?php endif; ?>