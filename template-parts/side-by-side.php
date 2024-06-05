<?php 
/**
 * @param array $field_group | required
 */
?>

<?php 
    extract($args);
    $callouts = $field_group['callouts'];
    $info_links = $field_group['info_links']
?>

<section class="lct-side-by-side">

  <div class="container-lg">

    <div class="row">

      <div class="col-lg d-flex">

        <section class="lct-side-by-side__content-wrapper">

          <div class="lct-side-by-side__content">
            <?= $field_group['content'] ?>  
          </div>

          <?php if($callouts): ?>
            <section class="lct-side-by-side__callout-items">
              <?php 
                foreach ($callouts as $callout) {

                  $callout = $callout['callout'];

                  get_template_part('template-parts/icon-callout', null, array(
                    $field => $callout
                  ));
                }
              ?>
            </section>
          <?php endif; ?>

          <?php if($info_links): ?>
            <section class="lct-side-by-side__info_links">
              <?php foreach ($info_links as $info_link): 
                  $file_source = $info_link['file_source'];
                  $text = $info_link['text'];
                ?>

                  <a href="<?= esc_url($file_source['url']) ?>" class="d-flex">
                    <i class="fa-regular fa-file-pdf"></i>
                    <span class="lct-info-link__text"><?= $text ?></span>
                  </a>
              
              <?php endforeach; ?>
              </section>
          <?php endif; ?>

        </section>

        <section class="lct-side-by-side__image">
          <?= wp_get_attachment_image($field_group['image']['ID'], null, null, array(
            'class' => 'lct-object-fit',
            'loading' => 'lazy'
          )); ?>
        </section>

      </div>
    </div>
  </div>

  

</section>