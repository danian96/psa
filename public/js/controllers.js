

var psaAppControllers = angular.module('psaAppControllers', []);

psaAppControllers.controller('MainController', ['$scope', '$location', function($scope, $location) {
    $scope.enter = function() {
        $location.path('/selectarea');
        return '/selectarea';
    }
}]);

psaAppControllers.controller('ExamController', ['$scope', '$http', '$location', '$routeParams', function($scope, $http, $location, $routeParams) {

    $scope.exam_id = $routeParams.examID;

    $http.get("http://localhost:8000/api/areaofexam/" + $scope.exam_id).success(function (response) {
        $scope.area_id = response.area_id;

        console.log('area_id')
        console.log($scope.area_id);

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
             //console.log(response);
             console.log('No se obtuvieron las preguntas para el examen');
        });

        $http.get("http://localhost:8000/api/subjectsfromarea/" + $scope.area_id).success(function (response) {
            $scope.materias = response;
        }) .error(function(response) {
             //console.log(response);
             console.log('No se obtuvieron las materias del examen');
        });

    }) .error(function(response) {
        //console.log(response);
        console.log('no se obtuvo el area_id')
    });



    $scope.goToQuestion = function (i) {
        if (i < 0 ||  i > 39) {
            console.log('No se puede mi hijo');
        } else {
            $scope.respuestas[$scope.index] = $scope.selected;
            var first = Math.floor(i / 10);
            var second = i % 10;
            $scope.currentQuestion = $scope.questions[first][second];
            $scope.currentAnswers = $scope.answers[first][second];
            $scope.index = i;
            $scope.selected = $scope.respuestas[$scope.index];
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

    $scope.getSubjectName = function($i) {
        return $scope.materias[$i].name;
    };

    $scope.printSelected = function() {
        console.log($scope.selected);
    }

}]);

psaAppControllers.controller('FinishedController', ['$scope', '$http', function($scope, $http) {

}]);

psaAppControllers.controller('SelectAreaController', ['$scope', '$http', '$location', function($scope, $http, $location) {

       
    $http.get("http://localhost:8000/api/area").success(function (response) {
        $scope.areas = response;
    });

    $scope.enter = function() {
        if ($scope.selected != undefined) {
            $http.get("http://localhost:8000/api/createexam/1/" /*aqui hay que modificar el '1' por candidate_id*/
                + $scope.selected).success(function (response) {
                $scope.exam = response;
                $location.path('/exam/' + $scope.exam.id);
                return '/exam/' + $scope.exam.id;
            }) .error(function (response) {
                console.log('response (erronea)');
                console.log('No se pudo completar correctamente');
            });
        }
    }

}]);
