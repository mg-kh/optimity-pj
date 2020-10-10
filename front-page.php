<?php 

  get_header(); 
  
?>

<!-- Hero Slider -->
<section class="hero__slider__container">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/banner-1.jpg'; ?>"
          class="d-sm-block d-none w-100" alt="photo name">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/mobile-banner-1-mobile.jpg'; ?>"
          class="d-block d-sm-none" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h1>40 Years of Success.</h1>
          <p>Discover the difference with a partner grounded by success and future readiness.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/banner-2.jpg'; ?>"
          class="d-sm-block d-none w-100" alt="photo name">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/mobile-banner-1-mobile.jpg'; ?>"
          class="d-block d-sm-none" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h1>Beyond a Solution Provider, Becoming Your Technology Partner.</h1>
          <p>Your company deserves a partner with the capabilities today to deliver solutions for tomorrow.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/banner-3.jpg'; ?>"
          class="d-sm-block d-none w-100" alt="photo name">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/mobile-banner-1-mobile.jpg'; ?>"
          class="d-block d-sm-none" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h1>Assured of Quality.</h1>
          <p>With Asia’s largest pool of certified engineers supporting you, you can be assured of the quality your
            customers will remember you for.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<?php

  get_footer();

?>