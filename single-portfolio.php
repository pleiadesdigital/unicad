<?php /* Template Custom Post Type: Portfolio */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h3>Custom Post Type for: Portfolio</h3>
			<?php
				while (have_posts()) : the_post();
					get_template_part('template-parts/post/content', get_post_format());
				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
