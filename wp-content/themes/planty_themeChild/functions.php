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
   

}

function childtheme_supports() {
    register_nav_menu('footer', 'Pied de page');
}
// affichage de la page Admin dans le menu
add_filter('wp_nav_menu_items', 'add_admin_menu_item', 10, 2);
function add_admin_menu_item($items, $args){
    if(is_user_logged_in() && $args->theme_location == 'main-menu'){
        $adminItemMenu = '<li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111">
        <a href="'.get_site_url().'/wp-admin/"  aria-current="page" itemprop="url">
        <span itemprop="name">admin</span></a></li>';
        $items .= $adminItemMenu;
    }
    return $items;
};
// ***'. get_site_url() .' -> permet d'avoir l'adresse du site /wp-admin/ ->pointe sur la page admin***  */

?>