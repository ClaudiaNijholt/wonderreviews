<?php

add_action('init', 'sportPostType');

function sportPostType()
{
    $args = [
        'labels' => [
            'name' => 'Sport',
            'singular_name' => 'Sport',
            'all_items' => 'Alle soorten sport',
            'edit_item' => 'Sport bewerken',
            'add_new' => 'Sport aanmaken',
            'add_new_item' => 'Sport toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'sport',
        ],
    ];

    \register_post_type('sport', $args);

}

