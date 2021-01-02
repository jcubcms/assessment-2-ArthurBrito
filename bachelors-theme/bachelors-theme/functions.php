<?php

function bachelors_register_styles(){
    $version = wp_get_theme()->get( "Version" );
    wp_enqueue_style('bachelors_custom_style', get_template_directory_uri() . "/style.css", array("bachelors_bootstrap"), $version, "all");
    wp_enqueue_style('bachelors_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" , array(), "4.5.2", "all");
    wp_enqueue_style('bachelors_fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css", array(), "5.15.1", "all");

}

// During wordpress hook, add this function to be called
add_action('wp_enqueue_scripts', "bachelors_register_styles");

function bachelors_register_scripts(){    
    wp_enqueue_script("bachelors_jquery", "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
    wp_enqueue_script("bachelors_bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array("bachelors-jquery"), '4.5.2', true);
    wp_enqueue_script("bachelors_custom_js", get_template_directory_uri() . "/assets/js/main.js", array("bachelors-jquery"), '0.0.1', true);

}

// During wordpress hook, add this function to be called
add_action('wp_enqueue_scripts', "bachelors_register_scripts");

?>