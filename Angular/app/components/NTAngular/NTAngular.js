'use strict';

// Declare app level module which depends on views, and components
angular
    .module('NTAngular', [])

    .controller('inputCtrl', function ($scope) {
    })

    .directive('ntInput', function () {
       return {
         restrict: 'E',
           controller: 'inputCtrl',
           scope: true,
           templateUrl: 'components/NTAngular/views/input.html',
           link: function ($scope, element, attrs) {
               $scope.$watch(attrs.itemscope, function (newValue, oldValue) {
                   if ($scope.rcv !== undefined) {
                       $scope.label = eval('$scope.' + attrs.itemscope + '.' + attrs.form + '.elements.' + attrs.name + '.' + 'label');
                       $scope.name = eval('$scope.' + attrs.itemscope + '.' + attrs.form + '.elements.' + attrs.name + '.' + 'name');
                       $scope.type = eval('$scope.' + attrs.itemscope + '.' + attrs.form + '.elements.' + attrs.name + '.' + 'type');
                       $scope.class = eval('$scope.' + attrs.itemscope + '.' + attrs.form + '.elements.' + attrs.name + '.' + 'class');
                       $scope.value = eval('$scope.' + attrs.itemscope + '.' + attrs.form + '.elements.' + attrs.name + '.' + 'value');

                       console.log($scope);
                   }
               });
           }
       };
    });
