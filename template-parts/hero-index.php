<?php 

  extract($args);

  $bg = $fields['background_image']['ID'];
  $button = $fields['button'];
?>

<section class="lct-hero">
  <div class="container">

    <div class="lct-hero__content lct-section">

      <?php if($bg): ?>
        <figure class="lct-hero__background lct-background-cover">
          <?php wp_get_attachment_image( $bg, 'lct-banner', null, array(
            'class' => 'lct-object-fit'
          )); ?>
        </figure>
      <?php endif; ?>

      <aside class="lct-hero__text-content">

          <span class="lct-hero__subtext display-block">
            <?= $fields['subtext']; ?>
          </span>

          <span>
            <?= $fields['headline']; ?>
          </span>

          <?php if($button): 
           // $link_target = $button['target'] ? $button['target'] : '_self';
          ?>
              <a href="<?= esc_url($button['url']) ?>" target="<?= esc_attr($link_target) ?>"><?= esc_html($button['title']) ?></a>
          <?php endif; ?>

      </aside>
      
    </div>

  </div>
</section>