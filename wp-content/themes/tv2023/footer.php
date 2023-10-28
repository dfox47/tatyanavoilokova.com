<?php // link to images folder
$i = esc_url(get_template_directory_uri()) . '/i'; ?>

<?php if (is_active_sidebar('footer')) : ?>
	<!--	--><?php //dynamic_sidebar('footer'); ?>
<?php endif; ?>

<?php include "template-parts/awards.php"; ?>

<footer class="footer">
	<div class="footer_phone">
		<?php include "template-parts/phone.php"; ?>
	</div>

	<?php // social
	include "template-parts/social.php"; ?>

	<?php // copyright
	include "template-parts/copyright.php"; ?>

	<div class="powered_by">
		powered by <a class="powered_by__link" href="//foxartbox.com" target="_blank">FOXARTBOX <span class="powered_by__img js-img-scroll" data-src="/wp-content/themes/tv2023/i/icons/foxartbox.svg"></span></a>
	</div>
</footer>

<?php // popup
include "template-parts/popups.php"; ?>

<?php wp_footer(); ?>

<?php // all scripts in one file with GULP ?>
<script src="<?= esc_url(get_template_directory_uri()); ?>/all.min.js?v<?= (date("Ymd")); ?>"></script>

</body>
</html>