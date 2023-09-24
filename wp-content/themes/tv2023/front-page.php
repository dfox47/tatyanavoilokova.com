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
			Explore my diverse portfolio, where I showcase a range of photography styles, from breathtaking landscapes that will transport you to far-off places, to intimate portraits that capture the soul of our subjects. My artistic approach is marked by creativity, precision, and a deep appreciation for the details that often go unnoticed.
		</p>

		<p class="text-center">
			<a class="btn btn__more js-scroll-to" href="#portfolio">My portfolio</a>
		</p>
	</div>
</div>

<div class="products_home">
	<?php $args = array(
		'post_type'         => 'product',
		'posts_per_page'    => -1,
		'tax_query'         => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'id',
				'terms' => 20,
			),
		),
	);

	$products_query = new WP_Query($args);

	if ($products_query->have_posts()) :
		while ($products_query->have_posts()) : $products_query->the_post(); ?>
			<div class="product_home">
				<?php global $product; ?>

				<div class="product_home__title"></div>
				<?php // title
				the_title();

				$id = $product->get_id();?>

				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail'); ?>

				<?php // full desc
				//				the_content(); ?>

				<span class="product_home__img js-img-scroll" data-src="<?= str_replace('https://' . $_SERVER['HTTP_HOST'], '', $image[0]); ?>"></span>

				<div class="product_home__desc"><?php the_excerpt(); ?></div>

				<div class="product_home__more"><a class="btn btn__buy js-product-home-more" href="<?= get_permalink(); ?>">More</a></div>
			</div>
		<?php endwhile;

		wp_reset_postdata();
	endif; ?>
</div>

<main class="main">
	<?php // content
	the_content(); ?>
</main>

<?php get_footer(); ?>
