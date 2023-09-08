<?php // thumb img url
$thumbUrl = '';

if (get_the_post_thumbnail_url()) {
	$thumbUrl = str_replace('https://' . $_SERVER['SERVER_NAME'], '', get_the_post_thumbnail_url());
}

// page type
$currentUrl = $_SERVER['REQUEST_URI']; ?>

<header class="header">
	<div class="header_left">
		<a class="logo" href="/"></a>

		<div class="header_menu_toggle js-header-menu-toggle"></div>
	</div>

	<div class="header_menu_wrap">
		<div class="btn btn__close js-header-menu-toggle"></div>

		<?php // header_menu
		wp_nav_menu(array(
			'container'         => false,
			'depth'             => 0,
			'item_spacing'      => 'preserve',
			'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
			'menu'              => 'header_menu',
			'menu_class'        => 'header_menu',
		)); ?>
	</div>

	<div class="header_right">
		<?php include "phone.php"; ?>
		<?php include "social.php"; ?>
	</div>
</header>

<div class="hero">
	<div class="hero__title">Tatyana<br>Voilokova</div>
	<div class="hero__subtitle">photographer</div>
</div>