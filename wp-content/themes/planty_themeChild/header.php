<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body >

<header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

<?php if(has_custom_logo()) : ?>
<?php the_custom_logo(); ?>
<?php else : ?>
<h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
<?php endif; ?>
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>


<input type="checkbox" id="burger">
<label for="burger" id="burger-label">
    <span class="bar1"></span>
    <span class="bar2"></span>
    <span class="bar3"></span>
</label>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

<?php wp_nav_menu( array(    /*Affichage du menu*/
    'theme_location' => 'main-menu', 
    'link_before' => '<span itemprop="name">', 
    'link_after' => '</span>',
    
    ) ); ?>


</nav>
</header>
<div id="container">
<main id="content" role="main">