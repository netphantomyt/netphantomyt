<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital Newspaper
 */

if( did_action( 'elementor/loaded' ) && class_exists( 'Nekit_Render_Templates_Html' ) ) :
	$Nekit_render_templates_html = new Nekit_Render_Templates_Html();
	if( $Nekit_render_templates_html->is_template_available('footer') ) {
		$footer_rendered = true;
		echo $Nekit_render_templates_html->current_builder_template();
	} else {
		$footer_rendered = false;
	}
else :
	$footer_rendered = false;
endif;

if( ! $footer_rendered ) :
	/**
	 * hook - digital_newspaper_before_footer_section
	* 
	*/
	do_action( 'digital_newspaper_before_footer_section' );
	?>
	<footer id="colophon" class="site-footer dark_bk">
		<?php
			/**
			 * Function - digital_newspaper_footer_sections_html
			 * 
			 * @since 1.0.0
			 * 
			 */
			digital_newspaper_footer_sections_html();

			/**
			 * Function - digital_newspaper_bottom_footer_sections_html
			 * 
			 * @since 1.0.0
			 * 
			 */
			digital_newspaper_bottom_footer_sections_html();
		?>
	</footer><!-- #colophon -->
	<?php
		/**
		* hook - digital_newspaper_after_footer_hook
		*
		* @hooked - digital_newspaper_scroll_to_top
		*
		*/
		if( has_action( 'digital_newspaper_after_footer_hook' ) ) {
			do_action( 'digital_newspaper_after_footer_hook' );
		}
	?>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>