<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package practicetech
 */

?>

	</main><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'practicetech' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'practicetech' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'practicetech' ), 'practicetech', '<a href="https://timacum.com">Timacum Development</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php
	/**
	 * Inject BrowserSynq in .tim
	 */
	if (substr($_SERVER['SERVER_NAME'], -4) == '.tim') {
?>
		<script id="__bs_script__">
			document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.6'><\/script>".replace("HOST", location.hostname));
		</script>
<?php
	}
?>

<?php wp_footer(); ?>

</body>
</html>
