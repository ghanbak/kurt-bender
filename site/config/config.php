<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PERSONAL-4b0b612a314836d275a4142b4d7b2cfe');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// Rewrite incoming request URI's
c::set('rewrite', true);

// Define some routes
c::set('routes', array(
  array(
    'pattern' => 'downloads/headshot',
    'action'  => function() {
      page('about')
        ->file('kurt_bender_headshot.jpg')
        ->download();
    }
  ),
  array(
    'pattern' => 'downloads/resume',
    'action'  => function() {
      page('about')
        ->file('kurt-bender-resume.pdf')
        ->download();
    }
  ),
));

// Cache the site
// c::set('cache', true);
