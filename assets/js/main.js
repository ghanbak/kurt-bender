$( document ).ready(function() {
  $('.nav').on('click', function() {
  	$('nav').toggleClass('show');
  	$(this).toggleClass('ex');
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
});