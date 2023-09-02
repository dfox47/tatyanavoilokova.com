
<?php // thumb img url
$thumbUrl = '';

if (get_the_post_thumbnail_url()) {
	$thumbUrl = str_replace('https://' . $_SERVER['SERVER_NAME'], '', get_the_post_thumbnail_url());
}

// page type
$pageType       = '';
$currentUrl     = $_SERVER['REQUEST_URI'];

if (is_front_page()) {
	$pageType = ' hero_block_wrap--home';
}
else if (is_product()) {
	$pageType = ' hero_block_wrap--product';
}
else if (is_category()) {
	$pageType = ' hero_block_wrap--category';
}
else if ($currentUrl == '/kontakty/') {
	$pageType = ' hero_block_wrap--contacts';
}
else if ($currentUrl == '/novostrojki/') {
	$pageType = ' hero_block_wrap--new_buildings';
}
else if ($currentUrl == '/zarubezhnaya/') {
	$pageType = ' hero_block_wrap--foreign';
}
else if ($currentUrl == '/o-kompanii/') {
	$pageType = ' hero_block_wrap--about';
} ?>

<div class="hero_block_wrap">
	<div class="hero_block<?php if (!empty($thumbUrl) && is_product()) { ?> js-img-bg<?php } ?>" <?php if (!empty($thumbUrl) && is_product()) { ?>data-src="<?= $thumbUrl; ?>"<?php } ?>>
		<div class="header_wrap">
			<header class="header">
				<div class="header_left">
					<a class="logo" href="/"></a>

					<div class="header_menu_toggle js-header-menu-toggle">
						<span></span> Меню
					</div>
				</div>

				<div class="header_menu_wrap">
					<div class="btn btn_close js-header-menu-toggle"></div>

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
		</div>

		<div class="hero_block__content">
			<?php // product page
			if (is_product()) { ?>
				<div class="wrap2">
					<?php // title
					if (get_the_title()) { ?>
						<h1><?= get_the_title(); ?></h1>
					<?php } ?>
				</div>
			<?php }
			elseif ($currentUrl == '/o-kompanii/') {
				// title
				if (get_the_title()) { ?>
					<div class="wrap">
						<h1><?= get_the_title(); ?></h1>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</div>
