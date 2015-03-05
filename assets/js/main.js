$( document ).ready(function() {
  $('.nav').on('click', function() {
  	$('nav').toggleClass('show');
  	$(this).toggleClass('ex');
  });
});