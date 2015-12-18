<?php

add_theme_support( 'post-thumbnails' );

add_image_size('custom', 400, 400);


function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer')
                )
        );
}
add_action('init', 'register_my_menus');

function longitud_excerpt($length) {
    return 20;
}
add_filter('excerpt_length', 'longitud_excerpt');