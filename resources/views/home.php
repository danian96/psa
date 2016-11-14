<!DOCTYPE html>
<html lang="en" ng-app="Psa">
<head>
    <meta charset="utf-8" />
    <title>Smarty - Multipurpose + Admin</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="/css/extralayers.css" rel="stylesheet" type="text/css" />
    <link href="/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="/css/thematics-education.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>

<body>

<!-- MAIN CONTENT AND INJECTED VIEWS -->
<div id="main">
    <!-- this is where content will be injected -->
    <div ng-view></div>
</div>

<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('js/angular/angular.min.js') ?>"></script>
<script src="<?= asset('js/angular/angular-route.min.js') ?>"></script>
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.module.js') ?>"></script>
<script src="<?= asset('app/home/prueba.controller.js') ?>"></script>




</body>
</html>