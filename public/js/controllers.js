

var psaAppControllers = angular.module('psaAppControllers', ['ngCookies', 'ngStorage']);

psaAppControllers.controller('MainController', ['$scope', '$location', '$http', function($scope, $location, $http) {
    $scope.enter = function() {
        $location.path('/selectarea');
        return '/selectarea';
    };
    
    $scope.saveFaculties = function() {
        $http.get("http://bibosi.uagrm.edu.bo/simulador/oferta/facultades").success(function (response) {
            var faculties = response;
            var faculty;
            for (var i = 0; i < faculties.length; i++) {
                faculty = faculties[i];
                $http.post("http://localhost:8000/api/storefaculty/" + faculty.id + "/" + faculty.id_area + "/"  + faculty.nombre);
            }
        });
    };
    
    $scope.saveSubjects = function() {
        $http.get('http://localhost:8000/api/area').success(function (response) {
            var areas = response;
            var area;
            for (var i = 0; i < areas.length; i++) {
                area = areas[i];
                $http.get('http://bibosi.uagrm.edu.bo/simulador/oferta/materias/' + area.id).success(function (respuesta) {
                    var subjects = respuesta;
                    var subject;
                    for (var j = 0; j < subjects.length; j++) {
                        subject = subjects[j];
                        $http.post("http://localhost:8000/api/storesubject/" + subject.id + "/" + subject.id_area
                            + '/' + subject.sigla + '/' + subject.nombre);
                    }
                });
            }
        });
    }

    $scope.saveQuestions = function() {
        $http.get('http://localhost:8000/api/areasubject').success(function (response) {
            var array = response;
            var arsub;
            //for (var i = 0; i < array.length; i++) {
                arsub = array[0];
                console.log(arsub);
                $http.get('http://bibosi.uagrm.edu.bo/simulador/prueba/practica/' + arsub.subject_id + '/20').success(function (respuesta) {
                    var questions = respuesta;
                    var question;
                    for (var j = 0; j < questions.length; j++) {
                        question = questions[j];
                        $http.post('http://localhost:8000/api/storequestion/' + question.id + '/' + question.texto + '/'
                            + arsub.area_id + '/' + question.id_materia).success(function (cualquierCosa) {
                            var options = question.opciones;
                            var option;
                            for (var k = 0; k < options.length; k++) {
                                option = options[k];
                                $http.post('http://localhost:8000/api/storeoption/' + option.id + '/' + option.id_pregunta + '/' +
                                    option.texto + '/' + option.correcta);
                            }
                        })
                    }
                });
            //}
        })
    }
    
}]);

