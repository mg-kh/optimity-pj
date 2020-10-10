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
      <nav aria-label="breadcrumb bg-transparent">
        <ol class="breadcrumb bg-transparent m-0">
          <li class="breadcrumb-item"><a href="<?php echo esc_url( get_home_url() ); ?>">Home</a></li>
          <li class="breadcrumb-item active current"><?php echo wp_title( '' ); ?></li>
        </ol>
      </nav>
    </div>

    <div class="row mb-5">
      <div class="col-12 col-md-6 pr-lg-5 mb-5 mb-lg-0 ">
        <h3><?php echo wp_title( '' ); ?></h3>
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control rounded-0" id="name">
          </div>
          <div class="form-group">
            <label for="comp_name">Company Name</label>
            <input type="text" name="comp_name" class="form-control rounded-0" id="comp_name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="comp_name" class="form-control rounded-0" id="email">
          </div>
          <div class="form-group">
            <label for="number">Contact Number</label>
            <input type="password" name="number" class="form-control rounded-0" id="number">
          </div>
          <label>
            Your enquiry is regarding to:
          </label>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="wireless_infra">
            <label class="form-check-label" for="wireless_infra">Wireless Infrastructure Networks</label>
            <br>
            <input type="checkbox" class="form-check-input" id="network_infra">
            <label class="form-check-label" for="network_infra">Network Infrastructure</label>
            <br>
            <input type="checkbox" class="form-check-input" id="others">
            <label class="form-check-label" for="others">Others</label>
          </div>
          <div class="form-group">
            <label for="number">How can we help you:</label>
            <textarea class="rounded-0 form-control" name="" id="" cols="30" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-danger btn-lg rounded-0">Submit</button>
        </form>
      </div>

      <div class="col-12 col-md-6 pl-lg-5">
        <h3>Office Address</h3>
        <p>Thank you for contacting Nera. Your enquiry is very important to us. To ensure we get the right person to
          reply to you expeditiously, kindly fill in the contact form. We
          will respond to your enquiry
          soonest possible. If you wish to speak to someone, our contact numbers are:</p>

        <h5 class="font-weight-bold mt-5">Nera Telecommunications Ltd</h5>
        <div class="contact__info">
          <p>109 Defu Lane 10</p>
          <p>Singapore 539225</p>
          <p>
            <a href="tel:65 6281-3388" class="text-decoration-none text-dark">Tel: + 65 6281-3388</a>
          </p>
          <p>
            <a href="fax:+65 6383-9566" class="text-decoration-none text-dark">Fax: + 65 6383-9566</a>
          </p>
          <p>
            <a href="mailto:webmaster@nera.net" class="text-decoration-none text-dark">E-mail: webmaster@nera.net</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

  get_footer();

?>