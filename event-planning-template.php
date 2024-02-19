<?php /* Template Name: Event Planning Temp */
get_header();
?>
  <div class=" event-container w-9/12 m-auto">
      <div class="banner">
        <div class="badge">
          <img src="<?= get_template_directory_uri(); ?>/assets/8-icon.svg" alt="Badge Image" />
        </div>
        <h1>
          <span class="main-text">
            Crafting Unforgettable <span class="highlighted">Moments</span>
          </span>
        </h1>
      </div>

      <img class="arrow-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-down.svg" alt="Arrow Icon" />

      <section class="events-section">
        <div class="event-row">
          <?php

            $args = array(
                'post_type' => 'events', 
                'posts_per_page' => -1, 
            );

            $events = new WP_Query($args);
            if ($events->have_posts()) {
                while ($events->have_posts()) {
                    $events->the_post();
                    ?>
                    <div class="event-column mt-8">
                        <img
                            class="event-image"
                            src="<?= get_the_post_thumbnail_url(); ?>"
                            alt="<?= the_title(); ?>"
                        />
                        <a href="<?php the_permalink(); ?>" class="event-text">
                            <?php the_title('<h2>', '</h2>'); ?>
                            <img class="arrow-right-icon"
                                 src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg"
                                 alt="Arrow Right"/>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // Reset post data
            } else {
                echo 'No events found.';
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