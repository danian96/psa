/**
 * Created by root on 22-11-16.
 */
// create the controller and inject the Angular $scope
Psa.controller('infoController', function infoController($scope, $http, $location, constants) {

    //retrieve hamburgers listing from API
    $http.get(constants.API_URL + "management")
        .success(function(response) {
            $scope.infos = response;
            console.log($scope.infos);
        });
});