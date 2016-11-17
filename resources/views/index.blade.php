<!DOCTYPE html>
<html lang="en" ng-app = "psaApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Examen</title>

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/lodash/lodash.min.js"></script>
    <script src="bower_components/angular-route/angular-route.min.js"></script>
    <script src="bower_components/angular-local-storage/dist/angular-local-storage.min.js"></script>
    <script src="bower_components/restangular/dist/restangular.min.js"></script>

    <script src = "js/app.js"></script>
    <script src = "js/controllers.js"></script>
    <script src = "js/service.js"></script>

    <style>

        li {
            padding-bottom: 8px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Examen PSA 2017</h1>
            </div>
        </div>

        <div ng-view></div>
    </div>

    <!--button /-->

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>