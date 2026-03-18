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
			<?php
				if (have_rows('first_subsection', 'option')) {
					while (have_rows('first_subsection', 'option')) {
						the_row();
						$logoImg = get_sub_field('logo');
			?>
						<div class="subsection subsection-1">
							<div class="logo">
								<a href="/">
									<img src="<?php echo $logoImg['url']; ?>" alt="<?php echo $logoImg['src']; ?>" id="site-logo">
								</a>
							</div>
							<p class="footer-description"><?php the_sub_field('description'); ?></p>
						</div>
			<?php
					}
				}
				if (have_rows('second_subsection', 'option')) {
			?>
				<div class="subsection subsection-2">
					<ul>
			<?php
					while (have_rows('second_subsection', 'option')) {
						the_row();
			?>
						<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
			<?php
					}
			?>	
						</ul>
					</div>
			<?php
				}
			?>
				<div class="subsection subsection-3">
					<ul>
						<li>Vazduhoplovaca BB, Nis</li>
						<li><a href="tel:064333444">064 333444</a></li>
						<li><a href="mailto:randomemail@gmail.com">randomemail@gmail.com</a></li>
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
