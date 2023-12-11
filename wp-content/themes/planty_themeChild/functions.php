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
// affichage de la page Admin dans le menu
// function($items, $args){
//     if(is_user_logged_in() && $args->menu == main-menu){
//         $adminItemMenu = '<li id="menu-item-111" class="menu-item">admin</li>'<li id="menu-item-112" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-56 current_page_item menu-item-112"><a href="http://planty/?page_id=56" aria-current="page" itemprop="url"><span itemprop="name">Nous rencontrer</span></a></li>;
//         $items = $adminItemMenu
//     }
//     return $items;
// };
// add_filter('wp_nav_menu_items', 'add_admin_menu_item', 10, 2);

?>