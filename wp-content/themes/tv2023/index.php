<?php get_header(); ?>

<main class="main">
	<?php // content
	the_content(); ?>

	<?php // posts
	if (have_posts()) {
		while (have_posts()) {
			the_post();
		}
	} ?>
</main>

<?php get_footer(); ?>