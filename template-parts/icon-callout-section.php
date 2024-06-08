<?php 
/**
 * @param array $fields | required
 */
?>

<?php

  extract($args);

  $callouts = $fields['callouts'];

?>


<?php if ($callouts): ?>
  
  <section class="lct-callouts lct-section">
    <div class="container-md">
      <div class="row">
        <?php 

          $callout = $callout['lct_icon_callout'];

          foreach($callouts as $callout) {
            get_template_part('/template-parts/icon-callout', null, array(
              'fields' => $callout
            ));
          }

        ?>  
      </div>
    </div>
  </section>
 
<?php endif; ?>