<?php
/**
 * Template part for displaying page banner in page.php
 */
?>

<?php if ( have_rows( 'page_banner' ) ) : ?>

  <?php while ( have_rows( 'page_banner' ) ) : the_row(); 
  
    // Get sub field values
    $imageCollection = get_sub_field( 'image' );
    $heading = get_sub_field( 'heading' );
    $text = get_sub_field( 'text' );
  ?>

    <section class="sub__hero__container">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">

            <h1 class="title__font font-weight-bold text-white mb-3">
              <?php echo esc_html( $heading ); ?>
            </h1>

            <p class="text-white content__font__size">
              <?php echo esc_html( $text ); ?>
            </p>

          </div>
        </div>
      </div>
    </section>

    <style type="text/css">
      .sub__hero__container {

        <?php if ($imageCollection) : ?>
          background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo esc_attr( $imageCollection['url'] ); ?>);
        <?php else : ?>
          background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo esc_attr( get_parent_theme_file_uri( 'assets/images/bgart.jpg' ) ); ?>);
          padding: 100px 0;
        <?php endif; ?>
        
      }
    </style>

  <?php endwhile; ?>

<?php endif; ?>


