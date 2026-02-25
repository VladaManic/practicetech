<?php $class = $args['class']; ?>

<section class="container image-wrap <?php echo $class; ?>">
	<div class="row">
		<?php
			/*--------------------------------------------------------------
				# SINGLE IMAGE
			--------------------------------------------------------------*/
			if ($args['layout'] === 'single') {
				if (!$args['link']) {
					get_template_part('template-parts/acf/components/image', null, array('img' => $args['img']));
				}else {
					?>
						<a href="<?php echo $args['link']; ?>">
							<?php get_template_part('template-parts/acf/components/image', null, array('img' => $args['img'])); ?>
						</a>
					<?php
				}

			/*--------------------------------------------------------------
				# TWO IMAGES
			--------------------------------------------------------------*/
			}else if ($args['layout'] === 'two') {

				// First Image
				if (!$args['first_image_link']) {
						get_template_part('template-parts/acf/components/image', null, array('img' => $args['first_image']));
				}else {
					?>
					<a href="<?php echo $args['first_image_link']; ?>">
						<?php get_template_part('template-parts/acf/components/image', null, array('img' => $args['first_image'])); ?>
					</a>
				<?php
				}

				// Second image
				if (!$args['second_image_link']) {
					get_template_part('template-parts/acf/components/image', null, array('img' => $args['second_image']));
				}else {
					?>
						<a href="<?php echo $args['second_image_link']; ?>">
							<?php get_template_part('template-parts/acf/components/image', null, array('img' => $args['first_image'])); ?>
						</a>
					<?php
				}
			}
			/*--------------------------------------------------------------
				# MULTIPLE IMAGES
			--------------------------------------------------------------*/
			else if ($args['layout'] === 'multiple') {
				if( have_rows('logo') ){
					?>
						<div class="wrapper">
					<?php
							while( have_rows('logo') ) {
								the_row();
								$image = get_sub_field('image');
								$link = get_sub_field('link');

								if (!$link) {
									get_template_part('template-parts/acf/components/image', null, array('img' => $image));
								}else {
									?>
										<a href="<?php echo $link; ?>">
											<?php get_template_part('template-parts/acf/components/image', null, array('img' => $image)); ?>
										</a>
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
</section>