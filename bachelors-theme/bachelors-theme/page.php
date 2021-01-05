
<?php
    get_header();
?>
<main class="container">

    <div class="title-wrapper">
        <h2>
        <?php
            the_title();
        ?>
        </h2>
    </div>
    <div class="content">
    <?php
        if(have_posts()) {
            while( have_posts()) {
                the_post();
                the_content();
            }
        }
    ?>
   </div>
</main>

<?php
    get_footer();
?>