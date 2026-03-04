<?php
get_header();
?>

	<section class="hero">
		<!-- Slider main container -->
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<?php
					if( have_rows('hero_home') ){
    				while( have_rows('hero_home') ){ 
							the_row();
							$heroImg = get_sub_field('image');
				?>
							<div class="swiper-slide">
								<img src="<?php echo $heroImg['url']; ?>" alt="<?php echo $heroImg['alt']; ?>" class="slide-img" />
								<p class="slide-text"><?php the_sub_field('text'); ?></p>
							</div>
				<?php
						}
					}
				?>
			</div>
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</section>

<?php
get_footer();
