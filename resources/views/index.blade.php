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

    <!--
    <script src = "../../public/js/app.js"></script>
    <script src = "../../public/js/controllers.js"></script>
    <script src = "../../public/js/services.js"></script>
    -->

    <script src = "/js/app.js"></script>
    <script src = "/js/controllers.js"></script>
    <script src = "/public/js/services.js"></script>


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

        <!---->
        <div ng-view></div>
        <!---->
    </div>

    <!-- MAIN CONTENT AND INJECTED VIEWS -->
    <!--
    <div id="main">
        <!-- this is where content will be injected -->
        <!--
        <div ng-view></div>
    </div>
    -->
    <!--button /-->

    <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
    <script src="<?= asset('js/angular/angular.min.js') ?>"></script>
    <script src="<?= asset('js/angular/angular-route.min.js') ?>"></script>
    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>