<?php // Template Name: Canvas Free ?>

<?php get_header(); ?>

<!-- <div id="primary" class="content-area"> -->
<div id="primary-cf" class="content-area-cf">
	<main id="main" class="site-main" role="main">
	<?php
		while (have_posts()) : the_post();
			get_template_part('template-parts/page/content', 'canvasfree');
		endwhile;
	?>
	</main><!-- #main -->
</div><!-- id="primary-cf" class="content-area-cf" -->

<?php get_footer();
