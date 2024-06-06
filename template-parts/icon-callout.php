<?php 
/**
 * @param array $fields | required
 */
?>

<?php 
  extract($args);

  $icon_handle = $fields['icon_handle'];
  $main_text = $fields['main_text'];
  $sub_text = $fields['sub_text'];

?>
<div class="lct-callout d-flex <?= $fields['layout']['value'] ?> lct-gap-2 align-items-center pb-4 border-bottom">

  <?php if($icon_handle): ?>
    <figure class="lct-callout__icon">
      <i class="fas fa-<?= $icon_handle ?>"></i>
    </figure>
  <?php endif; ?>

  <div class="lct-callout__text d-flex flex-column lct-gap-1">
    <?php if($sub_text): ?>
      <span class="lct-callout__sub_text"><?= $sub_text ?></span>
    <?php endif; ?>

    <?php if($main_text): ?>
      <span class="lct-callout__main-text"><?= $main_text ?></span>
    <?php endif; ?>
  </div>
    
</div>