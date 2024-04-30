<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twenty8
 */

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
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="<?= get_template_directory_uri(); ?>/js/countup.js"></script>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="flex justify-between items-center py-4 px-6">

        <?php
        if ($home_page_id && get_field('header', $home_page_id)) :
            $header_sec = get_field('header', $home_page_id);
        ?>
            <a href="/home" class="text-[#49413D] hover:text-gray-900"><img src="<?= $header_sec['image']['url'] ?>" alt="Logo" class="w-76" /></a>
            <nav class="flex-grow">
                <ul class="flex justify-center space-x-4 text-lg">
                    <?php
                    $nav_links = $header_sec['nav_links'];
                    foreach ($nav_links as $nav_links_sec) :
                    ?>
                        <li>
                            <a href="<?= $nav_links_sec['title_name']['url'] ?>" class="text-[#49413D] hover:text-gray-900"><?= $nav_links_sec['title_name']['title'] ?></a>
                        </li>

                    <?php
                    endforeach;
                    ?>
                </ul>
            </nav>
            <nav>
                <ul class="flex space-x-4 text-lg">
                    <li>
                        <a href="<?= $header_sec['contact_us']['url'] ?>" class="text-[#49413D] hover:text-gray-900"><?= $header_sec['contact_us']['title'] ?></a>
                    </li>
                </ul>
            </nav>
        <?php
        endif;
        ?>
    </header>
