<?php
/**
 * The header for our theme
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:title" content="Optimity" />
  <meta property="og:description" content="Optimity is a SI company serving ISPs, Datacenter and Enterprise." />

  <?php wp_head(); ?>
</head>

<body>
  <!-- Nav Bar -->
  <section class="nav__bar__container bg-white">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-1 py-lg-0">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          
          <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
              
              <?php
                // Get Custom Logo URL
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id, 'full' );
                $custom_logo_url = $custom_logo_data[0];
              ?>

              <img 
                src="<?php echo esc_url( wp_make_link_relative( $custom_logo_url ) ); ?>" 
                alt="site-logo"
                class="h-100" 
              >
          <?php else: ?>
              <?php echo bloginfo( 'name' ); ?>
          <?php endif; ?>
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse py-3 py-lg-0" id="navbarSupportedContent">
          <?php

              wp_nav_menu(
                  array(
                      'theme_location'  =>    'primary_menu',
                      'menu_class'      =>    'navbar-nav ml-auto',
                      'container'       =>    false,
                  )
              );

          ?>
        </div>
      </nav>
    </div>
  </section>