<?php
// Custom shortcode function
function products_home_function() {
	$output = '';

	// put categories from different languages
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

	if ($products_query->have_posts()) :
		$output .= '<div class="products_home__list">';

		while ($products_query->have_posts()) : $products_query->the_post();
			global $product;

			$id     = $product->get_id();
			$url    = get_permalink();
			$image  = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');

			$output .= '<div class="product_home">';
			$output .= '<h3>' . $product->get_title() . '</h3>';
			$output .= '<a class="product_home__img_wrap js-product-home-more" href="' . $url . '">';
			$output .= '<span class="product_home__img js-img-scroll" data-src="' . str_replace('https://' . $_SERVER['HTTP_HOST'], '', $image[0]) . '"></span>';
			$output .= '</a>';
			$output .= '<p class="product_home__desc">' . $product->post->post_excerpt . '</p>';
			$output .= '<div class="product_home__more">';
			$output .= '<a class="btn btn__buy js-product-home-more" href="' . $url . '"><span class="lang_bg_only">Повече</span><span class="lang_en_only">More</span><span class="lang_gr_only">Περισσότερες</span><span class="lang_ru_only">Подробнее</span></a>';
			$output .= '</div></div>';
		endwhile;

		$output .= '</div>';

		wp_reset_postdata();
	endif;

	return $output;
}

// Register the shortcode
add_shortcode('products_home', 'products_home_function');