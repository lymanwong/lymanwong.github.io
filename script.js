$(document).ready(function() {
  $('.wrapperbottom').hide();
  // $('.boom').click(function() {
  //   $('.wrapperbottom').fadeIn('slow');
  // });
$('.boom').mouseenter(function(){
  $('.wrapperbottom').fadeIn('slow');
});
$('.boom').mouseleave(function(){
  $('.wrapperbottom').fadeOut('slow');
});
});
