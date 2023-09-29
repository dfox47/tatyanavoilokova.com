<?php get_header(); ?>

<?php // attributes
global $product;

$gallery_images     = $product->get_gallery_image_ids();
$attributes         = $product->get_attributes();
$protocol           = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://'; ?>


<?php // object attributes
$productId          = $product->get_id();
$image              = wp_get_attachment_image_src( get_post_thumbnail_id( $productId ), 'single-post-thumbnail' );
$price              = $product->get_price(); ?>

<div class="product js-product" data-product-id="<?= $productId; ?>">
	<div class="product_gallery owl-carousel js-owl-carousel">
		<img class="product_gallery__img" src="<?= str_replace($protocol . $_SERVER['SERVER_NAME'],'', $image[0]); ?>" alt="">

		<?php // gallery images
		foreach ($gallery_images as $key => $gallery_image) {
			// thumbnail | medium | large | full
			$image_link = str_replace($protocol . $_SERVER['SERVER_NAME'], '', wp_get_attachment_image_url($gallery_image, 'large')); ?>

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

		<div class="product_form">
			<label class="product_form__label">
				<span class="product_form__title">Name</span>
				<input class="product_form__input" type="text" name="user-name">
			</label>

			<label class="product_form__label">
				<span class="product_form__title">Email</span>
				<input class="product_form__input" type="text" name="user-email">
			</label>

			<label class="product_form__submit">
				<span class="product_form__title">submit</span>
				<input class="product_form__input" type="submit">
			</label>

			<input type="hidden" data-link="">
		</div>
	</div>
</div>

<?php get_footer(); ?>