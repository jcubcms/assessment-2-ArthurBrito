<?php

function bachelors_register_styles(){
    $version = wp_get_theme()->get( "Version" );
    wp_enqueue_style('bachelors_custom_style', get_template_directory_uri() . "/style.css", array("bachelors_bootstrap"), $version, "all");
    wp_enqueue_style('bachelors_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" , array(), "4.5.2", "all");
    wp_enqueue_style('bachelors_fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css", array(), "5.15.1", "all");

}

// During wordpress hook, add this function to be called
add_action('wp_enqueue_scripts', "bachelors_register_styles");


?>