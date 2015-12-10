'use strict';

// Declare app level module which depends on views, and components
angular
    .module('myApp', [
  'ngRoute',
        'NTAngular'
])
    .config(['$routeProvider', function($routeProvider) {
  $routeProvider
      .when('/', {
        templateUrl: 'views/view1.html',
        controller: 'mainCtrl',
      })
      .otherwise({redirectTo: '/'});
}]);
