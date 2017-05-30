<?php /* Template Name: CPT Template */
	
	get_header(); ?>

	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<h3>REAL Custom Post Type for: Portfolio</h3>
				<?php
					$args = array(
						'post_type' => 'portfolio',
						'post_per_page' => 3
					);
					$loop = new WP_Query($args);
					while ($loop->have_posts()) : $loop->the_post();
						get_template_part('template-parts/post/content', get_post_format());
					endwhile;
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php //get_sidebar(); ?>
	</div><!-- .wrap -->

	<?php get_footer();


?>