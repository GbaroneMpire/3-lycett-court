<?php
    get_header(); 
    b4st_main_before();

    /* Template Name: Front Page */
?>

<main id="main">
  <?php 
    if ( have_rows('lct_index_sections') ):

      while( have_rows('lct_index_sections')) : the_row();

        $layout = get_row_layout();

        switch ($layout) {
          case 'hero':
            get_template_part('/template-parts/hero', 'index');
            break;
        }

      endwhile;
      
    endif;
  ?>
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
