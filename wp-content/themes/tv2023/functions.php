<?php // allow menus
add_theme_support('menus');

// title at head
add_theme_support( 'title-tag' );

// remove class from li at menus
//add_filter('nav_menu_css_class', '__return_empty_array', 10, 3);

// remove ID's from li at menus
add_filter('nav_menu_item_id', '__return_null', 10, 3);

// header menu
function headerMenu() {
	register_nav_menu( 'header', 'Header menu' );
}
add_action('after_setup_theme', 'headerMenu');

// footer menu
function footerMenu() {
	register_nav_menu( 'footer', 'Footer menu' );
}
add_action('after_setup_theme', 'footerMenu');

// theme's custom options
include "template-parts/theme_options.php";

// widgets
include "template-parts/widgets.php";

// Remove p tags from category description
remove_filter('term_description','wpautop');

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// remove script & style tags from links
function removeScript() {
	add_theme_support('html5', ['script', 'style']);
}
add_action('after_setup_theme', 'removeScript');