<?php
function radius_net_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
}
add_action('after_setup_theme', 'radius_net_setup');

function radius_net_scripts() {
    // Google Fonts dimuat async di header.php agar tidak render-blocking
    wp_enqueue_style('radius-net-main', get_template_directory_uri() . '/assets/main.css', [], '2.5.3');
    wp_enqueue_script('radius-net-main', get_template_directory_uri() . '/assets/main.js', [], '2.5.3', true);
}
add_action('wp_enqueue_scripts', 'radius_net_scripts');

// Tambahkan defer pada main.js
add_filter('script_loader_tag', function($tag, $handle) {
    if ($handle === 'radius-net-main') {
        return str_replace('<script ', '<script defer ', $tag);
    }
    return $tag;
}, 10, 2);

// Hapus favicon bawaan WordPress agar tidak override favicon tema
remove_action('wp_head', 'wp_site_icon', 99);

// Hapus canonical bawaan WordPress — canonical dikelola manual di header.php
remove_action('wp_head', 'rel_canonical');
