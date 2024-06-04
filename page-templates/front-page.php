<?php
    get_header(); 
    b4st_main_before();

    /* Template Name: Front Page */
?>

<main id="main">
  <?php get_template_part('/template-parts/index', 'hero'); ?>
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
