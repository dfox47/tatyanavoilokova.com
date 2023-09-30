<?php get_header(); ?>

<?php include "template-parts/hero.php"; ?>

<div id="about" class="about js-hash-on-scroll">
	<div class="wrap">
		<h2>About me</h2>

		<span class="about__img js-img-scroll" data-src="/wp-content/uploads/2023/09/54.jpg"></span>

		<p>
			At Artistry Through the Lens, I believe that photography is more than just capturing moments; it's about creating timeless art. Our journey as art photographers has been a passionate exploration of the visual world, and I am thrilled to share our vision with you.
		</p>

		<p>
			Explore my diverse <a class="js-scroll-to" href="#portfolio">portfolio</a>, where I showcase a range of photography styles, from breathtaking landscapes that will transport you to far-off places, to intimate portraits that capture the soul of our subjects. My artistic approach is marked by creativity, precision, and a deep appreciation for the details that often go unnoticed.
		</p>

		<p class="text-center">
			<a class="btn btn__more js-scroll-to" href="#products">
				<span class="lang_bg_only">Продукти</span>
				<span class="lang_en_only">Products</span>
				<span class="lang_gr_only">Προϊόντα</span>
				<span class="lang_ru_only">Продукты</span>
			</a>
		</p>
	</div>
</div>

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

<main class="main">
	<?php // content
	the_content(); ?>
</main>

<?php get_footer(); ?>
