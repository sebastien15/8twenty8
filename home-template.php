<?php /* Template Name: Home Temp */
get_header();
?>



<hr class="border-[#49413D]" />


<div class="flex home-container">
    <?php
    if (get_field('hero')) :
        $hero_sec = get_field('hero');
    ?>
        <section class="section-text">
            <h1 class="section-text-title"><?= $hero_sec['title'] ?><span class="text-green"><?= $hero_sec['min_title_1'] ?></span>
                <br /><?= $hero_sec['min_title_2'] ?> <span class="text-orange"><?= $hero_sec['min_title_3'] ?></span>
            </h1>
            <div class="hero-img-container relative">
                <img class="section-text-img" src="<?= $hero_sec['hero_image']['url'] ?>" alt="flowers" class="z-10" />
                <div class="badge absolute transform -translate-y-1/2 top-0 left-auto right-12">
                    <img class="section-text-roundimage " src="<?= $hero_sec['section_text_image']['url'] ?>" alt="overlay" class="overlay-img" />
                </div>

            </div>

        </section>

        <section class="image-container">
            <img src="<?= $hero_sec['image_container']['url'] ?>" alt="chair" class="section-img rounded-3xl object-cover" />
        </section>

    <?php endif; ?>
</div>





<div class="arrow-seperation flex justify-center my-20">
    <img src="<?= get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow-down" />
</div>

<?php
if (get_field('about')) :
    $about_sec = get_field('about');
?>
    <div class="text-2xl text-center space-y-4">
        <p class="text-[#004F52] mb-[30px]"><?= $about_sec['title'] ?></p>
        <p>
            <?= $about_sec['description'] ?>
        </p>
    </div>

<?php endif; ?>



<div class="stats-container grid grid-cols-4 gap-4 text-center mt-[75px] w-[65%] mx-auto">

    <?php
    if (get_field('stats')) :
        $stats = get_field('stats');
    ?>
        <?php
        foreach ($stats as $stats_sec) :

        ?>
            <div class="stats">
                <h2 class="text-[60px] text-[#E7A362]" id="count1"><?= $stats_sec['number'] ?> +</h2>
                <p class="text-[20px] text-[#49413D]">
                    <?= $stats_sec['description'] ?> <br />
                    <?= $stats_sec['description_br'] ?>
                </p>
            </div>

        <?php
        endforeach;
        ?>

    <?php endif; ?>


</div>


<div class="services-section bg-[#F4F4F4] border border-none rounded-t-xl pt-10 mt-[84px] w-full" style="background: #F4F4F4; border-top-right-radius:50px; border-top-left-radius: 50px;">

    <?php
    if (get_field('services_section')) :
        $services_section_sec = get_field('services_section');
    ?>
        <div class="service-title-wrapper  text-2xl text-center space-y-4">
            <p class="service-title text-[#004F52] text-2xl"><?= $services_section_sec['title'] ?></p>
            <p class="service-description text-2xl">
                <?= $services_section_sec['description'] ?>
            </p>
        </div>
        <div class="services-container grid justify-center pb-[126px] px-[20%]">

            <?php
            $services = $services_section_sec['services'];
            foreach ($services as $services_sec) :
            ?>
                <div class="single-service flex flex-col">
                    <div class="flex justify-between mt-20  p-10">
                        <img src="<?= $services_sec['image']['url'] ?>" alt="interior design" />
                        <p class="text-[60px]"><?= $services_sec['service_title'] ?></p>
                            <img class="single-service-arrow" class="arrow" src="<?= get_template_directory_uri(); ?>/images/down-arrow-black.svg" alt="arrow-down" />

                    </div>

                    <div class="hidden-content hidden text-center">
                        <p><?= $services_sec['description'] ?></p>
                        <a href="#" class="recent-projects-link flex justify-center gap-2 my-3">
                            <p class="text-[20px]"><?= $services_sec['check_recent_project'] ?> </p>
                            <img class="arrow-right" src="<?= get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="arrow-right" />
                        </a>
                    </div>
                </div>
                <hr class="border-b-[#49413D] border" />
            <?php
            endforeach;
            ?>


        </div>

    <?php endif; ?>
</div>




<?php include(get_template_directory() . '/inc/process.php'); ?>


<div class="board-section w-full bg-[#004F52] text-white flex justify-center overflow-hidden mt-[133px] pb-[133px]">
    <div class="board-members flex justify-between w-9/12 gap-5 max-w-[1440px] py-20">
        <?php
        if (get_field('board_section')) :
            $board_section = get_field('board_section');
        ?>
            <?php
            foreach ($board_section as $board_section_sec) :

            ?>
                <div class="member-desciption text-center ">
                    <img src="<?= $board_section_sec['image']['url'] ?>" alt="Customer 1" class="rounded-md sm:w-[340px] h-auto mx-auto" />
                    <h2 class="text-2xl mt-4"><?= $board_section_sec['name'] ?></h2>
                    <p class="text-sm text-[#FFFFFF] mt-2"><?= $board_section_sec['title'] ?></p>
                    <p class="mt-4 text-[#FFFFFF]">
                        <?= $board_section_sec['description'] ?>

                    </p>
                </div>

            <?php
            endforeach;
            ?>

        <?php endif; ?>

    </div>
</div>

<?php include(get_template_directory() . '/inc/contact.php'); ?>



<script>
    $(document).ready(function() {
        $(".single-service").click(function() {
            // Toggle the visibility of the hidden content
            $(this).find('.hidden-content').slideToggle();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {


        // Create CountUp instances for each element
        const countUp1 = new window.CountUp('count1', 30);
        const countUp2 = new window.CountUp('count2', 20);
        const countUp3 = new window.CountUp('count3', 20);
        const countUp4 = new window.CountUp('count4', 100);

        // Trigger animations when the element is in the viewport
        const options = {
            rootMargin: '0px',
            threshold: 0.2,
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    countUp1.start();
                    countUp2.start();
                    countUp3.start();
                    countUp4.start();
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        // Observe each stats element
        document.querySelectorAll('.stats').forEach((stat) => {
            observer.observe(stat);
        });
    });
</script>



<?php
get_footer();
?>