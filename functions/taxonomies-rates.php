<?php

function rnet_taxonomies_rates()
{
    register_taxonomy(
        'category_rate',
        'rates',
        [
            'labels' => [
                'name' => 'Категории',
                'add_new_item' => 'Добавить',
            ],
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
			'show_admin_column' => true, // отображать колонку в списоке постов в админке
        ]
    );
}

add_action( 'init', 'rnet_taxonomies_rates', 0 );