psaAppControllers.controller('ExamController', ['$scope', '$http', '$location', '$routeParams', '$cookies', '$sessionStorage',
function($scope, $http, $location, $routeParams, $cookies, $sessionStorage) {

    /*
    $scope
    - exam_id
    - area_id
    - requestResponse
    - questions
    - answers
    - currentQuestions
    - currentAnswers
    - respuestas
    - selected
    - index
    - materias

    $cookies
    - exam_id
    - refreshed

    $sessionStorage
     - exam_id
     - area_id
     - requestResponse
     - questions
     - answers
     - currentQuestions
     - currentAnswers
     - respuestas
     - selected
     - index
     - materias
     */

    $scope.saveAll = function() {
        $sessionStorage.exam_id = $scope.exam_id;
        $sessionStorage.area_id = $scope.area_id;
        $sessionStorage.requestResponse = $scope.requestResponse;
        $sessionStorage.questions = $scope.questions;
        $sessionStorage.answers = $scope.answers;
        $sessionStorage.currentQuestion = $scope.currentQuestion;
        $sessionStorage.currentAnswers = $scope.currentAnswers;
        $sessionStorage.respuestas = $scope.respuestas;
        $sessionStorage.selected = $scope.selected;
        $sessionStorage.index = $scope.index;
        $sessionStorage.materias = $scope.materias;
    };

    $scope.loadAll = function() {
        $scope.exam_id = $sessionStorage.exam_id;
        $scope.area_id = $sessionStorage.area_id;
        $scope.requestResponse = $sessionStorage.requestResponse;
        $scope.questions = $sessionStorage.questions;
        $scope.answers = $sessionStorage.answers;
        $scope.currentQuestion = $sessionStorage.currentQuestion;
        $scope.currentAnswers = $sessionStorage.currentAnswers;
        $scope.respuestas = $sessionStorage.respuestas;
        $scope.selected = $sessionStorage.selected;
        $scope.index = $sessionStorage.index;
        $scope.initialTime = $sessionStorage.initialTime;
        $scope.materias = $sessionStorage.materias;
    };

    $scope.exam_id = $routeParams.examID;

    if ($sessionStorage.exam_id == undefined) {
        console.log('Es el primer examen, vamos a seteaarlo');
        $sessionStorage.exam_id = $scope.exam_id;
        console.log('examen en curso: ' + $sessionStorage.exam_id);
    } else {
        if ($sessionStorage.exam_id != $scope.exam_id) {
            console.log('Ya hay otro examen en curso, el ' + $sessionStorage.exam_id);
            $location.path('/');
        } else {
            console.log('examen en curso: ' + $sessionStorage.exam_id);
        }
    }

    if ($sessionStorage.refreshed == 'true') {
        console.log('refreshed');
        $scope.loadAll();
        $scope.index = $sessionStorage.index;
        $scope.currentQuestion = $sessionStorage.currentQuestion;
        $scope.currentAnswers = $sessionStorage.currentAnswers;
        $scope.selected = $scope.respuestas[$scope.index];
        console.log($scope.index);
        console.log($sessionStorage.index);
    } else {
        $sessionStorage.refreshed = 'true';
        console.log('first time here');

        $http.get("http://localhost:8000/api/areaofexam/" + $scope.exam_id).success(function (response) {
            $scope.area_id = response.area_id;
            $sessionStorage.area_id = $scope.area_id;

            $http.get("http://localhost:8000/api/questionsforexam/" + $scope.area_id).success(function (response) {
                $scope.requestResponse = response;
                $sessionStorage.requestResponse = $scope.requestResponse;

                $sessionStorage.requestResponse = $scope.requestResponse;

                $scope.questions = $scope.requestResponse[0];
                $sessionStorage.questions = $scope.questions;

                $scope.answers = $scope.requestResponse[1];
                $sessionStorage.answers = $scope.answers;

                $scope.currentQuestion = $scope.questions[0][0];
                $sessionStorage.currentQuestion = $scope.currentQuestion;

                $scope.currentAnswers = $scope.answers[0][0];
                $sessionStorage.currentAnswers = $scope.currentAnswers;

                $scope.respuestas = [];
                for (var i = 0; i < 40; i++) {
                    $scope.respuestas[i] = 0;
                }
                $sessionStorage.respuestas = $scope.respuestas;

                $scope.selected = 0;
                $sessionStorage.selected = $scope.selected;

                $scope.index = 0;
                $sessionStorage.index = $scope.index;

                $scope.initialTime = new Date().getTime();
                $sessionStorage.initialTime = $scope.initialTime;
            }) .error(function(response) {
                console.log('No se obtuvieron las preguntas para el examen');
            });

            $http.get("http://localhost:8000/api/subjectsfromarea/" + $scope.area_id).success(function (response) {
                $scope.materias = response;
                $sessionStorage.materias = $scope.materias;
            }) .error(function(response) {
                console.log('No se obtuvieron las materias del examen');
            });
        }) .error(function(response) {
            console.log('no se obtuvo el area_id')
        });
    }

    $scope.goToQuestion = function (i) {
        if (i < 0 ||  i > 39) {
            $scope.respuestas[$scope.index] = $scope.selected;
            console.log('No se puede mi hijo');
        } else {
            $scope.respuestas[$scope.index] = $scope.selected;
            var first = Math.floor(i / 10);
            var second = i % 10;
            $scope.currentQuestion = $scope.questions[first][second];
            $scope.currentAnswers = $scope.answers[first][second];
            $scope.index = i;
            $sessionStorage.index = $scope.index;
            $sessionStorage.currentAnswers = $scope.currentAnswers;
            $sessionStorage.currentQuestion = $scope.currentQuestion;
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

    $scope.getQuestionId = function(i) {
        var first = Math.floor(i / 10);
        var second = i % 10;
        var x = $scope.questions[first][second].id;
        return x;
    };

    $scope.finishExam = function() {
        var d = new Date();
        var currentTime = d.getTime();
        if (currentTime > ($scope.initialTime + 3600000)) {
            $scope.saveAnswers();
            $sessionStorage.$reset();
            $location.path("/finished/" + $scope.exam_id);
        } else {
            var confirmation = confirm("Are you sure you want to finish the exam?");
            if (confirmation) {
                $scope.saveAnswers();
                $sessionStorage.$reset();
                $location.path("/finished/" + $scope.exam_id);
            }
        }
    };

    $scope.saveAnswers = function() {
        $scope.respuestas[$scope.index] = $scope.selected;
        for (var i = 0; i < 40; i++) {
            $http.post("http://localhost:8000/api/storeexamanswer/" + $scope.exam_id
                + "/" + $scope.getQuestionId(i) + "/" + $scope.respuestas[i]);
        }
    };

}]);

psaAppControllers.controller('FinishedController', ['$scope', '$http', '$location', '$routeParams', function($scope, $http, $location,  $routeParams) {

    $scope.exam_id = $routeParams.examID;
    
    $scope.cantidadDeAciertos = function() {
        var c = 0;
        for (var i = 0; i < $scope.answers.length; i++) {
            if ($scope.answers[i] == 1) {
                c++;
            }
        }
        return c;
    };
    
    $http.get("http://localhost:8000/api/answersofexam/" + $scope.exam_id).success(function (response) {
        $scope.answers = response;
        console.log($scope.answers);
        $scope.aciertos = $scope.cantidadDeAciertos();
        $http.get("http://localhost:8000/api/areaofexam/" + $scope.exam_id).success(function (response) {
            $scope.area_id = response.area_id;
            $http.get("http://localhost:8000/api/subjectsfromarea/" + $scope.area_id).success(function (response) {
                $scope.materias = response;
            }) .error(function(response) {
                console.log('No se obtuvieron las materias del examen');
            });
        }).error(function (response) {
            console.log("No se obtuvieron las materias");
        });
    }).error(function (response) {
        console.log("No se obtuvieron las respuestas");
    });

    $scope.getSubjectName = function($i) {
        return $scope.materias[$i].name;
    };

    $scope.finish = function () {
        $location.path('/');
    };

    $scope.isDisabled = function (index) {
        return $scope.answers[index] == 0;
    }

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

