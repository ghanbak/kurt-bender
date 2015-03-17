<?php snippet('header') ?>

<div class="overlay"></div>
<div class="overlay-blur"></div>

<section id="top">
  <img src="/assets/images/scroll.svg" alt="scroll down" title="scroll down" />
</section>

<main id="home" class="main" role="main">

  <?php

  foreach($pages->visible() as $section) {
    snippet($section->uid(), array('data' => $section));
  }

  ?>

  <?php snippet('footer') ?>

</main>
