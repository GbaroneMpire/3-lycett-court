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

<div class="lct-grid">

  <?php if($filters): ?>
    <section class="lct-filters">
      <?php foreach($filters as $filters): ?>
        <button data-filter=".<?= $filter['value'] ?>"><?= $filter['label'] ?></button>
      <?php endforeach; ?>        
    </section>
  <?php endif; ?>

  <?php if($description): ?>
    <section class="lct-gallery__description"><?= $description ?></section>
  <?php endif; ?>

  <?php if($gallery): ?>
    <section class="lct-gallery">
      <?php foreach($gallery_images as $image): ?>
          <figure class="lct-gallery-image">
            <?= wp_get_attachment_image( $image['ID'], null, null, array(
              'class' => 'lct-object-fit'
            )); ?>
          </figure>
      <?php endforeach ?>
    </section>
  <?php endif; ?>
</div>




