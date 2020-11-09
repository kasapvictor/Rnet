<?php


function rnet_rates_custom_post_type () {
    $labels = [
        'name'                  => 'Тарифы',
        'singular_name'         => 'Тариф',
        'menu_name'             => 'Тарифы',
        'all_items'             => 'Все тарифы',
        'view_item'             => 'Посмотреть тариф',
        'add_new_item'          => 'Добавить тариф',
        'add_new'               => 'Добавить тариф',
        'edit_item'             => 'Редактировать тариф',
        'update_item'           => 'Обновить тариф',
        'search_items'          => 'Обновить тарифа',
        'not_found'             => 'Тариф не найден',
        'not_found_in_trash'    => 'Тариф не найден'
    ];

    $args = [
        'label'               => 'Тарифы',
        'description'         => 'Тарифы интернет, телевидения, для бизнеса',
        'labels'              => $labels,
        'supports'            => ['title', 'editor', 'excerpt', ], // 'thumbnail' - добавляет поддержку миниатюр
        'taxonomies'          => ['category_rate'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => false, // включает/отключает отображение во фронте как отдельная страница записи
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        //'rewrite'             => ['slug' => 'rates'],
        'menu_icon'           => 'dashicons-superhero'
    ];

    register_post_type('rates', $args);
}
add_action('init', 'rnet_rates_custom_post_type');