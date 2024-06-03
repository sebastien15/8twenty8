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
      <?php

      $args = array(
        'post_type' => 'post',  // Query for posts
        'posts_per_page' => -1,
      );

      $posts = new WP_Query($args);
      if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post();
      ?>
          <div class="event-column mt-8">
            <a href="<?php the_permalink(); ?>">
              <img class="event-image" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" />
              <div class="event-text">
                <?php the_title('<h2>', '</h2>'); ?>
                <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
              </div>
            </a>
          </div>
      <?php
        }
        wp_reset_postdata(); // Reset post data
      } else {
        echo 'No posts found.';
      }
      ?>
    </div>
  </section>

 
</div>


<?php include(get_template_directory() . '/inc/process.php'); ?>


<?php include(get_template_directory() . '/inc/contact.php'); ?>



<?php
get_footer();
?>