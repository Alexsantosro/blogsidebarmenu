<?php 

function register_styles () {
    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('fontawesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'register_styles');

?>