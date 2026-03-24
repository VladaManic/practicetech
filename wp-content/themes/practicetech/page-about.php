<?php /* Template Name: About */ ?>

<?php
get_header();
?>

	<section class="about-hero">
		<div class="container">
			<div class="row">
				<h1>About us</h1>
			</div>
		</div>
	</section>

	<section class="about-persons">
		<div class="container">
			<div class="row">
			<?php
				if (have_rows('pesrons_about')) {
					while (have_rows('pesrons_about')) {
						the_row();
						$personImg = get_sub_field('image');
			?>
						<div class="single-person">
							<div class="img-wrap">
								<img src="<?php echo $personImg['url']; ?>" alt="<?php the_sub_field('name'); ?>" />
							</div>
							<div class="person-data">
								<h3><?php the_sub_field('name'); ?></h3>
								<p><?php the_sub_field('title'); ?></p>
							</div>
						</div>
			<?php
					}
				}
			?>
			</div>
		</div>
	</section>

<?php
get_footer();