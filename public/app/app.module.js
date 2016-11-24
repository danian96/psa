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
        .when('/presentacion', {
            templateUrl : 'app/presentacion/presentacion.template.html',
        })
        .when('/reshistorica', {
            templateUrl : 'app/reshistorica/reshistorica.template.html',
        })
        .when('/misionvision', {
            templateUrl : 'app/misionvision/misionvision.template.html',
        })
        .when('/himno', {
            templateUrl : 'app/himno/himno.template.html',
        })
        .when('/infopsa', {
            templateUrl : 'app/info/info.template.html',
            controller  : 'infoController'
        })
        .when('/mapa', {
            templateUrl : 'app/mapa/mapa.template.html',
        })
        .otherwise({
            redirectTo: '/'
        });


});
angular.bootstrap(document.getElementById('Psa'), ['Psa']);