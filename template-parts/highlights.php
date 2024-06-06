<?php 
/**
 * @param array $fields | required
 */
?>

<?php

  extract($args);
  $slides = $fields['highlight_slides'];
?>

<section class="lct-highlights lct-section">
  <div class="container-md lct-smaller">
    <div class="row">
      <div class="col-md-5">
        <h2 class="lct-highlights__heading lct-main-heading"><?= $fields['heading'] ?></h2>
      </div>
      <div class="col-md-5">
        <div class="lct-highlights__description">
          <p><?= $fields['description'] ?></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <section class="lct-highlight-slides" data-flickity>

          <?php 
            
            foreach($slides as $slide): 
            
                $description = $slide['description'];
                
              ?>

                <div class="lct-highlights__slide position-relative">

                  <div class="lct-highlight-slide__background lct-background-cover">
                    <?= wp_get_attachment_image($slide['background_image']['ID'], null, null, array(
                      'class' => 'lct-object-fit'
                    )); ?>
                  </div>

                  <div class="lct-highlight-slide_text-wrapper text-center">

                    <h4 class="lct-highlight-slide__heading"><?= $slide['heading'] ?></h4>

                    <?php if($description): ?>
                      <div class="lct-highlight-slide__description">
                        <?= $description ?>
                      </div>
                    <?php endif; ?>

                  </div>

                </div>   
              <?php
            endforeach 
          ?>

        </section>
      </div>
    </div>
  </div>
</section>

