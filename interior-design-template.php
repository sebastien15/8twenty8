<?php /* Template Name: Interior Design Temp */
get_header();
?>
<div class=" event-container w-9/12 m-auto">

  <div class="banner">
    <?php
    if (get_field('interior_design')) :
      $interior_design_sec = get_field('interior_design');
    ?>
      <div class="badge">
        <img src="<?= $interior_design_sec['image']['url'] ?>" alt="Badge Image" />
      </div>
      <h1>
        <span class="main-text">
        <?= $interior_design_sec['title'] ?> <span class="highlighted"><?= $interior_design_sec['min_title'] ?></span>
        </span>
      </h1>

    <?php endif; ?>

  </div>

  <img class="arrow-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-down.svg" alt="Arrow Icon" />

  <section class="events-section">
    <div class="event-row">
      <div class="event-column mt-8">
        <img class="event-image" src="<?= get_template_directory_uri(); ?>/assets/event-image-1.png" alt="Event Image" />
        <a class="event-text">
          Event 1 Description
          <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
        </a>
      </div>
      <div class="event-column mt-8">
        <img class="event-image" src="<?= get_template_directory_uri(); ?>/assets/event-image-2.png" alt="Event Image" />
        <a class="event-text">
          Event 2 Description
          <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
        </a>
      </div>
      <div class="event-column mt-8">
        <img class="event-image" src="<?= get_template_directory_uri(); ?>/assets/event-image-3.png" alt="Event Image" />
        <a class="event-text">
          Event 3 Description
          <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
        </a>
      </div>
      <div class="event-column mt-8">
        <img class="event-image" src="<?= get_template_directory_uri(); ?>/assets/event-image-3.png" alt="Event Image" />
        <a class="event-text">
          Event 3 Description
          <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
        </a>
      </div>
    </div>
  </section>
</div>



<section class="our-process">
  <div class="flex flex-col items-center mx-auto">
    <h3 class="process-heading">Our Process</h3>
    <p class="process-description">
      We can't wait to create something extraordinary for you, with you!
    </p>
    <div class="process-content w-9/12 flex gap-5">
      <div class="process-column">
        <p>LET’S DISCUSS<br />YOUR PROJECT<br />TODAY!</p>
      </div>
      <div class="bordered-column flex gap-2">
        <div class="inner-box">
          <div class="green-box">
            <p class="inner-text">1</p>
          </div>
          <p class="inner-text-gray">
            Get in touch with<br />our team today
          </p>
        </div>
        <div class="arrow-container flex">
          <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
        </div>

        <div class="inner-box">
          <div class="green-box">
            <p class="inner-text">2</p>
          </div>
          <p class="inner-text-gray">
            Our team will get <br /> back to you
          </p>
        </div>
        <div class="arrow-container flex">
          <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
        </div>
        <div class="inner-box">
          <div class="green-box">
            <p class="inner-text">3</p>
          </div>
          <p class="inner-text-gray">
            Let’s start the <br /> craft
          </p>
        </div>


      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>