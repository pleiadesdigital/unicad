<?php /* The front page template file */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


	<!-- Frontpage Slider -->
	<section class="outer-wrap panel1">
			<div id="slider" class="flexslider">
				<?php
				$args = array(
					'post_type'				=> 'slider_panel',
					'posts_per_page'	=> 4,
					'order'						=> 'ASC',
				);
				$query = new WP_Query($args);
				?>
				<ul class="slides">
					<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
					<li>
						<?php the_post_thumbnail(); ?>
						<?php the_content(); ?>
					</li>
					<?php endwhile; endif; ?>
				</ul>
				<?php wp_reset_postdata(); ?>

			</div><!-- id="slider" class="flexslider" -->
	</section><!-- class="outer-wrap panel1" -->

	<!-- Intro -->
	<section class="outer-wrap panel2">
		<div class="wrap">
			<header class="entry-header">
				<h3>Líderes en Cirugía Ortopédica</h3>
			</header><!-- class="entry-header" -->
			<div class="entry-content">
				<p>A lo largo de los últimos años nos consolidamos como el referente vital de la cirugía de cadera y reemplazos articulares en Bolivia.</p>
			</div>
		</div><!-- class="wrap" -->
	</section><!-- class="outer-wrap panel2" -->

	<!-- SERVICES -->
	<section class="outer-wrap panel3">
		<div class="wrap">
			<header class="entry-header">
				<h3>ESPECIALIZACIONES</h3>
			</header><!-- class="entry-header" -->
			<div class="entry-content">
				<ul>
					<li>
						<h4><a href="#">Quae diligentissime contra Aristonem dicuntur a Chryippo</a></h4>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit minime vero inquit ille consentit.</p>
						<div id="circle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/serv1.png" alt="Serv 1">
						</div>
					</li>
					<li>
						<h4><a href="#">Quae diligentissime contra Aristonem dicuntur a Chryippo</a></h4>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit minime vero inquit ille consentit.</p>
						<div id="circle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/serv2.png" alt="Serv 2">
						</div>
					</li>
					<li>
						<h4><a href="#">Quae diligentissime contra Aristonem dicuntur a Chryippo</a></h4>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit minime vero inquit ille consentit.</p>
						<div id="circle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/serv3.png" alt="Serv 3">
						</div>
					</li>
					<li>
						<h4><a href="#">Quae diligentissime contra Aristonem dicuntur a Chryippo</a></h4>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit minime vero inquit ille consentit.</p>
						<div id="circle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/serv4.png" alt="Serv 4">
						</div>
					</li>
				</ul>
				</div>
		</div><!-- class="wrap" -->
	</section><!-- class="outer-wrap panel3" -->

	<!-- Blog -->
	<section class="outer-wrap panel4">
		<div class="wrap">
			<header class="entry-header">
				<h3>Blog de Recursos</h3>
			</header><!-- class="entry-header" -->
			<div class="entry-content">
				<ul>
					<li>
						<h4><a href="#">Quae diligentissime contra Aristonem dicuntur a Chryippo</a></h4>
						<a href="#"><img src="http://localhost/~ronyortiz/sites2017/unicad17/wp-content/themes/pleiades17_v1/assets/images/blog/blog1.jpg"></a>
						<p class="fp-blog-metadata">Escrito en Mayo 17, 2017, 12:15am</p>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit; Minime vero, inquit ille, consentit. Itaque vides, quo modo loquantur, nova verba fingunt, deserunt usitata.</p>
						<a href="#" class="cta">Leer más...</a>
					</li>
					<li>
						<h4><a href="#">Deinde disputat quod cuiusque generis animantium</a></h4>
						<a href="#"><img src="http://localhost/~ronyortiz/sites2017/unicad17/wp-content/themes/pleiades17_v1/assets/images/blog/blog2.jpg"></a>
						<p class="fp-blog-metadata">Escrito en Mayo 17, 2017, 12:15am</p>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit; Minime vero, inquit ille, consentit. Itaque vides, quo modo loquantur, nova verba fingunt, deserunt usitata.</p>
						<a href="#" class="cta">Leer más...</a>
					</li>
					<li>
						<h4><a href="#">Sit enim idem caecus, debilis istic sum</a></h4>
						<a href="#"><img src="http://localhost/~ronyortiz/sites2017/unicad17/wp-content/themes/pleiades17_v1/assets/images/blog/blog3.jpg"></a>
						<p class="fp-blog-metadata">Escrito en Mayo 17, 2017, 12:15am</p>
						<p>Sit enim idem caecus, debilis. Istic sum, inquit. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit; Minime vero, inquit ille, consentit. Itaque vides, quo modo loquantur, nova verba fingunt, deserunt usitata.</p>
						<a href="#" class="cta">Leer más...</a>
					</li>
				</ul>
			</div><!-- class="entry-content" -->
		</div><!-- class="wrap" -->
	</section><!-- class="outer-wrap panel4" -->

	<!-- Testimonials -->
	<section class="outer-wrap panel5">
		<div class="wrap">
			<header class="entry-header">
				<h3>Testimonials</h3>
			</header><!-- class="entry-header" -->
			<div class="entry-content">
				<ul>
					<li>
						<h4>Dr. Cruz consectetur adipiscing elit</h4>
						<p class="fp-test-metadata">Paciente: Sharon Jackson | Mayo 17, 2017</p>
						<p>Summus dolor plures dies manere non potest? Audax negotium, dicerem impudens, nisi hoc institutum postea translatum ad philosophos nostros esset. Non dolere, inquam, istud quam vim habeat postea videro</p>
						<a href="#"><button>Leer más</button></a>
					</li>
					<li>
						<h4>Dr. Cruz consectetur adipiscing elit</h4>
						<p class="fp-test-metadata">Paciente: Sharon Jackson | Mayo 17, 2017</p>
						<p>Summus dolor plures dies manere non potest? Audax negotium, dicerem impudens, nisi hoc institutum postea translatum ad philosophos nostros esset. Non dolere, inquam, istud quam vim habeat postea videro</p>
						<a href="#"><button>Leer más</button></a>
					</li>
					<li>
						<h4>Dr. Cruz consectetur adipiscing elit</h4>
						<p class="fp-test-metadata">Paciente: Sharon Jackson | Mayo 17, 2017</p>
						<p>Summus dolor plures dies manere non potest? Audax negotium, dicerem impudens, nisi hoc institutum postea translatum ad philosophos nostros esset. Non dolere, inquam, istud quam vim habeat postea videro</p>
						<a href="#"><button>Leer más</button></a>
					</li>
				</ul>
			</div><!-- class="entry-content" -->
		</div><!-- class="wrap" -->
	</section><!-- class="outer-wrap panel5" -->

	<!-- Awards -->
	<section class="outer-wrap panel6">
		<div class="wrap">
			<header class="entry-header">
				<h3>Awards</h3>
			</header><!-- class="entry-header" -->
			<div class="entry-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tamen intellego quid velit.</p>
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/awards/award1.png" alt="award name 1">
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/awards/award2.png" alt="award name 2">
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/awards/award3.png" alt="award name 3">
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/awards/award4.png" alt="award name 4">
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/awards/award5.jpg" alt="award name 5">
					</li>
				</ul>
			</div>
		</div><!-- class="wrap" -->
	</section><!-- class="outer-wrap panel6" -->




	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
