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

        if ($layout == 'hero') {

          $fields = get_sub_field('hero')['lct_hero'];

          if ($fields) {
            get_template_part('/template-parts/hero', 'index', array(
              'fields' => $fields
            ));
          }

        }

        if ($layout == 'side-by-side') {


          $field_group = get_sub_field('side-by-side')['lct_side_by_side'];

          if ($field_group) {
            get_template_part( '/template-parts/side-by-side', null, array(
              'field_group' => $field_group
            ));
          }
   
  
        }

      endwhile;

    endif;
  ?>
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
