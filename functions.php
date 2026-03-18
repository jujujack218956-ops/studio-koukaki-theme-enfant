<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    $child_css = get_stylesheet_directory() . '/css/main.css';
    if (file_exists($child_css)) {
        wp_enqueue_style(
            'child-style',
            get_stylesheet_directory_uri() . '/css/main.css',
            array('parent-style'),
            filemtime($child_css)
        );
    }

    $child_js = get_stylesheet_directory() . '/js/animations.js';
    if (file_exists($child_js)) {
        wp_enqueue_script(
            'foce-animations',
            get_stylesheet_directory_uri() . '/js/animations.js',
            array('jquery'),
            filemtime($child_js),
            true
        );
    }
}

// Sync customizer options depuis le thème parent
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value;
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
