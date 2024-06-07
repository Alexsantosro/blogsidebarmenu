<?php

//-----------------------------------------Register dynamic menu--------------------------------------------------//

function menus()
{
    $locations = array(
        'primary' => "Desktop primary menu",
        'footer' => "Footer menu"

    );

    register_nav_menus($locations);
}
    add_action('init', 'menus');

//-------------------------------------------Add theme support------------------------------------------------//

function frog_theme_support()
{
    //Add dinamyc title tag
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'frog_theme_support');

//----------------------------------------------Add CSS styles---------------------------------------------//

function register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css", array('bootstrap'), $version, 'all');
    wp_enqueue_style('bootstrap', "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), $version, 'all');
    wp_enqueue_style('fontawesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

//--------------------------------------------Add javascript-----------------------------------------------//

function register_scripts()
{
    wp_enqueue_script('jquery', "//code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('popper', "//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('bootstrap', "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('mainscript', get_template_directory_uri() . "/assets/js/main.js", array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');


//------------------------------------------------------------------------------------------------------//


?>