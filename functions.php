<?php

add_theme_support( 'post-thumbnails' );

add_image_size('custom', 60, 60);


function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer'),
                'menu-sidebar' => __('Menú del sidebar')
                )
        );
}
add_action('init', 'register_my_menus');

// limit longitud excerpt
function longitud_excerpt($length) {
    return 20;
}
add_filter('excerpt_length', 'longitud_excerpt');


// register sidebar 

function myplugin_register_sidebar(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-sidebar-idt',
			'description'   => 'Barra Lateral Derecha',
			'name'   => 'Barra Lateral'
			// 'class'         => '',
			// 'before_widget' => '<li id="%1" class="widget %2">',
			// 'after_widget'  => '</li>',
			// 'before_title'  => '<h2 class="widgettitle">',
			// 'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
}

add_action('widgets_init', 'myplugin_register_sidebar' );