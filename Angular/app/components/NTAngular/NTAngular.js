'use strict';

// Declare app level module which depends on views, and components
angular
    .module('NTAngular', [])
    .service('NTAngularUserService', ['$http', function ($http) {
        this.isGranted = function (role) {
            alert('lol');

            var go = $http({
               method: 'GET',
                url: 'http://localhost/ntangular/userService/isGranted/' + role
            });

            go.then(function (data) {
                return data.data;
            });
        }
    }]);
