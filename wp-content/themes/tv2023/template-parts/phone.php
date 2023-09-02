<?php // all options https://tatyanavoilokova.com/wp-admin/admin.php?page=theme-custom-options
$phone      = esc_attr(get_option('theme_phone')) ? esc_attr(get_option('theme_phone')) : '+359 (87) 670-0150';
$phoneShort = preg_replace('/[()\s-]/', '', $phone); ?>

<a class="phone" href="tel:<?= $phoneShort; ?>"><?= $phone; ?></a>