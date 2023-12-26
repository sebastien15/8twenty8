<?php /* Template Name: Contact us Temp */
get_header();
?>
    <div class="contact-us-container ">

      <img class="arrow-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-down.svg" alt="Arrow Icon" />

      
    </div>
    <section class="contact-us">
      <div class="mx-auto flex flex-col items-center">
        <h3 class="contact-section-heading">Contact Us</h3>
        <p class="contact-section-description">Feel free to reach out to us!</p>
        <div class="contact-content w-9/12">
          <div class="contact-column">
            <div class="label-text">Email us at:</div>
            <div class="contact-info">
              <a href="mailto:8twenty8@gmail.com">8twenty8@gmail.com</a>
              <img
                class="arrow-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-top-right.svg"
                alt="Arrow Top Right"
              />
            </div>
          </div>
          <div class="contact-column">
            <div class="label-text">WhatsApp us at:</div>
            <div class="contact-info second-contact-info">
              <a href="https://wa.me/250788000000">+250 788 000 000</a>
              <img
                class="arrow-icon"
                src="<?= get_template_directory_uri(); ?>/assets/arrow-top-right-yellow.svg"
                alt="Arrow Top Right"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="w-11/12 m-auto mt-8">
      <img src="<?= get_template_directory_uri(); ?>/assets/contact-us-banner.png" />
    </section>
<?php 
get_footer();
?>