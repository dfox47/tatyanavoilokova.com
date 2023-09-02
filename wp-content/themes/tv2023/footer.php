<?php // link to images folder
$i = esc_url(get_template_directory_uri()) . '/i'; ?>

<?php if (is_active_sidebar('footer')) : ?>
	<?php dynamic_sidebar('footer'); ?>
<?php endif; ?>

<footer class="footer">
	<div class="wrap">
		<div class="footer_wrap2">
			<div class="footer_wrap">
				<?php // footer_menu
				wp_nav_menu(array(
					'container'         => false,
					'depth'             => 2,
					'item_spacing'      => 'preserve',
					'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
					'menu'              => 'footer_menu',
					'menu_class'        => 'footer_menu',
				)); ?>
			</div>

			<div class="footer_bottom">
				<div class="footer_phone">
					<?php include "template-parts/phone.php"; ?>
				</div>

				<?php // copyright
				include "template-parts/copyright.php"; ?>

				<div class="footer_social">
					<?php // social
					include "template-parts/social.php"; ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php // popup
include "template-parts/popups.php"; ?>

<?php // all scripts in one file with GULP ?>
<script src="<?= esc_url(get_template_directory_uri()); ?>/all.min.js?v<?= (date("Ymd")); ?>"></script>

<?php wp_footer(); ?>

</body>
</html>