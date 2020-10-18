<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<div class="contents">

  <?php if ( have_rows( 'content' ) ): ?>

    <?php while ( have_rows( 'content' ) ): the_row(); 
    
      // Get sub field values
      $imageCollection = get_sub_field( 'image' );
      $heading = get_sub_field( 'heading' );
      $body = get_sub_field( 'body' );

    ?>

    <section class="content__container">
      <div class="container">

        <?php if ( get_row_layout() == 'full_width' ) : ?>
          
          <div class="row">
            <div class="col-12">
              <h2 class="text__pinky text-center text-sm-left mb-3">
                <?php echo esc_html( $heading ); ?>
              </h2>

              <?php if ( $imageCollection ) : ?>
                <div class="mb-3" style="max-width: 500px; margin: 0 auto;">
                  <img src="<?php echo esc_attr( $imageCollection['url'] ); ?>" class="w-100" alt="image">
                </div>
              <?php endif; ?>

              <div class="content__font__size text__violet">
                <?php echo $body; ?>
              </div>
            </div>
          </div>

        <?php elseif ( get_row_layout() == 'half_width' ) : ?>

          <div class="row justify-content-between left__right__shift">
            <div class="col-12 col-lg-4 mb-lg-0">
              <img src="<?php echo esc_attr( $imageCollection['url'] ); ?>" class="w-100" alt="image">
            </div>
            <div class="col-12 col-lg-7">
              <h2 class="text__pinky text-center text-sm-left mb-3">
                <?php echo esc_html( $heading ); ?>
              </h2>

              <div class="content__font__size text__violet">
                <?php echo $body; ?>
              </div>
            </div>  
          </div>

        <?php endif; ?>

      </div>
    </section>

    <?php endwhile; ?>

  <?php endif; ?>

</div>