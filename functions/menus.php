<?php

function rnet_menus () {
    register_nav_menus([
            'header_menu' => __( 'Шапка' ),
            'footer_menu_1' => __( 'Футер меню 1' ),
            'footer_menu_2' => __( 'Футер меню 2' ),
        ]);
}
add_action( 'init', 'rnet_menus' );

