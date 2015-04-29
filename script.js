$(document).ready(function() {
  $('.wrapperbottom').hide();
  // $('.boom').click(function() {
  //   $('.wrapperbottom').fadeIn('slow');
  // });
  $('.boom').click(function(){
    $('.wrapperbottom').fadeIn('slow');
  });

  $('.lilist').hide();
  $('.li').click(function(){
    $('.lilist').toggle('slow');
  });

  $('.gitlist').hide();
  $('.git').click(function(){
    $('.gitlist').toggle('slow');
  });

  $('.projectlist').hide();
  $('.projects').click(function(){
    $('.projectlist').toggle('slow');
  });

});
