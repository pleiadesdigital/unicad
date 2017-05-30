<?php /* The header for our theme */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pleiades17' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part('template-parts/header/header', 'image'); ?>

		<?php if (has_nav_menu('top')) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<div class="menu1">
						<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
					</div>
					<div class="menu2">
						<?php get_template_part('template-parts/navigation/navigation', 'serv'); ?>
					</div>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if (has_post_thumbnail() && (is_single() || (is_page() && !pleiades17_is_frontpage()))) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail('pleiades17-featured-image');
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
