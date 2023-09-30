<?php get_header(); ?>

<?php global $product;

$gallery_images     = $product->get_gallery_image_ids();
$attributes         = $product->get_attributes();

// object attributes
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
			<div class="product_info_wrap">
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

			<form class="contact_form contact_form--product js-product-form">
				<h3>
					<span class="lang_bg_only">Изпрати заявка</span>
					<span class="lang_en_only">Send request</span>
					<span class="lang_gr_only">Στείλε αίτημα</span>
					<span class="lang_ru_only">Отправить запрос</span>
				</h3>

				<label class="contact_form__item js-label">
					<span class="contact_form__placeholder">
						<span class="lang_bg_only">Име</span>
						<span class="lang_en_only">Name</span>
						<span class="lang_gr_only">Ονομα</span>
						<span class="lang_ru_only">Имя</span>
					</span>
					<input class="contact_form__input js-input js-product-input-name" type="text" name="user-name">
				</label>

				<label class="contact_form__item js-label">
					<span class="contact_form__placeholder">Email</span>
					<input class="contact_form__input js-input js-product-input-email" type="text" name="user-email">
				</label>

				<label class="contact_form__submit">
					<span class="btn btn__more">
						<span class="lang_bg_only">Изпращане</span>
						<span class="lang_en_only">Submit</span>
						<span class="lang_gr_only">υποβάλλουν</span>
						<span class="lang_ru_only">Отправить</span>
					</span>
					<input class="btn btn__more" type="submit" value="Submit">
				</label>

				<input type="hidden" name="product-link" value="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

				<div class="contact_form__info contact_form__info--error js-product-info-error">Please, fill all the fields</div>
				<div class="contact_form__info js-product-info-success">Thank you for you message!</div>
			</form>
		</div>
	</div>

<?php get_footer(); ?>