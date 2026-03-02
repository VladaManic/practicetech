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
