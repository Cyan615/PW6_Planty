<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_theme_support('custom-logo');
add_action('after_setup_theme', 'childtheme_supports');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', 
    array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/responsive.css', 
    array(), filemtime(get_stylesheet_directory() . '/css/responsive.css'));

}

function childtheme_supports() {
    register_nav_menu('footer', 'Pied de page');
}