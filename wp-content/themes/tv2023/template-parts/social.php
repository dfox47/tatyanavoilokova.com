<ul class="social_list">
	<?php // all options https://tatyanavoilokova.com/wp-admin/admin.php?page=theme-custom-options
	$instagram      = esc_attr(get_option('theme_inst'));
	$telegram       = esc_attr(get_option('theme_telegram'));
	$whatsapp       = esc_attr(get_option('theme_whatsapp'));

	// whatsapp
	if (isset($whatsapp)) { ?>
		<li class="social_list__item">
			<a class="social_list__icon social_list__icon--whatsapp" href="//wa.me/<?= $whatsapp; ?>" target="_blank"></a>
		</li>
	<?php }

	// telegram
	if (isset($telegram)) { ?>
		<li class="social_list__item">
			<a class="social_list__icon social_list__icon--telegram" href="//t.me/<?= $telegram; ?>" target="_blank"></a>
		</li>
	<?php }

	// instagram
	if (isset($instagram)) { ?>
		<li class="social_list__item">
			<a class="social_list__icon social_list__icon--instagram" href="//www.instagram.com/<?= $instagram; ?>" target="_blank"></a>
		</li>
	<?php } ?>
</ul>