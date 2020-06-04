<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */

?>

<footer id="colophon" class="site-footer footer">
	<div class="grid--col-3 container">

	<?php 
		if(is_active_sidebar('footer-column-1')) {
	        dynamic_sidebar('footer-column-1');
	    }
		if(is_active_sidebar('footer-column-2')) {
	        dynamic_sidebar('footer-column-2');
	    }
		if(is_active_sidebar('footer-column-3')) {
	        dynamic_sidebar('footer-column-3');
	    }	    	    
	?>
	</div>
	<div class="site-info">
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Site designed and developed by %s', 'gutenberg-starter-theme' ), '<a href="https://redbrickreative.com/">Red Bric Kreative</a>' );
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>