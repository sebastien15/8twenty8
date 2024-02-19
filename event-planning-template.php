<?php /* Template Name: Event Planning Temp */
get_header();
?>
<div class=" event-container w-9/12 m-auto">

  <div class="banner">
    <?php
    if (get_field('event_planning')) :
      $event_planning_sec = get_field('event_planning');
    ?>
      <div class="badge">
        <img src="<?= $event_planning_sec['image']['url'] ?>" alt="Badge Image" />
      </div>
      <h1>
        <span class="main-text">
        <?= $event_planning_sec['main_text'] ?><span class="highlighted"><?= $event_planning_sec['highlighted_text'] ?></span>
        </span>
      </h1>

    <?php endif; ?>

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
                    <img class="event-image" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" />
                    <a href="<?php the_permalink(); ?>" class="event-text">
                        <h2><?php the_title(); ?></h2>
                        <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
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