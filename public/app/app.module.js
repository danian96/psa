/**
 * Created by root on 12-11-16.
 */
// define the 'Burgerpedia' module
// also include ngRoute for all our routing needs
var Psa = angular.module('Psa', ['ngRoute']);

// define our canstant for the API
Psa.constant('constants', {
    API_URL: 'http://localhost:8000/api/'
});

// configure our routes
Psa.config(function($routeProvider) {
    $routeProvider
    // route for the hamburgers page
        .when('/', {
            templateUrl : 'app/home/prueba.template.html',
            controller  : 'pruebaController'
        })
        /*
        // route for a single hamburger
        .when('/hamburger/:hamburgerID', {
            templateUrl : 'app/hamburger/hamburger.template.htm',
            controller  : 'hamburgerController'
        })*/

        // default route
        .otherwise({
            redirectTo: '/'
        });


});