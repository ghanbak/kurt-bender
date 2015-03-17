<?php snippet('header') ?>

<div class="overlay-blur"></div>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('photos') ?>

    <?php snippet('footer') ?>
  </main>
