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
<footer class="footer-section mt-20">
    <?php
    if (get_field('footer', $home_page_id)) :
        $footer_sec = get_field('footer', $home_page_id);
        
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