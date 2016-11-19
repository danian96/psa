<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8" ng-app="Psa"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" ng-app="Psa"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="es" ng-app="Psa"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>UAGRM PSA-2017</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/thematics-education.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">

<!-- SLIDE TOP -->
<div id="slidetop">

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <h6><i class="icon-heart"></i> WHY SMARTY?</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
            </div>

            <div class="col-md-4">
                <h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6><i class="icon-envelope"></i> CONTACT INFO</h6>
                <ul class="list-unstyled">
                    <li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
                    <li><b>Phone:</b> 1-800-565-2390</li>
                    <li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
                </ul>
            </div>

        </div>

    </div>

    <a class="slidetop-toggle" href=""><!-- toggle button --></a>

</div>
<!-- /SLIDE TOP -->


<!-- wrapper -->
<div id="wrapper">

    <!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .noborder 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent noborder"
    -->
    <div id="header" class="sticky clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">
                </ul>
                <!-- /BUTTONS -->


                <!-- Logo -->
                <a class="logo pull-left" href="index.html">
                    <img src="assets/images/uagrm.png" alt="" />
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->

                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li class="dropdown active"><!-- HOME -->
                                <a class="dropdown-toggle" href="#">
                                    UAGRM
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            RESEÑA HISTORICA
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            MISION Y VISION DE LA UAGRM
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HIMNO UNIVERSITARIO
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            AUTORIDADES UNIVERSITARIAS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">RECTOR Y VICERECTOR</a></li>
                                            <li><a href="">DECANOS Y VICEDECANOS</a></li>
                                            <li><a href="">DIRECTORES DE CARRERA</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="" href="#">
                                    INFORMACION GENERAL PSA
                                </a>
                            </li>
                            <li class="dropdown"><!-- FEATURES -->
                                <a class="dropdown-toggle" href="#">
                                    POSTULANTE PSA
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            CONSULTA NOTAS PSA
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SIMULADOR DE EXAMEN
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    MATERIAL DE APOYO
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            BANCOS DE PREGUNTAS
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            TEXTOS DE APOYO
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="" href="#">
                                    FACULTADES
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>

    <div ng-view></div>



</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="assets/js/scripts.js"></script>

<!-- STYLESWITCHER - REMOVE -->
<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>
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
