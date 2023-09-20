<!DOCTYPE html>

<html <?php language_attributes(); ?> <?php body_class(); ?>>

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
