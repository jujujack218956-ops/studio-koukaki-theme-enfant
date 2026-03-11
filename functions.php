<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Style enfant compilé depuis SCSS
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/css/main.css',
        array('parent-style'),
        filemtime(get_stylesheet_directory() . '/css/main.css')
    );

    // Script animations
    wp_enqueue_script(
        'foce-animations',
        get_stylesheet_directory_uri() . '/js/animations.js',
        array('jquery'),
        filemtime(get_stylesheet_directory() . '/js/animations.js'),
        true // chargé en footer
    );
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
