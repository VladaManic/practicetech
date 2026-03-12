<?php
	$order = get_sub_field('order');
	$image = get_sub_field('image');
	$title = get_sub_field('title');
?>
<section class="text-image <?php if($order == 'Right'){echo 'order1';} else {echo 'order2';} ?>">
	<div class="container">
		<div class="row">
			<div class="item-text">
				<div class="wrap">
					<?php
						if ($title) {
					?>
							<h2><?php echo $title; ?></h2>
					<?php
						}
					?>
					<div class="content"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<div class="item-image" title="<?php echo $image['title']; ?>">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-inner" />
			</div>
		</div>
	</div>
</section>