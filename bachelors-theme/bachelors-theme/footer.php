<footer>
    <div class="container">
        
        <?php 
            wp_nav_menu(
                array(
                    "menu" => "primary",
                    "container" => "",
                    "theme_location" => "primary",
                    "items_wrap" => '<ul id="" class="footer-menu">%3$s</ul>'
                )
            );
        ?>
    </div>
    <?php
        wp_footer();
    ?>
</footer>
</body>
</html>
