<?php
get_header();
?>

<main id="primary" class="site-main">

    <section class="banner">
        <div class="banner__video-container">
            <video
                class="banner__video"
                autoplay
                loop
                muted
                playsinline>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video_koukaki/video-header.mp4" type="video/mp4">
            </video>
            <img
                class="banner__fallback"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png"
                alt="Fleurs d'oranger & chats errants">
        </div>
        <div class="banner__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>@

    <section id="story" class="story">
        <h2>L'histoire</h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>


        <?php get_template_part('template-parts/characters'); ?>

        <article id="place">
            <img class="place__cloud place__cloud--big"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images_koukaki/big_cloud.png"
                alt="">
            <img class="place__cloud place__cloud--little"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images_koukaki/little_cloud.png"
                alt="">
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>

    <section id="studio">
        <h2>Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l'animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes.</p>
            <p>Avec une créativité et une capacité d'innovation mondialement reconnues, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Cette année, il vous présente "Fleurs d'oranger et chats errants".</p>
        </div>
    </section>

    <?php get_template_part('template-parts/oscar-animation'); ?>

</main>

<?php get_footer(); ?>