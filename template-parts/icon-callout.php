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
<div class="lct-callout d-flex lct-gap-1 <?= $fields['layout'] ?>">

  <?php if($icon_handle): ?>
    <figure class="lct-callout__icon">
      <i class="fas fa-<?= $icon_handle ?>"></i>
    </figure>
  <?php endif; ?>

  <div class="lct-callout__text">

    <?php if($main_text): ?>
      <span class="lct-callout__main-text"><?= $main_text ?><span>
    <?php endif; ?>

    <?php if($sub_text): ?>
      <span class="lct-callout__sub_text"><?= $sub_text ?></span>
    <?php endif; ?>
    
  </div>
    
</div>