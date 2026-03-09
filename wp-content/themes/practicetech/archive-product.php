<?php
get_header();
?>
	
	<section class="archive-hero">
		<div class="container">
			<div class="row">
				<h1 id="archive-title">Products</h1>
			</div>
		</div>
	</section>

	<section class="products-wrapper">
		<div class="container">
			<div class="row">
				<div class="products-wrap">
				<?php
					$defaultDisplay = 4;
					$args = array(
						'post_type' 			=> 'product',
						'post_status' 		=> 'publish',
						'posts_per_page' 	=> $defaultDisplay,
					);
					$query = new WP_Query($args);
					//echo "<pre>",print_r($query),"</pre>";
					$countPosts = $query->found_posts;
					if($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							$productId = get_the_ID();
							$productImg = wp_get_attachment_image_src(get_post_thumbnail_id($productId), "medium");
							?>
								<a href="<?php the_permalink(); ?>" class="single-product">
									<h3><?php the_title(); ?></h3>
									<img src="<?php echo $productImg[0]; ?>" alt="<?php the_title(); ?>" />
								</a>
							<?php
						}
						wp_reset_postdata();
					}
					paginationDisplay($countPosts, $defaultDisplay, 1);
				?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();