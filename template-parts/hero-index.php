<?php 

  extract($args);

  $bg = $fields['background_image']['ID'];
  $button = $fields['button'];
?>

<section class="lct-hero">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/hero.css">

  <div class="container">
    <div class="row">

      <div class="col-lg">
        <div class="lct-hero__content lct-section position-relative d-flex align-items-center">
    
          <?php if($bg): ?>
            <figure class="lct-hero__background lct-background-cover">
              <?= wp_get_attachment_image( $bg, 'lct-banner', null, array(
                'class' => 'lct-object-fit bottom'
              )); ?>
            </figure>
          <?php endif; ?>
    
          <aside class="position-relative">

              <div class="container lct-smaller">

                <div class="row">

                  <div class="col-sm d-flex flex-column lct-gap-1 lct-hero__text-content">
                    
                    <span class="lct-hero__subtext display-block text-uppercase">
                      <?= $fields['subtext']; ?>
                    </span>
          
                    <span class="lct-hero__headline">
                      <?= $fields['headline']; ?>
                    </span>
          
                    <?php if($button): 
                      $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                      <div class="lct-hero__buttons">
                        <a href="<?= esc_url($button['url']) ?>" target="<?= esc_attr($link_target) ?>"><?= esc_html($button['title']) ?></a>
                      </div>
                    <?php endif; ?>
    
                  </div>
                </div>

              </div>
    
         
          </aside>
          
        </div>
      </div>

    </div>
  </div>
</section>