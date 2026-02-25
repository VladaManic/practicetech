<?php

	// Title
	if (get_sub_field('title')) {
		echo '<', the_sub_field('wrapper'), '>', the_sub_field('title'), '</', the_sub_field('wrapper'), '>';
	}

	// Text
	if (get_sub_field('text')) {
		?>
			<div class="text-wrapper">
				<?php the_sub_field('text'); ?>
			</div>
		<?php
	}
?>
