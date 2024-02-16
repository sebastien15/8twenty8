<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twenty8
 * 
 * 
 */

//  $homepageId = get_id_by_slug("home");


?>

<div class="contact-section space-y-10 mt-20">

    <?php
    if (get_field('contact_us_section')) :
        $contact_sec = get_field('contact_us_section');
    ?>
        <div class="text-2xl space-y-4">
            <p class="text-[#004F52] text-center text-2xl"><?= $contact_sec['title'] ?></p>
        </div>
        <p class="text-2xl text-center text-[#49413D]">
        <?= $contact_sec['description'] ?>
        </p>
        <div class="contact-details flex justify-evenly">
            <div class="contact-email">
                <p class="text-[13px] text-[#49413D]"><?= $contact_sec['email_title'] ?></p>
                <div class="contact-us flex justify-between max-w-[510px]">
                    <p class="text-[#004F52] text-[40px] mr-9"><?= $contact_sec['email'] ?></p>
                    <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-green.svg" alt="email" />
                </div>
                <hr class="border-[#49413D]" />
            </div>
            <div class="contact-Whatsapp">
                <p class="text-[13px] text-[#49413D]"><?= $contact_sec['whatsapp_title'] ?></p>
                <div class="flex justify-between max-w-[510px]">
                    <p class="text-[#E7A362] text-[40px] mr-9"><?= $contact_sec['whatsapp_number'] ?></p>
                    <img src="<?= get_template_directory_uri(); ?>/images/oblique-arrow-yellow.svg" alt="Whatsapp" />
                </div>
                <hr class="border-[#49413D]" />
            </div>
        </div>

    <?php endif; ?>

</div>

<footer class="footer-section mt-20">
    <?php
    if (get_field('footer')) :
        $footer_sec = get_field('footer');
    ?>
        <div class="footer-wrapper mx-auto flex w-9/12 m-auto items-center justify-between py-16 ">
            <img src="<?= $footer_sec['logo']['url'] ?>" />
            <div class="social-icons flex gap-2">
                <?php
                $social_medias = $footer_sec['social_medias'];
                foreach ($social_medias as $social_medias_sec) :
                ?>
                    <a href="" class=""><img src="<?= $social_medias_sec['image']['url'] ?>" /></a>
                <?php
                endforeach;
                ?>
            </div>
            <p class="text-white"><?= $footer_sec['copyright'] ?><br /> <?= $footer_sec['copyright_reserved'] ?></p>
        </div>

    <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>