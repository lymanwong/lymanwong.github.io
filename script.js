function playSomeSound(genre){
  SC.get('/tracks', {
    genres: genre
  }, function(tracks){
    var random = Math.floor(Math.random()*49);
  SC.oEmbed(tracks[random].uri, {auto_play:true}, document.getElementById('player'));
  });
}

$(document).ready(function() {
  $('.wrapperbottom').hide();
  $('.boom').click(function(){
    $('.wrapperbottom').toggle('slow');
  });

  $('.dbcpic').hide();
  $('.dbc').click(function(){
    $('.dbcpic').toggle('slow');
  });

  $('.lilist').hide();
  $('.li').click(function(){
    $('.lilist').toggle('slow');
  });

  $('.gitlist').hide();
  $('.git').click(function(){
    $('.gitlist').toggle('slow');
  });

  $('.bloglist').hide();
  $('.blog').click(function(){
    $('.bloglist').toggle('slow');
  });

  $('.projectlist').hide();
  $('.projects').click(function(){
    $('.projectlist').toggle('slow');
  });

});

window.onload = function(){
  SC.initialize({
    client_id: '8252b473b6d9a433882f050f2fa37842'
  });

  var menuLinks = document.getElementsByClassName('genre');
  for(var i=0; i<menuLinks.length; i++) {
    var menuLink = menuLinks[i];
    menuLink.onclick = function(e) {
      e.preventDefault();
      playSomeSound(menuLink.innerHTML);
    };
  };
};
