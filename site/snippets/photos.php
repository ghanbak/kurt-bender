<h2>Latest photos</h2>

<ul class="teaser cf">
  <?php foreach(page('photos')->children()->visible() as $photo): ?>
  <li>
    <?php if($image = $photo->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $photo->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $photo->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
