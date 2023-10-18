<section id="awards" class="awards js-hash-on-scroll">
	<h2>
		<span class="lang_bg_only">Награди</span>
		<span class="lang_en_only">Awards</span>
		<span class="lang_gr_only">Βραβεία</span>
		<span class="lang_ru_only">Награды</span>
	</h2>

	<div class="awards_carousel owl-carousel js-awards-carousel">
		<?php for($i = 1; $i<=8; $i++) { ?>
			<div class="awards_carousel__link js-awards-carousel-item" data-src="/wp-content/themes/tv2023/i/awards/<?= $i; ?>.jpg">
				<span class="awards_carousel__img js-img-scroll js-awards-carousel-img" data-src="/wp-content/themes/tv2023/i/awards/<?= $i; ?>s.jpg"></span>
			</div>
		<?php } ?>
	</div>
</section>