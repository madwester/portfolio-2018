<?php

// Add scripts and stylesheets
function mw_scripts() {
    //STYLESHEETS
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/components/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/components/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/build/css/normalize.css' );
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/build/css/custom.css' );
    //SCRIPTS FROM HERE!
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/components/jquery/dist/jquery.js', array(), '1', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/components/bootstrap/dist/js/bootstrap.min.js', array(), '1', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/build/external-js/modernizr.custom.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'classie', get_template_directory_uri() . '/build/external-js/classie.js', array(), '1', true );
    wp_enqueue_script( 'clipboard', get_template_directory_uri() . '/build/external-js/clipboard.min.js', array( 'classie' ), '1', true );
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/build/external-js/smooth-scroll.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/build/js/custom.js', array(), '1', false );
}
add_action( 'wp_enqueue_scripts', 'mw_scripts' );

//true = load in footer
//false = load in head

function theme_setup(){
    // WordPress Titles
    add_theme_support( 'title-tag' );
    // Support Featured Images
    add_theme_support( 'post-thumbnails' );
    // Adding menu to appear under appearence 
    add_theme_support( 'menus' );
}
add_action('init', 'theme_setup');

function register_my_menu(){
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action('after_setup_theme', 'register_my_menu');

class Custom_Walker_Nav_Menu_top extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $is_current_item = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_item = ' class="menu__item--current menu__item"';
        }
        else
        {
            $is_current_item = ' class="menu__item"';
        }
        echo '<li'.$is_current_item.'><a class="menu__link" href="'.$item->url.'">'.$item->title;
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        echo '</a></li>';
    }
}

// remove width & height attributes from images
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
add_filter( 'post_thumbnail_html', 'remove_img_attr' );

/*function my_custom_body_class_slug($classes) {
    if ( is_page( 'contact' ) )
        $classes[] = 'body-contact';
    return $classes;
}
add_filter('body_class','my_custom_body_class_slug');
*/