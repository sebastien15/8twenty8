<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twenty8
 */

?>

<div class="contact-section space-y-10 mt-20">
    <div class="text-2xl space-y-4">
        <p class="text-[#004F52] text-center text-2xl">Contact us</p>
    </div>
    <p class="text-2xl text-center text-[#49413D]">
        Get in touch with us and let’s start crafting your projects
    </p>
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

	<footer class="footer-section mt-20">
      <div class="footer-wrapper mx-auto flex w-9/12 m-auto items-center justify-between py-16 ">
        <img src="<?= get_template_directory_uri(); ?>/assets/Logo.svg" />
        <div class="social-icons flex gap-2">
          <a href="" class=""><img src="<?= get_template_directory_uri(); ?>/assets/whatsapp.svg" /></a>
          <a href="" class=""><img src="<?= get_template_directory_uri(); ?>/assets/ig.svg" /></a>
          <a href="" class=""><img src="<?= get_template_directory_uri(); ?>/assets/in.svg" /></a>
          <a href="" class=""><img src="<?= get_template_directory_uri(); ?>/assets/f.svg" /></a>
          <a href="" class=""><img src="<?= get_template_directory_uri(); ?>/assets/x.svg" /></a>
        </div>
        <p class="text-white">Copyright 2023. 8Twenty8 <br/> All rights reserved</p>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
