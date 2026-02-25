<?php if( have_rows('fields') ){
		while ( have_rows('fields') ){
			the_row();
			/*-------------------------------------------------------------------------
				# TITLE
			-------------------------------------------------------------------------*/
			if (get_row_layout() == 'title') {
				get_template_part('template-parts/acf/title-text-image', null, array(
				// 'class' => 'demo', //wrapper-class
				'title' => true, //enable title
				));
			}

			/*-------------------------------------------------------------------------
				TEXT
			-------------------------------------------------------------------------*/
			else if (get_row_layout() == 'text') {
				get_template_part('template-parts/acf/title-text-image', null, array(
					// 'class' => 'demo', //wrapper-class
					'text' => true //enable text
				)); 
			}

			/*-------------------------------------------------------------------------
				# TITLE - TEXT
			-------------------------------------------------------------------------*/
			else if (get_row_layout() == 'title_text') {
				get_template_part('template-parts/acf/title-text-image', null, array(
					// 'class' => 'demo', //wrapper-class
					'title' => true, 
					'text' => true 
				)); 
			}

			/*-------------------------------------------------------------------------
				# IMAGE - TITLE - TEXT | BG - TITLE - TEXT | IMAGE - TITLE - TEXT - CTA
			-------------------------------------------------------------------------*/
			else if (get_row_layout() == 'image_title_text') {
				$image = get_sub_field('image');
				$order;
				$as;
				$overlay = get_sub_field('overlay');
				$bg_position = strtolower(get_sub_field('background_position'));
				$cta_link = get_sub_field('cta_link');
				$cta_text = get_sub_field('cta_text');

				// Check image postion (Image separated)
				if (get_sub_field('image-position') === 'Top') {
					$order = 0;
				}else {
					$order = 1;
				}

				// Check if image is background
				if (get_sub_field('image_as_background') === 'Yes') {
					$as = 'bg';
				}else {
					$as = 'img';
				}

				// Check if section has CTA
				if ($cta_link) {
					$as = 'img img-cta';
				}


				get_template_part('template-parts/acf/title-text-image', null, array(
					'class' => $as, //wrapper-class
					'img' => $image,
					'as' => $as,
					'overlay' => $overlay,
					'bg-position' => $bg_position,
					'img-position' => $order, //0 default/first , 1 last
					'cta-link' => $cta_link,
					'cta-text' => $cta_text
				)); 
			}

			/*-------------------------------------------------------------------------
				# SINGLE IMAGE
			-------------------------------------------------------------------------*/
			else if (get_row_layout() == 'image') {
				$image = get_sub_field('image');
				$link = get_sub_field('link');

				get_template_part('template-parts/acf/images', null, array(
					// 'class' => 'image',
					'img' => $image,
					'link' => $link,
					'layout' => 'single'
 				)); 
			}

			/*-------------------------------------------------------------------------
				# TWO IMAGES
			-------------------------------------------------------------------------*/
			else if (get_row_layout() == 'two_images') {
				$first_image = get_sub_field('first_image');
				$first_image_link = get_sub_field('first_image_link');
				$second_image = get_sub_field('second_image');
				$second_image_link = get_sub_field('second_image_link');

				get_template_part('template-parts/acf/images', null, array(
					'class' => 'two',
					'first_image' => $first_image,
					'first_image_link' => $first_image_link,
					'second_image' => $second_image,
					'second_image_link' => $second_image_link,
					'layout' => 'two'
 				)); 
			}

			/*--------------------------------------------------------------------------
				# MULTIPLE IMAGES - LOGOS
			--------------------------------------------------------------------------*/
			else if (get_row_layout() == 'images_logos') {
				get_template_part('template-parts/acf/images', null, array(
					'class' => 'multiple',
					'layout' => 'multiple'
				));
			}

			/*--------------------------------------------------------------------------
				# IMAGE - TITLE - TEXT - COLUMNS | IMAGE - TITLE - TEXT - CTA - COLUMNS
			--------------------------------------------------------------------------*/
			else if (get_row_layout() == 'image_title_text_cta_columns') {
				$image = get_sub_field('image_column');
				$position = get_sub_field('image_position');
				$cta_link = get_sub_field('link');
				$cta_text = get_sub_field('cta');
				$left_column = get_sub_field('left_column');
				$right_column = get_sub_field('right_column');

				get_template_part('template-parts/acf/title-text-image-columns', null, array(
					'class' => 'columns', //wrapper-class
					'img' => $image,
					'img-position' => $position,
					'cta-link' => $cta_link,
					'cta-text' => $cta_text,
					'left-column' => $left_column,
					'right-column' => $right_column,
				)); 
			}

			/*--------------------------------------------------------------------------
				# VIDEO
			--------------------------------------------------------------------------*/
			else if (get_row_layout() == 'video') {
					?>
						<div class="embed-container">
								<?php the_sub_field('video_url'); ?>
						</div>
					<?php
			}
		}
	}
?>