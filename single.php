<?php
    get_header();
    b4st_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">

          
        <?php 
        
            $hero = get_field('lct_hero');

            get_template_part('template-parts/hero', 'index', array(
              'fields' => $hero
            ));

            get_template_part('loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_footer();
?>
