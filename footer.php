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

	<footer class="footer-section mt-20">
      <div class="mx-auto flex w-9/12 m-auto items-center justify-between py-16 ">
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
