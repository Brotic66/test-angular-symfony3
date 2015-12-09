/**
 * Created by brice on 09/12/15.
 */
'use strict';

angular.module('myApp')
    .controller('MainCtrl', function ($scope, $http) {
       $scope.test = "lol";
        $http.get('http://localhost:8000/test')
            .then(function (response) {
                $scope.data = response.data;
            });
    });