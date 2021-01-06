
<?php
    get_header();
?>
<main class="container">
    <aside class="sidebar">
        <?php if (is_active_sidebar('page-sidebar') ):?>	
            <?php dynamic_sidebar('page-sidebar');?>

        <?php endif;?>	

    </aside>
    <?php
        if(have_posts()) {
            while( have_posts()) {
                the_post();
                the_content();
            }
        }
    ?>
   
</main>

<?php
    get_footer();
?>