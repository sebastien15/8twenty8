<?php /* Template Name: Single Event Temp */
get_header();
?>

    <div class="event-container w-11/12 m-auto">
      <div class="border-b pb-11 border-black">
        <div class="row flex gap-2 mb-8">
          <img
            class="arrow-right-icon"
            src="<?= get_template_directory_uri(); ?>/assets/arrow-left.svg"
            alt="Arrow Left"
          />
          <p>Back</p>
        </div>

        <div class="flex justify-between">
          <div class="w-5/12">
            <img class="w-full" src="<?= get_the_post_thumbnail_url(); ?>" />
          </div>

          <div class="w-6/12">
            <h1 class="event-title pb-5"><?= the_title(); ?></h1>
            <p>
              <?= the_content(); ?>
            </p>
          </div>
        </div>
      </div>

      <section class="single-events-section">
        <div class="flex gap-7">
          <?php
            $images = get_field('event_gallery'); // Change 'event_gallery' to your ACF gallery field name
            if ($images) {
                foreach ($images as $image) {
                  $img = $image['image'];
                    ?>
                    <div class="w-3/12 mt-11">
                        <img class="w-full" src="<?php echo esc_url($img['url']); ?>" 
                            alt="<?php if(isset($img['alt']) && !empty($img['alt'])) { echo esc_attr($img['alt']); } ?>" 
                        />
                    </div>
                    <?php
                }
            }
            ?>

        
        </div>
      </section>
    </div>

<?php 
get_footer();
?>