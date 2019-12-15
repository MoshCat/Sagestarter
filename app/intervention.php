<?php

namespace App;

use function Sober\Intervention\intervention;

/**
 * Cleanup and customize the admin with Intervention
 * @link https://github.com/soberwp/intervention
 */
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
