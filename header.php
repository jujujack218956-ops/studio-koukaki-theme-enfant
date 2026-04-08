<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <span class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </span>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <button class="menu-close">✕</button>
                <div class="menu-overlay">

                    <div class="menu-overlay__header">
                        <img class="menu-overlay__logo"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                            alt="Fleurs d'oranger & chats errants">
                    </div>

                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>

                    <img class="menu-cat menu-cat--1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images_koukaki/cat.png" alt="">
                    <img class="menu-cat menu-cat--2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images_koukaki/cat-yellow.png" alt="">
                    <img class="menu-cat menu-cat--3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images_koukaki/cat-grey.png" alt="">

                    <!-- Fleurs -->
                    <img class="menu-flower menu-flower--1" src="<?php echo get_template_directory_uri(); ?>/assets/images/orchid.png" alt="">
                    <img class="menu-flower menu-flower--2" src="<?php echo get_template_directory_uri(); ?>/assets/images/Sunflower.png" alt="">
                    <img class="menu-flower menu-flower--3" src="<?php echo get_template_directory_uri(); ?>/assets/images/hibiscus_footer.png" alt="">
                    <img class="menu-flower menu-flower--4" src="<?php echo get_template_directory_uri(); ?>/assets/images/random_flower.png" alt="">
                    <img class="menu-flower menu-flower--5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images_koukaki/flower.png" alt="">

                    <p class="menu-studio">STUDIO KOUKAKI</p>
                </div>
            </nav>
        </header><!-- #masthead -->