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


    <?php include('./inc/process.php'); ?>


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
<?php 
get_footer();
?>