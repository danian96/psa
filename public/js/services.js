

var psaAppServices = angular.module('psaAppServices', [
    'LocalStorageModule'
]);

psaAppServices.factory('userService', ['$http', 'localStorageService', function ($http, localStorageService) {

    function checkIfIsInExam() {
        if (localStorageService.get('token')) {
            return true;
        } else {
            return false;
        }
    }

    function examIn(candidate_id) {
        $http.post( 'api/auth/examin', {
            candidate_id    :   candidate_id,
            area_id         :   area_id
        }).
        then(function(response) {

            localStorageService.set('token', response.data.token);
            onSuccess(response);

        }, function(response) {

            onError(response);

        });
    }

    function examOut() {
        localStorageService.remove('token');
    }

    function getCurrentToken() {
        return localStorageService.get('token');
    }

    return {
        checkIfIsInExam :   checkIfIsInExam,
        examIn          :   examIn,
        examOut         :   examOut,
        getCurrentToken :   getCurrentToken
    }

}]);

psaAppServices.factory('areaService', ['Restangular', 'userService', function(Restangular, userService) {

    function getAll(onSuccess, onError){
        Restangular.all('api/area').getList().then(function(response){

            onSuccess(response);

        }, function(){

            onError(response);

        });
    }

    /*
    function getById(bookId, onSuccess, onError){

        Restangular.one('api/books', bookId).get().then(function(response){

            onSuccess(response);

        }, function(response){

            onError(response);

        });

    }

    function create(data, onSuccess, onError){

        Restangular.all('api/books').post(data).then(function(response){

            onSuccess(response);

        }, function(response){

            onError(response);

        });

    }

    function update(bookId, data, onSuccess, onError){

        Restangular.one("api/books").customPUT(data, bookId).then(function(response) {

                onSuccess(response);

            }, function(response){

                onError(response);

            }
        );

    }

    function remove(bookId, onSuccess, onError){
        Restangular.one('api/books/', bookId).remove().then(function(){

            onSuccess();

        }, function(response){

            onError(response);

        });
    }

    Restangular.setDefaultHeaders({ 'Authorization' : 'Bearer ' + userService.getCurrentToken() });
    */

    return {
        getAll: getAll
        /*
        getById: getById,
        create: create,
        update: update,
        remove: remove
        */
    }

}]);