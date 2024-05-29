<!-- process-component.php -->

<?php

//  $homepageId = get_id_by_slug("home");

// Get the home page object by its path
$home_page = get_page_by_path("home");

// Check if the home page exists
if ($home_page) {
    // Get the ID of the home page
    $home_page_id = $home_page->ID;
} else {
    // Handle the case when the home page is not found
    echo "Error: Home page not found.";
    // Optionally, you can provide further instructions or fallback content here
    // For example: include('fallback-header.php');
    exit; // Stop further execution
}

?>


<section class="our-process">
    <?php
    if (get_field('process_section', $home_page_id)) :
        $process_section_sec = get_field('process_section', $home_page_id);
    ?>
        <div class="flex flex-col items-center mx-auto">
            <h3 class="process-heading"><?= $process_section_sec['title'] ?></h3>
            <p class="process-description">
                <?= $process_section_sec['description'] ?>
            </p>
            <div class="process-content w-9/12 flex gap-5">
                <div class="process-column">
                    <p><?= $process_section_sec['discuss'] ?><br /><?= $process_section_sec['discuss_br_1'] ?><br /><?= $process_section_sec['discuss_br_2'] ?></p>
                </div>
                <?php
                $steps = $process_section_sec['steps'];
                foreach ($steps as $steps_sec) :
                ?>
                    <div class="bordered-column flex gap-2">
                        <div class="inner-box">
                            <div class="green-box">
                                <p class="inner-text">
                                    <?= $steps_sec['number'] ?>
                                </p>
                            </div>
                            <p class="inner-text-gray">
                                <?= $steps_sec['descprition'] ?> <br />
                                <?= $steps_sec['description_br'] ?>
                            </p>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <!-- <div class="arrow-container flex">
                     <img class="arrow-right-icon" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="Arrow Right" />
                </div> -->
            </div>

        </div>
    <?php endif; ?>
</section>