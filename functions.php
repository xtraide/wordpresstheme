<?php 

function montheme_suport () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
function montheme_register_assets(){
    
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.css');
    wp_enqueue_style("bootstrap");
} 

function montheme_title_separator () {
    return '|';
}



add_action('after_setup_theme','montheme_suport');
add_action('wp_enqueue_scripts','montheme_register_assets');
add_filter('document_title_separator','montheme_title_separator');
?>

