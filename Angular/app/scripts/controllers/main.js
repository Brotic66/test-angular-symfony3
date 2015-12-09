/**
 * Created by brice on 09/12/15.
 */
'use strict';

angular.module('myApp')
    .controller('mainCtrl', function ($scope, $http) {
        $http.get('http://localhost:8000/')
            .then(function (response) {
                $scope.rcv = response.data;
            });
    });