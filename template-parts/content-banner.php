<!-- Contact Banner -->
<section class="diamond__banner__container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo esc_attr( get_parent_theme_file_uri( 'assets/images/bgart.jpg' ) ); ?>);">
  <div class="container h-100">
    <div class="row h-100 d-flex align-items-center">
      <div class="col-12">
        <h1 class="m-0 font-weight-bold text-white"><?php echo esc_html( wp_title( '' ) ); ?></h1>
        <nav aria-label="breadcrumb bg-transparent">
          <ol class="breadcrumb bg-transparent pl-0 m-0">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_home_url() ); ?>">Home</a></li>
            <li class="breadcrumb-item active current text-white"><?php echo esc_html( wp_title( '' ) ); ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>