<?php /* Template Name: Contact us Temp */
get_header();
?>
    <div class="contact-us-container ">

      <img class="arrow-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-down.svg" alt="Arrow Icon" />

      
    </div>
    <section class=" contact-section">
        <div class="mx-auto flex flex-col items-center">
          <h3 class="contact-section-heading">Contact Us</h3>
          <p class="contact-section-description">Feel free to reach out to us!</p>
          <div class="contact-details flex justify-evenly">
          <div class="contact-email">
              <p class="text-[13px] text-[#49413D]">Email us at:</p>
              <div class="contact-us flex justify-between max-w-[510px]">
                  <p class="text-[#004F52] text-[40px] mr-9">8twenty8@gmail.com</p>
                  <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-green.svg" alt="email" />
              </div>
              <hr class="border-[#49413D]" />
          </div>
          <div class="contact-Whatsapp">
              <p class="text-[13px] text-[#49413D]">Whatsapp us at:</p>
              <div class="flex justify-between max-w-[510px]">
                  <p class="text-[#E7A362] text-[40px] mr-9">+250 788 000 000</p>
                  <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-yellow.svg" alt="Whatsapp" />
              </div>
              <hr class="border-[#49413D]" />
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