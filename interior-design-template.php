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


<?php include(get_template_directory() . '/inc/process.php'); ?>


<?php include(get_template_directory() . '/inc/contact.php'); ?>



<?php
get_footer();
?>