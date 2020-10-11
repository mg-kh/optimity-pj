<?php
/**
 * Template Name: Contact Us
 */

    get_header();

?>

<?php get_template_part( 'template-parts/content', 'banner' ); ?>

<!-- Contact Form Container -->
<div class="contact__form__container">
  <div class="container">
    <div class="row my-5">
      
      <div class="col-12 col-md-6 pr-lg-5 mb-5 mb-lg-0 ">

        <?php 
          echo do_shortcode( get_field( 'form_shortcode' ) ); 
        ?>

      </div>

      <div class="col-12 col-md-6 pl-lg-5">
        <h3>Office Address</h3>
        
        <?php if ( get_field( 'contact_message' ) ) : ?>

          <p><?php the_field( 'contact_message' ); ?></p>

        <?php endif; ?>

        <h5 class="font-weight-bold mt-4 mb-2"><?php echo get_bloginfo( 'title' ); ?></h5>
        <div class="contact__info">
          
          <?php
              // acf fields
              $contact_attributes = get_field( 'contact' );
          ?>
    
          <p>
            <?php echo $contact_attributes['address']; ?>
          </p>
          <p>
            <?php echo $contact_attributes['tel']; ?>
          </p>
          <p>
            <?php echo $contact_attributes['email']; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

  get_footer();

?>