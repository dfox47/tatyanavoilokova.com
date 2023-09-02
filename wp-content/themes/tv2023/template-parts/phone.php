
<?php // all options https://tatyanavoilokova.com/wp-admin/admin.php?page=theme-custom-options
$phone = esc_attr(get_option('broker_phone'));

if ( isset($phone) ) {
	$phoneShort = preg_replace('/[()\s-]/', '', $phone); ?>

	<a class="phone" href="tel:<?= $phoneShort; ?>"><?= $phone; ?></a>
<?php } ?>