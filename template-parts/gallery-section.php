<?php 
/**
 * @param array $fields | required
 */
?>

<?php 

  extract($args);
 
  $gallery_group = $fields['lct_gallery'];
  $gallery = $gallery_group['gallery'];
  $filters = $gallery_group['filters'];
?>


Gallery : <br> <?= lct_test($gallery) ?>
Filter : <br> <?= lct_test($filters) ?>