<?php // link to images folder
$i = esc_url(get_template_directory_uri()) . '/i'; ?>

<?php if (is_active_sidebar('footer')) : ?>
<!--	--><?php //dynamic_sidebar('footer'); ?>
<?php endif; ?>



<div class="footer_contact">
	<?php if ( shortcode_exists( 'contact-form-7' ) ) {
		echo do_shortcode('[contact-form-7 id="f231649" title="contact_footer"]');
	} ?>
</div>

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