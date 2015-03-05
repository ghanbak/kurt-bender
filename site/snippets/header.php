<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <?php echo css('assets/css/main.css') ?>
  <script type="text/javascript" src="/assets/js/main.js"></script>

</head>
<body>
  <?php snippet('menu') ?>
  <div id="container">
    <header class="header cf" role="banner">
      <div class="header-wrap">
        <a class="nav" href="javascript:void(0)">
          <svg version="1.1" id="nav-svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="0 0 35 27"enable-background="new 0 0 35 27" xml:space="preserve">
            <title>nav</title>
            <desc>Created with Sketch.</desc>
            <g id="nav" sketch:type="MSShapeGroup">
              <rect id="bar-1" x="0" y="0" fill="#DBE0E8" width="35" height="5"/>
              <rect id="bar-2" x="0" y="10" fill="#DBE0E8" width="35" height="5"/>
              <rect id="bar-3" x="0" y="20" fill="#DBE0E8" width="35" height="5"/>
            </g>
            <g id="mobile-nav" sketch:type="MSShapeGroup">
              <rect id="bar-1" x="0" y="0" fill="#34373C" width="35" height="5"/>
              <rect id="bar-2" x="0" y="10" fill="#34373C" width="35" height="5"/>
              <rect id="bar-3" x="0" y="20" fill="#34373C" width="35" height="5"/>
            </g>
          </svg>
        </a>
        <a class="logo" href="<?php echo url() ?>">
          Kurt Bender
        </a>
      </div>
    </header>
