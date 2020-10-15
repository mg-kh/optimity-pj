<?php 

  get_header(); 
  
?>

<!-- Hero Slider -->
<section class="hero__slider__container">
  <div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php if ( have_rows( 'slider' ) ) : $counter = 0; ?>

          <?php
              while ( have_rows( 'slider' ) ) : the_row(); 

              $lg_img = get_sub_field( 'large_img' );
              $lg_img_alt = $lg_img['alt'];
              $lg_img_url = $lg_img['url'];
              
              $md_img = get_sub_field( 'small_img' );
              $md_img_alt = $md_img['alt'];
              $md_img_url = $md_img['sizes']['medium'];
          ?>

            <div class="carousel-item <?php echo $counter == 0 ? 'active' : ''; ?>">
              <img 
                src="<?php echo esc_url( wp_make_link_relative( $lg_img_url ) ); ?>"
                class="d-sm-block d-none w-100" 
                alt="<?php echo esc_attr( $lg_img_alt ); ?>"
              >
              <img 
                src="<?php echo esc_url( wp_make_link_relative( $md_img_url ) ); ?>" 
                class="d-block d-sm-none" 
                alt="<?php echo esc_attr( $md_img_alt ); ?>"
              >
              <div class="carousel-caption d-none d-md-block">
                <h1><?php the_sub_field( 'title' ); ?></h1>
                <p><?php the_sub_field( 'subtitle' ); ?></p>
              </div>
            </div>

          <?php $counter++; endwhile; ?>

      <?php endif; ?>

    </div>
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<?php

  get_footer();

?>