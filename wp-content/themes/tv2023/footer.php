<?php // link to images folder
$i = esc_url(get_template_directory_uri()) . '/i'; ?>

<?php if (is_active_sidebar('footer')) : ?>
	<!--	--><?php //dynamic_sidebar('footer'); ?>
<?php endif; ?>

<section id="awards" class="awards js-hash-on-scroll">
	<h2>
		<span class="lang_bg_only">Награди</span>
		<span class="lang_en_only">Awards</span>
		<span class="lang_gr_only">Βραβεία</span>
		<span class="lang_ru_only">Награды</span>
	</h2>

	<div class="awards_carousel owl-carousel js-awards-carousel">
		<?php for($i = 1; $i<=8; $i++) { ?>
			<a class="awards_carousel__link" href="/wp-content/themes/tv2023/i/awards/<?= $i; ?>.jpg" target="_blank"><span class="awards_carousel__img js-img-scroll" data-src="/wp-content/themes/tv2023/i/awards/<?= $i; ?>s.jpg"></span></a>
		<?php } ?>
	</div>
</section>

<footer class="footer">
	<div class="footer_phone">
		<?php include "template-parts/phone.php"; ?>
	</div>

	<?php // social
	include "template-parts/social.php"; ?>

	<?php // copyright
	include "template-parts/copyright.php"; ?>
</footer>

<?php // popup
include "template-parts/popups.php"; ?>

<?php // all scripts in one file with GULP ?>
<script src="<?= esc_url(get_template_directory_uri()); ?>/all.min.js?v<?= (date("Ymd")); ?>"></script>

<?php wp_footer(); ?>

</body>
</html>