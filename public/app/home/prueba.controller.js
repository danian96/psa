// create the controller and inject the Angular $scope
Psa.controller('pruebaController', function pruebaController($scope, $http, $location, constants) {
    // set our current page for pagination purposes
    $scope.currentPage=1;
    $scope.lastPage=1;
    $scope.loadMoreText='Load More Burgers...';

    //retrieve hamburgers listing from API
    $http.get(constants.API_URL + "management", {params: { page: $scope.currentPage }})
        .success(function(response) {


            $scope.prueba = response;
            //$scope.prueba = response.current_page;
            $scope.lastPage = response.last_page;
            console.log($scope.prueba);
            if($scope.currentPage >= $scope.lastPage){
                $scope.loadMoreText='All Burgers Loaded!';
            }
        });

    // infinite scroll of the hamburgers
    $scope.loadMoreBurgers = function() {
        // increase our current page index
        $scope.currentPage++;


        //retrieve hamburgers listing from API and append them to our current list
        $http.get(constants.API_URL + "management", {params: { page: $scope.currentPage }})
            .success(function(response) {
                $scope.prueba = $scope.prueba.concat(response.data);
                $scope.currentPage = response.current_page;
                $scope.lastPage = response.last_page;

                if($scope.currentPage >= $scope.lastPage){
                    $scope.loadMoreText='All Burgers Loaded!';
                    $window.alert("pos weno");
                }

            });

    };

    // adding a burger


});