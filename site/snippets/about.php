<section id="about-me">
  <div class="profile">
  	<div class="img-wrap">
  	  <img src="<?php echo $data->images()->first()->url() ?>" alt="<?php echo $data->images()->first()->name() ?>" title="<?php echo $data->images()->first()->name() ?>">
  	</div>
  	<div class="downloads">
	  <a class="btn" href="/downloads/headshot">Download Headshot</a>
	  <a class="btn" href="/downloads/resume">Download Resume</a>
	</div>
  </div>
  <div class="content">
  	<?php echo $data->text()->kirbytext() ?>
  </div>
</section>
