<?php /**
 * Testimonial Block Template.
 */
    $main_title = get_field('main_title');
    $testimonial_repeater = get_field('testimonial_repeater');
?>

<div class="block">
  <?php if(!empty($main_title)): ?>
    <h2 class="block-title"><?= $main_title ?></h2>
  <?php endif;?>
  <ul class="block-list">
    <?php if(!empty($testimonial_repeater)): ?>
    <?php foreach($testimonial_repeater as $item): ?>
    <li class="block-item">
      <div class="block-image">
      <?= wp_get_attachment_image( $item['image']['ID'], 'thumbnail' ); ?>
      </div>
      <div class="block-content">
        <?php if(!empty($item['title'])): ?>
        <h3 class="block-item-title"><?= $item['title']; ?></h3>
        <?php endif; ?>
        <?php if(!empty($item['description'])): ?>
        <p class="block-item-text"><?= $item['description']; ?></p>
        <?php endif;?>
        <?php if(!empty($item['button_title'])): ?>
        <a href="<?= ($item['button_link'] != '') ? $item['button_link'] : '#'; ?>" class="block-item-link"><?= $item['button_title']; ?></a>
        <?php endif; ?>
      </div>
    </li>
    <?php endforeach;endif; ?>
  </ul>
</div>