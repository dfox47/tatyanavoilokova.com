<?php get_header(); ?>

<?php // attributes
global $product;

$gallery_images     = $product->get_gallery_image_ids();
$attributes         = $product->get_attributes(); ?>

<?php // object attributes
$productId          = $product->get_id();
$image              = wp_get_attachment_image_src( get_post_thumbnail_id( $productId ), 'single-post-thumbnail' );
$price              = $product->get_price(); ?>

<div class="product js-product" data-product-id="<?= $productId; ?>">
	<div class="product_gallery owl-carousel js-owl-carousel">
		<img class="product_gallery__img" src="<?= str_replace('https://' . $_SERVER['SERVER_NAME'],'', $image[0]); ?>" alt="">

		<?php // gallery images
		foreach ($gallery_images as $key => $gallery_image) {
			// thumbnail | medium | large | full
			$image_link = str_replace('https://' . $_SERVER['SERVER_NAME'], '', wp_get_attachment_image_url($gallery_image, 'large')); ?>

			<img class="product_gallery__img js-product-gallery-img" src="<?= $image_link; ?>" alt="">
		<?php } ?>
	</div>

	<div class="product_info">
		<h3><?= $product->get_title(); ?></h3>

		<?php // price
		if ($price) { ?>
			<div class="product_info__price"><?= $price; ?> €</div>
		<?php } ?>

		<div class="product_info__desc">
			<?php // content
			the_content(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>