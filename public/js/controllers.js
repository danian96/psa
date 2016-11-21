

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
        console.log(response);
        $scope.requestResponse = response;
        //console.log($scope.requestResponse);

        $scope.questions = $scope.requestResponse[0];
        console.log($scope.questions);
        //console.log($scope.questions);
        $scope.answers = $scope.requestResponse[1];
        console.log($scope.answers);

        var x = $scope.questions[0];
        console.log('preguntas de la primera materia');
        console.log(x);
        $scope.currentQuestion = x[0];

        $scope.currentAnswers = $scope.answers[0][0];
        $scope.index = 0;

        console.log($scope.currentQuestion);
        console.log($scope.currentQuestion.text);
        $scope.questionText = $scope.currentQuestion.text;
        console.log($scope.questionText);

    }) .error(function(response) {
        console.log(response);
        console.log('No se obtuvieron las preguntas para el examen');
    });

    $http.get("http://localhost:8000/api/subjectsfromarea/" + $scope.area_id).success(function (response) {
        $scope.materias = response;
        //console.log($scope.materias[2].name);
    }) .error(function(response) {
        console.log('No se obtuvieron las materias del examen');
    });

    $scope.goToQuestion = function ($i) {
        if ($index < 0 ||  $index > 39) {
            console.log('No se puede mi hijo');
        } else {
            $scope.currentQuestion = $scope.questions[$i / 10][$i % 10];
            $scope.currentAnswers = $scope.answers[$i / 10][$i % 10];
            $scope.index = $i;
        }
    }

    $scope.nextQuestion = function () {
        var $i = $scope.index + 1;
        if ($i < 0 ||  $i > 39) {
            console.log('No se puede mi hijo');
        } else {
            $scope.currentQuestion = $scope.questions[$i / 10][$i % 10];
            $scope.currentAnswers = $scope.answers[$i / 10][$i % 10];
            $scope.index = $i;
        }
    }

    $scope.lastQuestion = function () {
        var $i = $scope.index - 1;
        if ($i < 0 ||  $i > 39) {
            console.log('No se puede mi hijo');
        } else {
            $scope.currentQuestion = $scope.questions[$i / 10][$i % 10];
            $scope.currentAnswers = $scope.answers[$i / 10][$i % 10];
            $scope.index = $i;
        }
    }

    $scope.getQuestionText = function() {
        return $scope.currentQuestion.text;
    }

}]);

psaAppControllers.controller('FinishedController', ['$scope', '$http', function($scope, $http) {

}]);

psaAppControllers.controller('SelectAreaController', ['$scope', '$http', '$location', function($scope, $http, $location) {

    $http.get("http://localhost:8000/api/areas").success(function (response) {
        $scope.areas = response;
        console.log(response);
    });

    $scope.enter = function() {
        console.log($scope.selected);
        var e = '/exam/';
        e +=  $scope.selected;
        console.log(e);
        console.log($scope.selected);
        if ($scope.selected != undefined) {
            $location.path(e);
            return '/exam/' + $scope.selected;
        }

    }

}]);
