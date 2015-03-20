<section id="photos">
  <h2>Latest photos</h2>

  <ul class="photo-list cf odd">
    <?php $n = 0; foreach(page('photos')->children()->visible() as $photo): $n++; ?>
    <?php if($n%2 == 1): ?>
    <li>
      <?php if($image = $photo->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $photo->url() ?>">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $photo->title()->html() ?>" >
      </a>
      <?php endif ?>
    </li>
    <?php endif ?>
    <?php endforeach ?>
  </ul>
  <ul class="photo-list cf even">
    <?php $n = 0; foreach(page('photos')->children()->visible() as $photo): $n++; ?>
    <?php if($n%2 == 0): ?>
    <li>
      <?php if($image = $photo->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $photo->url() ?>">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $photo->title()->html() ?>" >
      </a>
      <?php endif ?>
    </li>
    <?php endif ?>
    <?php endforeach ?>
  </ul>
</section>
