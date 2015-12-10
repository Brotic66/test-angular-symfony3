/**
 * Created by brice on 09/12/15.
 */
'use strict';

angular.module('myApp')
    .controller('mainCtrl', function ($scope, $http) {
        $scope.test = '';
        $http.get('http://localhost:8000/')
            .then(function (response) {
                $scope.rcv = response.data;
                $scope.test = 'lol';
            });
    });