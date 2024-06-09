<?php 
/**
 * @param array $fields | required
 */
?>

<?php 
  extract($args);
  $filters = $fields['filters'];
  $description = $fields['description'];
  $gallery_images = $fields['gallery'];
?>

<div class="lct-gallery-grid lct-grid py-5 lct-gap-3">

  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/theme/css/gallery.css">  

  <?php if($filters): ?>
    <section class="lct-filters align-items-start d-flex flex-column lct-gap-2 p-4 p-lg-0">
      <?php foreach($filters as $filter): ?>
        <button class="text-white text-uppercase" data-filter=".<?= $filter['value'] ?>"><?= $filter['label'] ?></button>
      <?php endforeach; ?>        
    </section>
  <?php endif; ?>

  <?php if($description): ?>
    <section class="lct-gallery__description p-4 p-lg-0"><?= $description ?></section>
  <?php endif; ?>

  <?php if($gallery_images): ?>
    <section class="lct-gallery position-relative">
      <div class="lct-inner d-flex flex-column">
        <div class="lct-gallery-track lct-gap-3 lct-grid grid-2 w-100">
          <?php foreach($gallery_images as $image): ?>
              <figure class="lct-gallery-image">
                <?= wp_get_attachment_image( $image['ID'], null, null, array(
                  'class' => 'lct-object-fit'
                )); ?>
              </figure>
          <?php endforeach ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</div>




