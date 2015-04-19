$( document ).ready(function() {
  
  $('.photo-list .photo').colorbox({maxWidth:"85%", maxHeight:"90%"});

  $('.nav').on('click', function() {
  	$('nav').toggleClass('show');
  	$(this).toggleClass('ex');
  });

  $('.menu a').on('click', function() {
    $('nav').removeClass('show');
    $('.nav').removeClass('ex');
  });

  var area = $('#top');
  var range = 300;
  $(window).on('scroll', function () {
    var st = $(this).scrollTop();
    area.each(function () {
      var offset = $(this).offset().top;
      var height = area.outerHeight();
      offset = offset + height / 2;
      $('.overlay').css({ 'opacity': 1 - (st - offset + range) / range });
      $('#top img').css({ 'opacity': 1 - (st - offset + range) / range });
    });
  });

  $('a[href^="http://"]').each(function() {
    $(this).attr('target', '_blank');
  });

  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
});