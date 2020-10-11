<?php
/**
 * Template Name: About Us
 */

    get_header();
    
    $about_company = get_field( 'about_company' );
    $three_facts = get_field( 'three_facts' );
    $our_success = get_field( 'our_success' );

?>
<?php if ( $about_company ) : ?>
<section 
  class="about__us__hero__container" 
  style="background-image: url('<?php echo esc_url( wp_make_link_relative( $about_company["bg_img"]["url"] ) ); ?>')">
  
  <div class="container h-100">
    <div class="row h-100 d-flex align-items-center">
      <div class="col-12 col-md-8">
        <div class="text__container">
          
          <h1 class="font-weight-bold">
            <?php echo esc_html( $about_company['title'] ); ?>
          </h1>

          <p class="lead text-justify text-break font-weight-bold mt-3">
            <?php echo esc_html( $about_company['description'] ); ?>
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="about__us__container">
  <div class="container">
    <?php if ( have_rows( 'three_facts' ) ) : while( have_rows( 'three_facts' ) ) : the_row(); ?>

      <div class="row py-5">

        <div class="col-12 col-lg-6 py-5">

            <?php 
                if ( have_rows( 'facts' ) ) : while( have_rows( 'facts' ) ) : the_row(); 
            ?>

                <h1 class="font-weight-bold">
                    <?php the_sub_field( 'title' ); ?>
                </h1>

                <p class="lead text-justify text-break font-weight-bold mt-3">
                    <?php the_sub_field( 'description' ); ?>
                </p>
                
            <?php endwhile; endif; ?>



        </div>

        <div class="col-12 col-lg-6 d-none d-lg-flex align-items-center">
          <div class="img__container m-auto">
            <img 
              src="<?php echo esc_url( wp_make_link_relative( $three_facts['bg_img']['url'] ) ); ?>" 
              alt="<?php echo $three_facts['bg_img']['alt']; ?>"
              class="w-100" 
            >
          </div>
        </div>

      </div>

    <?php endwhile; endif; ?>

    <hr>
    
    <!-- Our Success Section -->
    <?php if ( $our_success ) : ?>

      <div class="row py-5 flex-lg-row-reverse flex-column-reverse">
        <div class="col-12 col-lg-6 py-5">
          
            <h1 class="font-weight-bold">
              <?php echo esc_html( $our_success['title'] ); ?>
            </h1>

            <p class="lead text-justify text-break font-weight-bold mt-3">
              <?php echo esc_html( $our_success['description'] ); ?>
            </p>

        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
          <div class="img__container m-auto">
            <img 
              src="<?php echo esc_url( wp_make_link_relative( $our_success['bg_img']['url'] ) ); ?>" 
              alt="<?php echo $our_success['bg_img']['alt']; ?>"
              class="w-100"
            >
          </div>
        </div>
      </div>

    <?php endif; ?>
  </div>
</section>

<?php

    get_footer();

?>