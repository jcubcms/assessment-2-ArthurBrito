<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U3A - Connecting Seniors to life long learning</title>
    <?php
        wp_head();
    ?>
</head>


    <body>
        <header>
		<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<img src="<?php echo $image[0]; ?>" alt="">
       <div>
      
		<?php
      wp_nav_menu( array( 
      'theme_location' => 'my-custom-menu', 
       'container_class' => 'custom-menu-class' ) ); 
    ?>
        </header>
        </div>
    </body>


</html>
