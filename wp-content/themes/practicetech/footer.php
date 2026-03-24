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
				if (have_rows('third_subsection', 'option')) {
					?>
					<div class="subsection subsection-3">
						<ul>
					<?php
						while (have_rows('third_subsection', 'option')) {
							the_row();
							if( get_row_layout() == 'email' ){
								$email = get_sub_field('mail');
			?>
								<li>
									<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
								</li>
			<?php
							} elseif ( get_row_layout() == 'phone' ){
								$displayPhone = get_sub_field('display_phone');
								$compactPhone = get_sub_field('compact_phone');
			?>
								<li>
									<a href="tel:<?php echo $compactPhone; ?>"><?php echo $displayPhone; ?></a>
								</li>
			<?php
							} elseif ( get_row_layout() == 'address' ){
								$displayLocation = get_sub_field('display_location');
								$mapLocation = get_sub_field('map_location');
			?>
								<li>
									<a href="https://www.google.com/maps?q=<?php echo $mapLocation['lat']; ?>,<?php echo $mapLocation['lng']; ?>" target="_blank"><?php echo $displayLocation; ?></a>
								</li>
			<?php
							}
						}
			?>
						</ul>
					</div>
			<?php
				}
			?>
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
