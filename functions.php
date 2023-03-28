<?php

function montheme_suport() //tous ce que le theme support 
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'en tete du menu');
    register_nav_menu('footer', 'pied page');
    add_theme_support(
        'custom-logo',
        array(
            'height' => 100,
            'width'                => 300,
            'flex-width'           => true,
            'flex-height'          => true,
        )
    );
}

/*
fonction pour load le css la bootstrap
*/

function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.css');
    wp_enqueue_style("bootstrap");
}
/*pour test */
function montheme_title_separator()
{
    return '|';
}

/* pour changer une class du menu */

function montheme_menu_class(array $class)
{
    $class[] = 'nav-item';
    return $class;
}

/* pour changer une class du menu */

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

/* TAXONOMI*/
function montheme_init()
{
    register_taxonomy('sport', 'post', [
        'labels' => [
            'name'          => 'Sport',
            'singular_name' => 'Sport',
            'plural_name'   => 'Sports',
            'search_items'  => 'Rerchercher des sports',
            'all-items'     => 'Tous les sports',
            'edit_item'     => 'Editer le sport',
            'update_item'   => 'Mettre à jour le sport',
            'add_new_item'  => 'Ajouter un nouveau sport',
            'new_item_name' => 'Ajouter un nouveau sport',
            'menu_name'     => 'Sport',

        ], 'show_in_rest' => true
    ]);
    register_post_type('appartement', [
        'label' => 'Appartement',
        'public' => true,
        'menu position' => 3,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_achrive' => true 
    ]);
}

add_action('init', 'montheme_init');
add_action('after_setup_theme', 'montheme_suport');
add_action('wp_enqueue_scripts', 'montheme_register_assets');


add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
require_once('metaboxes/sponso.php');
SonsponsoMetaBox::register();
