/**
 * Created by root on 12-11-16.
 */

var Psa = angular.module('Psa', ['ngRoute']);

Psa.constant('constants', {
    API_URL: 'http://localhost:8000/api/'
});

Psa.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl : 'app/home/home.template.html',
            controller  : 'homeController'
        })

        .when('/misionvision', {
            templateUrl : 'app/misionvision/misionvision.template.html',
            controller  : 'misionvisionController'
        })
        .when('/presentacion', {
            templateUrl : 'app/presentacion/presentacion.template.html',
        })

        .otherwise({
            redirectTo: '/'
        });


});
angular.bootstrap(document.getElementById('Psa'), ['Psa']);