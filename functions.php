<?php

function ironfit_gym_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'ironfit-gym'),
    ]);
}
add_action('after_setup_theme', 'ironfit_gym_setup');

function ironfit_gym_enqueue_assets(): void
{
    $theme_uri = get_stylesheet_directory_uri();

    wp_enqueue_style('ironfit-style', $theme_uri . '/css/style.css', [], '1.0.0');
    wp_enqueue_style('ironfit-pages', $theme_uri . '/css/pages.css', ['ironfit-style'], '1.0.0');

    wp_enqueue_script('ironfit-sql-storage', $theme_uri . '/js/sql-storage-bridge.js', [], '1.0.0', true);
    wp_enqueue_script('ironfit-course-site', $theme_uri . '/js/course-site.js', [], '1.0.0', true);
    wp_enqueue_script('ironfit-main', $theme_uri . '/js/main.js', [], '1.0.0', true);
    wp_enqueue_script('ironfit-auth', $theme_uri . '/js/auth.js', ['ironfit-main'], '1.0.0', true);
    wp_enqueue_script('ironfit-notifications', $theme_uri . '/js/notifications.js', ['ironfit-main'], '1.0.0', true);
    wp_enqueue_script('ironfit-admin-protect', $theme_uri . '/js/admin-protect.js', ['ironfit-main'], '1.0.0', true);
    wp_enqueue_script('ironfit-admin-dashboard', $theme_uri . '/js/admin-dashboard.js', ['ironfit-main'], '1.0.0', true);
    wp_enqueue_script('ironfit-dashboard-mobile', $theme_uri . '/js/dashboard-mobile.js', ['ironfit-main'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ironfit_gym_enqueue_assets');

