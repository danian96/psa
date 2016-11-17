

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
            candidate_id    :   candidate_id
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


