// create the controller and inject the Angular $scope
Psa.controller('homeController', function pruebaController($scope, $http, $location, constants) {


    //retrieve hamburgers listing from API
    $http.get(constants.API_URL + "management")
        .success(function(response) {
            $scope.prueba = response;
            console.log($scope.prueba);
        });
});