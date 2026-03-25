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

	<section class="testemonials">
		<div class="container">
			<div class="row">
				<div class="swiper swiper-about">
					<div class="swiper-wrapper">
					<?php
						if( have_rows('testemonials') ){
							while( have_rows('testemonials') ){ 
								the_row();
								$personImg = get_sub_field('image');
					?>
								<div class="swiper-slide">
									<div class="img-wrapper">
										<div class="img-inner">
											<img src="<?php echo $personImg['url']; ?>" alt="<?php the_sub_field('name'); ?>" />
										</div>
										<div class="data-inner">
											<h3><?php the_sub_field('name'); ?></h3>
											<p><?php the_sub_field('title'); ?></p>
										</div>
									</div>
									<div class="testemonial-text"><?php the_sub_field('description'); ?></div>
								</div>
					<?php
							}
						}
					?>
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();