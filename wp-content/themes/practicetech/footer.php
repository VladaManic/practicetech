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
		<div class="container">
			<div class="row">
				<div class="subsection subsection-1">
					<div class="logo">
						<?php
							$logoImg = get_field('site_logo', 'option');
							?>
							<a href="/">
								<img src="<?php echo $logoImg['url']; ?>" alt="<?php echo $logoImg['src']; ?>" id="site-logo">
							</a>
					</div>
					<p class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim erat leo, eget imperdiet lorem faucibus sed. Suspendisse efficitur sem eget semper facilisis.</p>
				</div>
				<div class="subsection subsection-2">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/about-us">About us</a></li>
						<li><a href="/product">Products</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
				<div class="subsection subsection-3">
					<ul>
						<li><a href="">randomemail@gmail.com</a></li>
						<li>064 333444</li>
					</ul>
				</div>
			</div>
		</div>
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
