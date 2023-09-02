<ul class="social_list">
	<?php // all options https://tatyanavoilokova.com/wp-admin/admin.php?page=theme-custom-options
	$facebook       = esc_attr(get_option('theme_facebook')) ? esc_attr(get_option('theme_facebook')) : '//www.facebook.com/profile.php?id=100001149043902';
	$instagram      = esc_attr(get_option('theme_inst')) ? esc_attr(get_option('theme_inst')) : 'tatiana.voil';
	$telegram       = esc_attr(get_option('theme_telegram')) ? esc_attr(get_option('theme_telegram')) : '359876700150';
	$whatsapp       = esc_attr(get_option('theme_whatsapp')) ? esc_attr(get_option('theme_whatsapp')) : '359876700150'; ?>

	<?php // whatsapp ?>
	<li class="social_list__item">
		<a class="social_list__icon social_list__icon--whatsapp" href="//wa.me/<?= $whatsapp; ?>" target="_blank"></a>
	</li>

	<?php // telegram ?>
	<li class="social_list__item">
		<a class="social_list__icon social_list__icon--telegram" href="//t.me/<?= $telegram; ?>" target="_blank"></a>
	</li>

	<?php // instagram ?>
	<li class="social_list__item">
		<a class="social_list__icon social_list__icon--instagram" href="//www.instagram.com/<?= $instagram; ?>" target="_blank"></a>
	</li>

	<?php // facebook ?>
	<li class="social_list__item">
		<a class="social_list__icon social_list__icon--facebook" href="//www.facebook.com/<?= $facebook; ?>" target="_blank"></a>
	</li>
</ul>