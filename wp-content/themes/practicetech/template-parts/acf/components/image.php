
<picture class="img-wrap <?php echo $args['class']; ?>">
	<source
		media="(min-width: 1023px)"
		srcset="<?php echo $args['img']['sizes']['retina-medium']; ?> 1x, <?php echo $args['img']['sizes']['retina-large']; ?> 2x"
		<?php if($args['img']['mime_type']) {
			?> type="<?php echo $args['img']['mime_type']; ?>" <?php
			}
		?>
	>
	<source
		media="(min-width: 601px)"
		srcset="<?php echo $args['img']['sizes']['large']; ?> 1x, <?php echo $args['img']['sizes']['retina-medium']; ?> 2x"
		<?php if($args['img']['mime_type']) {
			?> type="<?php echo $args['img']['mime_type']; ?>" <?php
			}
		?>
	>
	<source
		media="(max-width: 600px)"
		srcset="<?php echo $args['img']['sizes']['medium']; ?> 1x, <?php echo $args['img']['sizes']['large']; ?> 2x"
		<?php if($args['img']['mime_type']) {
			?> type="<?php echo $args['img']['mime_type']; ?>" <?php
			}
		?>
	>
	<img
		loading=lazy 
		class="lazyload"
		src="<?php echo get_template_directory_uri();?>/assets/img/placeholder.jpg"
		data-src="<?php echo $args['img']['url']; ?>"
		alt="<?php echo $args['img']['alt']; ?>"
		width="<?php echo $args['img']['sizes']['retina-large-width']; ?>" height="<?php echo $args['img']['sizes']['retina-large-height']; ?>"
	>
</picture>