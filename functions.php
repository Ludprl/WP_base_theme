<?php 


// Fonctions du thème
function montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
    register_nav_menu('header', 'Haut de la page');
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

function montheme_register_assets()
{   // Bootstrap
    // wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    // wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    // wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], false, true);
    // wp_deregister_script('jquery');
    // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', [], false, true);
    // wp_enqueue_style('bootstrap');
    // wp_enqueue_script('bootstrap');

    // Style Principal
    wp_enqueue_style( 
        'mainStyle',
        get_template_directory_uri() . '/src/css/style.css', 
        array(), 
        '1.0'
    );    wp_enqueue_style('mainStyle');

}

function montheme_menu_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');