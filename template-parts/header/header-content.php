
<?php /* Displays header media */ ?>
<div class="custom-header">

  <!-- Displays header site branding -->
  <div class="site-branding">
    <div class="wrap">

      <?php the_custom_logo(); ?>

      <div class="site-branding-text">
        <?php if ( is_front_page() ) : ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif; ?>

        <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo $description; ?></p>
          <?php endif; ?>
      </div><!-- .site-branding-text -->

      <div class="header-credentials">
        <h2>Dr. Juan Carlos Cruz</h2>
        <h3>Cirujano Ortopedista</h3>
        <p>Especializado en cirugía de cadera, rodillas y espalda</p>
      </div><!-- class="header-credentials" -->

      <div class="header-appointment">
        <p>Reserve una cita <span class="contact-phone">(591) 2 2442204</span></p>
      </div><!-- class="header-appointment" -->

    </div><!-- .wrap -->
  </div><!-- .site-branding -->

</div><!-- .custom-header -->
