<?php
get_header();
?>

<main id="primary" class="site-main">

    <section class="banner">
        <div class="banner__video-container">
            <img
                class="banner__fallback"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png"
                alt="Fleurs d'oranger & chats errants">
            <video
                class="banner__video"
                autoplay
                loop
                muted
                playsinline>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video_koukaki/video-header.mp4" type="video/mp4">
            </video>
        </div>
        <div class="banner__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>

    <section id="story" class="story">
        <h2>L'histoire</h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php
        $args = array(
            'post_type'      => 'characters',
            'posts_per_page' => -1,
            'meta_key'       => '_main_char_field',
            'orderby'        => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        ?>

        <article id="characters">
            <div class="main-character">
                <h3>Les personnages</h3>
                <?php
                $main_character = $characters_query->posts[0];
                echo '<figure>';
                echo get_the_post_thumbnail($main_character->ID, 'full');
                echo '<figcaption>' . $main_character->post_title . '</figcaption>';
                echo '</figure>';
                $characters_query->next_post();
                ?>
            </div>
            <div class="other-characters">
                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    echo '<figure>';
                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                    echo '<figcaption>';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                }
                ?>
            </div>
        </article>

        <article id="place">
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