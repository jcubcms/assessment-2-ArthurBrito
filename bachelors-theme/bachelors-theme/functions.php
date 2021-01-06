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

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

// Sidebars
function my_sidebars()
{
  register_sidebar(
    array(

          'name' => 'Page Sidebars',
          'id' => 'page-sidebar',
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>'
    )
  );

  register_sidebar(
    array(

          'name' => 'Blog Sidebars',
          'id' => 'blog-sidebar',
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>'
    )
  );
}

add_action('widgets_init','my_sidebars');
function bachelors_menus() {
  $locations = array(
    'primary' => "Desktop Left Menu",
    'footer' => "Footer Menu Items"
  );

  register_nav_menus($locations);
}

add_action("init", "bachelors_menus");

function bachelors_theme_support() {
  add_theme_support("title-tag");
}

add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'custom-logo', array(
	'height'      => 20,
	'width'       => 50,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support("after_setup_theme", "bachelors_theme_support");
?>