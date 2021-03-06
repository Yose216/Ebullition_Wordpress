<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Vogue
 */
?>
		<div class="clearboth"></div>
	</div><!-- #content -->
	
	<?php if ( get_theme_mod( 'vogue-footer-layout', false ) == 'vogue-footer-layout-standard' ) : ?>
		
		<?php get_template_part( '/templates/footers/footer-standard' ); ?>
		
	<?php else : ?>
		
		<?php get_template_part( '/templates/footers/footer-social' ); ?>
		
	<?php endif; ?>
	
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
