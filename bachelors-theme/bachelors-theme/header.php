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
        <style>

            div.custom-menu-class ul {
            margin:20px 0px 20px 0px;
            list-style-type: none;
            list-style: none;
            list-style-image: none;
            text-align:right;
            }
            div.custom-menu-class li {
                padding: 0px 20px 0px 0px;
                display: inline;
            } 
            div.custom-menu-class a { 
                color:#55555;
            }
        </style>
		<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<img src="<?php echo $image[0]; ?>" alt="">
       <div>
       <span class='custom-logo-text'>The universtiy of the third age</span>
       
      
		<?php
      wp_nav_menu( array( 
      'theme_location' => 'my-custom-menu', 
       'container_class' => 'custom-menu-class' ) ); 
    ?>
        </header>
        </div>
    </body>


</html>
