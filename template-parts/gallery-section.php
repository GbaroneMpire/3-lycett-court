<?php 
/**
 * @param array $fields | required
 */
?>

<?php extract($args); ?>

<section class="lct-gallery-section lct-section lct-bg-accent">

  <section class="container-md lct-smaller lct-title-section">
    <div class="row">
      <div class="col">
        <div class="lct-grid grid-4">
            <h2><?= $fields['heading'] ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery-section container-md bg-dark text-white">
    <div class="row">
      <div class="col">

        <div class="container-md lct-smaller p-5">
          <div class="row">
            <div class="col">
              <?php get_template_part('/template-parts/gallery', null, array(
                'fields' => $fields['lct_gallery']
              )); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</section>
