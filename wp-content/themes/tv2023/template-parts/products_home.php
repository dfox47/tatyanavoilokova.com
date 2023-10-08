<?php
// Custom shortcode function
function products_home_function() { ?>
	<div id="products" class="products_home js-hash-on-scroll">
		<?php // put categories from different languages
		$category_ids = array(17, 20);

		$args = array(
			'post_type'         => 'product',
			'posts_per_page'    => -1,
			'tax_query'         => array(
				array(
					'taxonomy'  => 'product_cat',
					'field'     => 'id',
					'terms'     => $category_ids,
					'operator'  => 'IN'
				),
			),
		);

		$products_query = new WP_Query($args);

		if ($products_query->have_posts()) : ?>
			<h2>
				<span class="lang_bg_only">Продукти</span>
				<span class="lang_en_only">Products</span>
				<span class="lang_gr_only">Προϊόντα</span>
				<span class="lang_ru_only">Продукты</span>
			</h2>

			<div class="products_home__list">
				<?php while ($products_query->have_posts()) : $products_query->the_post(); ?>
					<div class="product_home">
						<?php global $product;
						$id     = $product->get_id();
						$url    = get_permalink(); ?>

						<h3><?php the_title(); ?></h3>

						<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail'); ?>

						<a class="product_home__img_wrap js-product-home-more" href="<?= $url; ?>">
							<span class="product_home__img js-img-scroll" data-src="<?= str_replace('https://' . $_SERVER['HTTP_HOST'], '', $image[0]); ?>"></span>
						</a>

						<div class="product_home__desc"><?php the_excerpt(); ?></div>

						<div class="product_home__more">
							<a class="btn btn__buy js-product-home-more" href="<?= $url; ?>">
								<span class="lang_bg_only">Повече</span>
								<span class="lang_en_only">More</span>
								<span class="lang_gr_only">Περισσότερες</span>
								<span class="lang_ru_only">Подробнее</span>

							</a>
						</div>
					</div>
				<?php endwhile;

				wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>
	</div>
<?php }

// Register the shortcode
add_shortcode('products_home', 'products_home_function');