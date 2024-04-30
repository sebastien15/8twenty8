<?php /* Template Name: Contact us Temp */
get_header();
?>
<div class="contact-us-container ">

  <img class="arrow-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-down.svg" alt="Arrow Icon" />


</div>

<?php
if (get_field('contact_us')) :
  $contact_us_sec = get_field('contact_us');
  $number = $contact_us_sec['number'];

?>
  <section class=" contact-section">
    <div class="mx-auto flex flex-col items-center">
      <h3 class="contact-section-heading"><?= $contact_us_sec['title'] ?></h3>
      <p class="contact-section-description"><?= $contact_us_sec['description'] ?></p>
      <div class="contact-details flex justify-evenly">
        <div class="contact-email">
          <p class="text-[13px] text-[#49413D]"><?= $contact_us_sec['email_title'] ?></p>
          <div class="contact-us flex justify-between max-w-[510px]">


            <a href="mailto:<?= $contact_us_sec['email'] ?>" target="_blank">
              <p class="text-[#004F52] text-[40px] mr-9"><?= $contact_us_sec['email'] ?></p>
            </a>


            <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-green.svg" alt="email" />
          </div>
          <hr class="border-[#49413D]" />
        </div>
        <div class="contact-Whatsapp">
          <p class="text-[13px] text-[#49413D]"><?= $contact_us_sec['whatsapp_title'] ?></p>
          <div class="flex justify-between max-w-[510px]">
            <a href="https://wa.me/<?= $number ?>" target="_blank">
              <p class="text-[#E7A362] text-[40px] mr-9"><?= $contact_us_sec['number'] ?></p>
            </a>



            <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-yellow.svg" alt="Whatsapp" />
          </div>
          <hr class="border-[#49413D]" />
        </div>
      </div>
    </div>
  </section>
  <section class="w-11/12 m-auto mt-8">
    <img src="<?= $contact_us_sec['image']['url'] ?>" />
  </section>

<?php endif; ?>
<?php
get_footer();
?>