<?php /* Template part for Canvasfree */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Suo genere perveniant ad extremum; Ne tum quidem te respicies et cogitabis sibi quemque natum esse et suis voluptatibus? Aufert enim sensus actionemque tollit omnem. Potius ergo illa dicantur: turpe esse, viri non esse debilitari dolore, frangi, succumbere.</p>
		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="entry-content-wrap">
			<?php the_content(); ?>
		</div><!-- class="entry-content-wrap" -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
