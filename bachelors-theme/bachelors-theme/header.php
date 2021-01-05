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
            <div class="container">
                <nav>
                <img id="logo" src="/wp-content/themes/bachelors-theme/assets/images/logo.png"/>
                <?php 
                    wp_nav_menu(
                        array(
                            "menu" => "primary",
                            "container" => "",
                            "theme_location" => "primary",
                            "items_wrap" => '<ul id="" class="nav-menu">%3$s</ul>'
                        )
                    );
                ?>
                </nav>
            </div>
        </header>
 