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
  <div class="global-overlay"></div>
  <!-- Navigation -->
  <nav class="navigation__bar">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="logo__wrapper d-lg-inline-block d-flex align-items-center justify-content-between">
          <a class="logo__container" href="<?php echo esc_url( home_url( '/' ) ); ?>">

            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>

            <?php
                  // Get Custom Logo URL
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id, 'full' );
                  $custom_logo_url = $custom_logo_data[0];
                ?>

              <img src="<?php echo esc_url( wp_make_link_relative( $custom_logo_url ) ); ?>" alt="site-logo" class="h-100">
            <?php else: ?>
              <?php echo bloginfo( 'name' ); ?>
            <?php endif; ?>
          </a>
          <button class="btn rounded-0 d-lg-none btn-lg show__side__menu">
            <svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512'><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-miterlimit='10' stroke-width='32' d='M80 160h352M80 256h352M80 352h352'/></svg>
          </button>
        </div>

        <div class="d-lg-block side__menu">
          <?php

              wp_nav_menu(
                  array(
                      'theme_location'  =>    'primary_menu',
                      'container'       =>    false,
                  )
              );

          ?>
        </div>
      </div>
    </div>
  </nav>