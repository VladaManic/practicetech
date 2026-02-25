
<?php $class = $args['class'];?>

<section class="container title-text <?php echo $class; ?>">
	<div class="row">
		<?php 
		
			/*--------------------------------------------------------------
				# TITLE - TEXT
			--------------------------------------------------------------*/
			if ($args['title'] && $args['text'] && !$args['img'] && !$args['cta-link']) {
				get_template_part('template-parts/acf/components/sub-title-text');
			}

			/*--------------------------------------------------------------
				# TITLE
			--------------------------------------------------------------*/
			else if ($args['title'] && !$args['text'] && !$args['cta-link']) {
				get_template_part('template-parts/acf/components/sub-title-text');
			}

			/*--------------------------------------------------------------
				# IMAGE - TITLE - TEXT
			--------------------------------------------------------------*/
			else if ($args['as'] === 'img' && !$args['cta-link']) {
				$orderClass;
				if ($args['img-position'] !== 1) {
					$orderClass='first';
				}else {
					$orderClass='second';
				}
						get_template_part('template-parts/acf/components/image', null, array('img' => $args['img']));
						get_template_part('template-parts/acf/components/sub-title-text');
			}
		
			/*--------------------------------------------------------------
				# BG - TITLE - TEXT
			--------------------------------------------------------------*/
			else if ($args['as'] === 'bg' && !$args['cta-link']) {
				?>
					<div class="wrapper" style="background: url('<?php echo $args['img']['url']; ?>') <?php echo $args['bg-position']; ?> no-repeat; background-size: cover;">
						<div class="overlay" style="opacity: 0.6; background-color: <?php echo $args['overlay']; ?>"></div>
						<?php get_template_part('template-parts/acf/components/sub-title-text'); ?>
					</div>
				<?php
			}

			/*--------------------------------------------------------------
				# IMAGE - TITLE - TEXT - CTA
			--------------------------------------------------------------*/
			else if ($args['cta-link']) {
				$orderClass;
				if ($args['img-position'] !== 1) {
					$orderClass='first';
				}else {
					$orderClass='second';
				}

				?>
					<a class="<?php echo $orderClass;?>" href="<?php echo $args['cta-link']; ?>">
						<?php get_template_part('template-parts/acf/components/image', null, array('img' => $args['img'])); ?>
					</a>
					<a href="<?php echo $args['cta-link']; ?>">
						<?php get_template_part('template-parts/acf/components/sub-title-text'); ?>
					</a>
				<?php
			}

			/*--------------------------------------------------------------
				TEXT
			--------------------------------------------------------------*/
			else {
			 get_template_part('template-parts/acf/components/sub-title-text');
			}
		?>
	</div>
</section>


