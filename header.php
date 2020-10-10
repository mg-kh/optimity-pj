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
  <meta property="og:image" content="https://mg-kh.github.io/optimity-pj/assets/images/logo.jpg" />

  <title><?php bloginfo('name'); ?></title>

  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() . '/assets/images/android-chrome-192x192.png'; ?>" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- Nav Bar -->
  <section class="nav__bar__container">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-1 py-lg-0">
        <a class="navbar-brand" href="./">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" class="h-100" alt="Logo">
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