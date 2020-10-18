<?php
/**
 * Template part for displaying page breadcrumb in page.php
 */
?>
<section class="breadcrumb__container py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-white content__font__size pl-0 mb-0">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_home_url() ); ?>" class="text__pinky">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html( wp_title( '' ) ); ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>