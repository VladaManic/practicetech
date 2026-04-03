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

	<section class="faq">
		<div class="container">
			<div class="row">
			<?php
			if( have_rows('faq') ){
				while ( have_rows('faq') ){
					the_row();
			?>
					<h2><?php the_sub_field('faq_title'); ?></h2>
					<div class="faq-wrap">
			<?php
						if( have_rows('question_&_answer') ){
							while ( have_rows('question_&_answer') ){
								the_row();
			?>
								<div class="faq-inner">
									<div class="question-wrap">
										<p class="question"><?php the_sub_field('question'); ?></p>
										<div class="arrow-wrap">
										<svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M16.9998 1L8.99976 9L0.999756 1" stroke="#0053A5" stroke-width="2"/>
										</svg>
										</div>
									</div>
									<div class="answer">
										<div class="wrapper">
											<?php the_sub_field('answer'); ?>
										</div>
									</div>
								</div>
			<?php
							}
						}
			?>
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
				<h2>Testemonials</h2>
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