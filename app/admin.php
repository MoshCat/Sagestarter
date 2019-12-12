<?php

namespace App;

/*
 * Remove the block styles file from wp_head()
 */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library'); // Gutenberg blocks CSS
});

/**
 * Cleanup and customize the admin with Intervention
 * @link https://github.com/soberwp/intervention
 */
use function Sober\Intervention\intervention;

$title   = 'Welcome to the ' . get_bloginfo('name') . ' Admin area';
$content = 'For support please contact <a href="https://ignation.io" target="_blank">Ignation</a>.<br>
            The administrator\'s email is: <a href="mailto:' . get_bloginfo('admin_email') . '">' . get_bloginfo('admin_email') . '</a>.';
$footer  = 'Thank you for working with <a href="https://ignation.io" target="_blank">Ignation</a>';
if (function_exists('Sober\Intervention\intervention')) {
    intervention('add-dashboard-item', [$title, $content]);
    intervention('add-svg-support', ['admin', 'editor']);
    intervention('remove-dashboard-items', ['welcome', 'activity', 'right-now', 'quick-draft', 'news']);
    intervention('remove-emoji');
    intervention('remove-howdy');
    // intervention('remove-menu-items', 'tools', 'all-not-admin');
    // intervention('remove-menu-items', 'comments', ['editor', 'author', 'admin']);
    // intervention('remove-page-components', ['revisions', 'discussion', 'comments', 'slug', 'author']);
    // intervention('remove-post-components', ['discussion', 'comments', 'slug', 'author', 'trackbacks']);
    // intervention('remove-taxonomies', 'tag');
    // intervention('remove-toolbar-frontend', ['all-not-admin']);
    // intervention('remove-toolbar-items', ['logo', 'updates', 'comments', 'customize', 'account-user', 'new-media', 'new-user']);
    intervention('remove-update-notices', 'all-not-admin');
    // intervention('remove-user-fields', ['options', 'contact', 'name-first', 'name-last', 'name-display', 'about']);
    // intervention('remove-user-roles', ['subscriber', 'contributor']);
    // intervention('remove-widgets', ['calendar', 'rss', 'meta', 'tag-cloud', 'media-audio', 'media-image', 'media-video', 'akismet']);
    intervention('update-label-footer', $footer);
}

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
