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

  var_dump($gallery);

?>




