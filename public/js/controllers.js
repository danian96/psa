

var psaAppControllers = angular.module('psaAppControllers', []);

psaAppControllers.controller('MainController', ['$scope', '$location', function($scope, $location) {
    $scope.enter = function() {
        $location.path('/selectarea');
        return '/selectarea';
    }
}]);

psaAppControllers.controller('ExamController', ['$scope', '$http', function($scope, $http) {

    $http.get("http://localhost:8000/api/questionsforexam").success(function (response) {
        $scope.areas = response;
        console.log(response);
    });

}]);

psaAppControllers.controller('FinishedController', ['$scope', '$http', function($scope, $http) {

}]);

psaAppControllers.controller('SelectAreaController', ['$scope', '$http', '$location', function($scope, $http, $location) {


    $scope.refresh = function(){
        //$scope.areas = Restangular.all('api/areas');
        $scope.areas = $http.get("http://localhost:8000/api/areas");
    }

    $http.get("http://localhost:8000/api/areas").success(function (response) {
        $scope.areas = response;
        console.log(response);
    });

    $scope.enter = function() {
        $location.path('/exam');
        return '/exam';
    }

    $scope.areas = [];

    $scope.refresh();

}]);
