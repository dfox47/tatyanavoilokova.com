<?php // Get all sites in the Multisite network
$sites      = get_sites();
$site_name  = '';

if ($sites) {
	// Get the current site's ID
	$current_site_id = get_current_blog_id();

	// Loop through each site in the network
	foreach ($sites as $site) {
		// Get the site's ID
		$site_id = $site->blog_id;

		// Get the site's URL
		$site_url = str_replace('https://' . $_SERVER['SERVER_NAME'], '', get_site_url($site_id));

		if ($current_site_id == $site_id) {
			$site_name = str_replace('/', '', $site_url);

			if ($site_url == '') {
				$site_url = '/';
				$site_name = 'en';
			}
		} ?>
	<?php } ?>
<?php } ?>



<!DOCTYPE html>

<html lang="<?= $site_name; ?>" <?php body_class('lang_' . $site_name); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">

		<?php // favicon
		include "template-parts/favicon.php"; ?>

		<meta property="og:image" content="https://tatyanavoilokova.com/wp-content/themes/tv2023/i/favicon/favicon.png">
		<meta property="og:title" content="Tatyana Voilokova | photographer">
		<meta property="og:url" content="https://tatyanavoilokova.com">

		<?php wp_head(); ?>

		<link rel="stylesheet" href="<?= esc_url(get_template_directory_uri()); ?>/style.css?v<?= (date("YmdHis")); ?>" />
	</head>
<body>
<?php // header
include "template-parts/head.php"; ?>

<?php if (is_active_sidebar('after_header')) : ?>
	<?php dynamic_sidebar('after_header'); ?>
<?php endif; ?>