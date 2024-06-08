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
          foreach($callouts as $callout): 
          
              $callout = $callout['lct_icon_callout'];
            ?>

              <div class="col-md">

                <?php get_template_part('/template-parts/icon-callout', null, array(
                  'fields' => $callout
                )); ?>

              </div> <?php

          endforeach;
        ?>  
      </div>
    </div>
  </section>
 
<?php endif; ?>