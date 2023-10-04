<?php // thumb img url
$thumbUrl = '';

if (get_the_post_thumbnail_url()) {
	$thumbUrl = str_replace('https://' . $_SERVER['SERVER_NAME'], '', get_the_post_thumbnail_url());
}

// page type
$currentUrl = $_SERVER['REQUEST_URI']; ?>

<header id="top" class="header js-hash-on-scroll">
	<div class="header_left">
		<a class="logo" href="/"><span class="js-img-scroll" data-src="" title=""></span></a>

		<?php // header_menu
//		wp_nav_menu(array(
//			'container'         => false,
//			'depth'             => 0,
//			'item_spacing'      => 'preserve',
//			'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
//			'menu'              => 'header_menu',
//			'menu_class'        => 'header_menu',
//		)); ?>

		<?php include "header_menu.php"; ?>
	</div>

	<div class="header_right">
		<?php include "phone.php"; ?>
		<?php include "social.php"; ?>
		<?php include "lang_switch.php"; ?>
	</div>
</header>