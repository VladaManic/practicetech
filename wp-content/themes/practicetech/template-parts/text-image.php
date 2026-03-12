<section class="text-image">
	<div class="container">
		<div class="row">
		<?php
			$order = get_sub_field('order');
			$image = get_sub_field('image');
		?>
			<div class="item-text <?php if($order == 'Right'){echo 'order1';} else {echo 'order2';} ?>">
				<div class="wrap">
					<?php
							$title = get_sub_field('title');
							if ($title) {
								?><h2><?php echo $title; ?></h2><?php
							}
					?>
					<div class="content"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<div class="item-image <?php if($order == 'Right'){echo 'order2';} else {echo 'order1';} ?>" title="<?php echo $image['title']; ?>">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-inner" />
			</div>
		</div>
	</div>
</section>