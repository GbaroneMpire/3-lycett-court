<?php 
/**
 * @param array $fields | required
 */
?>

<?php extract($args); ?>

<section class="lct-gallery-section lct-section">

  <section class="container-md lct-smaller lct-title-section">
    <div class="row">
      <div class="col">
        <div class="lct-grid">
            <h2><?= $fields['heading'] ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container-md background-dark gallery-section">
    <div class="row">
      <div class="col">
        <?php get_template_part('/template-parts/gallery', null, array(
          'fields' => $fields['lct_gallery']
        )); ?>
      </div>
    </div>
  </section>

</section>
