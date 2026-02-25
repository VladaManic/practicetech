
<?php $class = $args['class'];?>

<section class="container title-text <?php echo $class; ?>">
	<div class="row" style="display: flex; flex-wrap: wrap">
		<?php

			/*--------------------------------------------------------------------------
				# IMAGE - TITLE - TEXT - COLUMNS | IMAGE - TITLE - TEXT - CTA - COLUMNS
			--------------------------------------------------------------------------*/
			if ($args['img-position'] === 'Left') {
			?>
				<div style="width: <?php echo $args['left-column']; ?>">
					<?php
						// Image
						get_template_part('template-parts/acf/components/image', null, array('img' => $args['img'])); 
					?>
				</div>
				<div style="width: <?php echo $args['right-column']; ?>">
					<?php
						// Subtitle
						if (get_sub_field('subtitle')) {
							?>
								<p class="subtitle"><?php the_sub_field('subtitle'); ?></p> 
							<?php
						}
						// Text
						get_template_part('template-parts/acf/components/sub-title-text');
						if (get_sub_field('cta')) {
							?>
								<a class="cta" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('cta'); ?></a> 
							<?php
						}
					?>
				</div>
			<?php

			}else {
				?>
					<div style="width: <?php echo $args['left-column']; ?>">
						<?php
							// Subtitle
							if (get_sub_field('subtitle')) {
								?>
									<p class="subtitle"><?php the_sub_field('subtitle'); ?></p> 
								<?php
							}
							// Text
							get_template_part('template-parts/acf/components/sub-title-text');
							if (get_sub_field('cta')) {
								?>
									<a class="cta" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('cta'); ?></a> 
								<?php
							}
						?>
					</div>
					<div style="width: <?php echo $args['right-column']; ?>">
						<?php
							// Image
							get_template_part('template-parts/acf/components/image', null, array('img' => $args['img'])); 
						?>
					</div>
				<?php
			}
			
		?>
	</div>
</section>


