<?php

/**
 * Theme support
 */

function theme_support()
{
    // Dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_support');


/**
 * Enqueue stylesheets and scripts
 */

// Styles
function theme_register_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'theme_register_styles');

// Scripts
function theme_register_scripts()
{
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/dist/js/main.bundle.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'theme_register_scripts');


/**
 * Register navigation
 */

function register_theme_nav()
{
    $locations = array(
        'primary' => "Primary navigation",
        'footer' => "Footer navigation"
    );

    register_nav_menus($locations);
}

add_action('init', 'register_theme_nav');


/**
 * Remove Gutenberg
 */

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
