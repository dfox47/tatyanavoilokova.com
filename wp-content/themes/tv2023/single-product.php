<?php get_header(); ?>

	<main class="main">
		<?php if (single_post_title()) { ?>
			<h1><?php single_post_title(); ?></h1>
		<?php } ?>

		<?php // content
		the_content(); ?>
	</main>

<?php get_footer(); ?>