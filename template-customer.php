<?php
/**
 * Template Name: Customer
 */

    get_header();
    
    $images = get_field('customers');

?>

<?php get_template_part( 'template-parts/content', 'banner' ); ?>


<?php if ( $images ) : ?>

<section class="our__customer__container">
  <div class="container py-5">
    <div class="row">
      
      <?php foreach( $images as $image ) : ?>
      
        <div class="col-6 col-sm-4 col-md-3 my-3">

          <div class="card">
            <div class="card-body p-1">
              <img src="<?php echo esc_url( $image['url'] ); ?>" class="card-img" alt="<?php echo esc_attr( $image['alt'] ); ?>">
            </div>
          </div>

        </div>
        
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php endif; ?>

<?php

    get_footer();

?>
