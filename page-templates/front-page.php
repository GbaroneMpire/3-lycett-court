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
            $fields = get_sub_field('hero_fields');

            var_dump($fields);

            if ($fields) {
              get_template_part('/template-parts/hero', 'index', array(
                'fields' => $fields
              ));
            }

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
