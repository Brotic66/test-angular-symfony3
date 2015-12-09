'use strict';

// Declare app level module which depends on views, and components
angular
    .module('myApp', [
  'ngRoute'
])
    .config(['$routeProvider', function($routeProvider) {
  $routeProvider
      .when('/', {
        templateUrl: 'views/view1.html',
        controller: 'MainCtrl',
      })
      .otherwise({redirectTo: '/view1'});
}]);