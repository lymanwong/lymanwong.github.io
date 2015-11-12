//Soundcloud
// function playSomeSound(genre){
//   SC.get('/tracks', {
//     genres: genre
//   }, function(tracks){
//     var random = Math.floor(Math.random()*49);
//   SC.oEmbed(tracks[random].uri, {auto_play:true}, document.getElementById('player'));
//   });
// }

// window.onload = function(){
//   SC.initialize({
//     client_id: '8252b473b6d9a433882f050f2fa37842'
//   });

//   var menuLinks = document.getElementsByClassName('genre');
//   for(var i=0; i<menuLinks.length; i++) {
//     var menuLink = menuLinks[i];
//     menuLink.onclick = function(e) {
//       e.preventDefault();
//       playSomeSound(menuLink.innerHTML);
//     };
//   };
// };

var app = angular.module('myApp',['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl:'inc/home.php',
      controller: 'HomeController'
    })
    .when('/about', {
      templateUrl:'inc/about.php',
      controller: 'AboutController'
    })
    .when('/blog', {
      templateUrl:'inc/blog.php',
      controller: 'BlogController'
    })
    .when('/contact', {
      templateUrl:'inc/contact.php',
      controller: 'ContactController'
    })
    .when('/projects', {
      templateUrl:'inc/projects.php',
      controller: 'ProjectsController'
    })
    .otherwise({
      redirectTo: '/'
    })
});

angular.module('ngToggle', [])
    .controller('AppCtrl',['$scope', function($scope){
        $scope.custom = true;
        $scope.toggleCustom = function() {
            $scope.custom = $scope.custom === false ? true: false;
        };
}]);

app.controller('HomeController', function($scope){

});

app.controller('AboutController', function($scope){

});

app.controller('BlogController', function($scope){

});

app.controller('ContactController', function($scope){

});

app.controller('ProjectsController', function($scope){

});



//Delasoul
$(document).ready(function() {
  $('.delasoul').hide();
  $('.tellme').click(function(event){
    event.preventDefault();
    $('.delasoul').toggle('slow');
  });
});
