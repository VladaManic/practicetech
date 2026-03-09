<?php /* Template Name: Contact */ ?>

<?php
get_header();
?>

	<section class="hero-contact">
		<div class="container">
			<div class="row">
				<h1>Contact</h1>
			</div>
		</div>
	</section>

	<div class="contact-form">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[contact-form-7 id="d216aa1" title="Contact form 1"]');; ?>
			</div>
		</div>
	</div>

<?php
get_footer();