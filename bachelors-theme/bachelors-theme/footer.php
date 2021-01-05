<footer>
    <div class="container">
    <div class="copyright">
        © <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?>. <?php _e('All rights reserved', '3UA'); ?>. <?php _e('This website is proundly to use WordPress', 'sitename'); ?>
    </div>
    <div class="container">
        <?php 
            wp_nav_menu(
                array(
                    "menu" => "footer",
                    "container" => "",
                    "theme_location" => "footer",
                    "items_wrap" => '<ul id="" class="footer-menu">%3$s</ul>'
                )
            );
        ?>
    </div>
</footer>
    <?php
        wp_footer();
    ?>
</body>
</html>
