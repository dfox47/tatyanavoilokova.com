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

		<div class="header_menu_toggle js-header-menu-toggle"></div>

		<?php // header_menu
//		wp_nav_menu(array(
//			'container'         => false,
//			'depth'             => 0,
//			'item_spacing'      => 'preserve',
//			'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
//			'menu'              => 'header_menu',
//			'menu_class'        => 'header_menu',
//		)); ?>

		<ul class="header_menu">
			<li><a class="js-scroll-to js-header-menu-toggle" href="#top">Home</a></li>
			<li><a class="js-scroll-to js-header-menu-toggle" href="#about">About me</a></li>
			<li><a class="js-scroll-to js-header-menu-toggle" href="#portfolio">Portfolio</a></li>
			<li><a class="js-scroll-to js-header-menu-toggle" href="#contacts">Contacts</a></li>
		</ul>
	</div>

	<div class="header_right">
		<?php include "phone.php"; ?>
		<?php include "social.php"; ?>
	</div>
</header>