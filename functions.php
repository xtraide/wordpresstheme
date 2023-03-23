<?php

function montheme_suport()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'en tete du menu');
    register_nav_menu('footer', 'pied page');
}
function montheme_register_assets()
{

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.css');
    wp_enqueue_style("bootstrap");

}

function montheme_title_separator()
{
    return '|';
}

function montheme_menu_class(array $class)
{
    $class[] = 'nav-item';
    return $class;
}
function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}


add_action('after_setup_theme', 'montheme_suport');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
