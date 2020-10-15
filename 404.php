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

<body style="height: 100vh; width: 100%;" class="d-flex align-items-center justify-content-center">

<div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-decoration-none text-secondary"><i class="h3 fas fa-map-signs pr-2 animate__animated animate__pulse animate__infinite animate__fast"></i>Go Home</a>
    <h1 class="text-secondary">404 | NOT FOUND</h1>
</div>

<?php wp_footer(); ?>

</body>

</html>