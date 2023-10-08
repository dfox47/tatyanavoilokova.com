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

<main class="main">
	<?php // content
	the_content(); ?>
</main>

<?php get_footer(); ?>
