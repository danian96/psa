

var psaAppControllers = angular.module('psaAppControllers', []);

psaAppControllers.controller('MainController', ['$scope', '$location', function($scope, $location) {
    $scope.enter = function() {
        $location.path('/selectarea');
        return '/selectarea';
    }
}]);

psaAppControllers.controller('ExamController', ['$scope', '$http', '$location', '$routeParams', function($scope, $http, $location, $routeParams) {

    $scope.area_id = $routeParams.areaID;

    $http.get("http://localhost:8000/api/questionsforexam/" + $scope.area_id).success(function (response) {
        $scope.requestResponse = response;

        $scope.questions = $scope.requestResponse[0];
        $scope.answers = $scope.requestResponse[1];

        console.log($scope.answers);

        $scope.currentQuestion = $scope.questions[0][0];
        $scope.currentAnswers = $scope.answers[0][0];

        $scope.respuestas = [];
        for (var i = 0; i < 40; i++) {
            $scope.respuestas[i] = undefined;
        }

        $scope.selected = undefined;

        $scope.index = 0;
    }) .error(function(response) {
        console.log(response);
        console.log('No se obtuvieron las preguntas para el examen');
    });

    $http.get("http://localhost:8000/api/subjectsfromarea/" + $scope.area_id).success(function (response) {
        $scope.materias = response;
    }) .error(function(response) {
        console.log(response);
        console.log('No se obtuvieron las materias del examen');
    });

    $scope.goToQuestion = function (i) {
        if (i < 0 ||  i > 39) {
            console.log('No se puede mi hijo');
        } else {
            var first = Math.floor(i / 10);
            var second = i % 10;
            $scope.currentQuestion = $scope.questions[first][second];
            $scope.currentAnswers = $scope.answers[first][second];
            $scope.index = i;
            console.log($scope.index);
            console.log($scope.currentAnswers);
        }
    };

    $scope.nextQuestion = function () {
        var $i = $scope.index + 1;
        $scope.goToQuestion($i);
    };

    $scope.previousQuestion = function () {
        var $i = $scope.index - 1;
        $scope.goToQuestion($i);
    };

    $scope.print = function() {
        console.log($scope.selected);
    }

}]);

psaAppControllers.controller('FinishedController', ['$scope', '$http', function($scope, $http) {

}]);

psaAppControllers.controller('SelectAreaController', ['$scope', '$http', '$location', function($scope, $http, $location) {

    $http.get("http://localhost:8000/api/area").success(function (response) {
        console.log(response);
        $scope.areas = response;
    });

    $scope.enter = function() {
        if ($scope.selected != undefined) {
            $location.path('/exam/' + $scope.selected);
            return '/exam/' + $scope.selected;
        }
    }

}]);
