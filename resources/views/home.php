<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8" ng-app="Psa"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" ng-app="Psa"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="es" ng-app="Psa"> <!--<![endif]-->
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
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION SLIDER -->
    <link href="css/extralayers.css" rel="stylesheet" type="text/css" />
    <link href="css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/thematics-education.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />
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

    <a class="slidetop-toggle" href="#"><!-- toggle button --></a>

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

        <!-- SEARCH HEADER -->
        <div class="search-box over-header">
            <a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

            <form action="page-search-result-1.html" method="get">
                <input type="text" class="form-control" placeholder="SEARCH" />
            </form>
        </div>
        <!-- /SEARCH HEADER -->

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <!-- /SEARCH -->


                    <!-- QUICK SHOP CART -->
                    <li class="quick-cart">
                        <a href="#">
                            <span class="badge badge-aqua btn-xs badge-corner">2</span>
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <div class="quick-cart-box">
                            <h4>Shop Cart</h4>

                            <div class="quick-cart-wrapper">

                                <a href="#"><!-- cart item -->
                                    <img src="/images/4-min.jpg" width="45" height="45" alt="" />
                                    <h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
                                    <small>$37.21</small>
                                </a><!-- /cart item -->

                                <a href="#"><!-- cart item -->
                                    <img src="images/5-min.jpg" width="45" height="45" alt="" />
                                    <h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
                                    <small>$17.18</small>
                                </a><!-- /cart item -->

                                <!-- cart no items example -->
                                <!--
                                <a class="text-center" href="#">
                                    <h6>0 ITEMS ON YOUR CART</h6>
                                </a>
                                -->

                            </div>

                            <!-- quick cart footer -->
                            <div class="quick-cart-footer clearfix">
                                <a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
                                <span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
                            </div>
                            <!-- /quick cart footer -->

                        </div>
                    </li>
                    <!-- /QUICK SHOP CART -->

                </ul>
                <!-- /BUTTONS -->


                <!-- Logo -->
                <a class="logo pull-left" href="index.html">
                    <img src="/images/logo_light.png" alt="" />
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
                        <ul id="topMain" class="nav nav-pills">
                            <li class="dropdown active"><!-- HOME -->
                                <a class="dropdown-toggle" href="#">
                                    UAGRM
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            Reseña Historica
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            Mision y Vision
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            Himno Universitario
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            Autoridades Universitarias
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-shop-1.html">Rector y ViceRector</a></li>
                                            <li><a href="index-shop-2.html">Decanos y ViceDecanos</a></li>
                                            <li><a href="index-shop-3.html">Directores de Carrera</a></li>
                                        </ul>
                                    </li>
                        </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    Facultades
                                </a>
                            </li>
                            <li class="dropdown"><!-- FEATURES -->
                                <a class="dropdown-toggle" href="#">
                                    Consulta PSA
                                </a>
                            </li>
                            <li class="dropdown mega-menu"><!-- PORTFOLIO -->
                                <a class="dropdown-toggle" href="#">
                                    PORTFOLIO
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>GRID</span></li>
                                                    <li><a href="portfolio-grid-1-columns.html">1 COLUMN</a></li>
                                                    <li><a href="portfolio-grid-2-columns.html">2 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-3-columns.html">3 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-4-columns.html">4 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-5-columns.html">5 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-6-columns.html">6 COLUMNS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>MASONRY</span></li>
                                                    <li><a href="portfolio-masonry-2-columns.html">2 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-3-columns.html">3 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-4-columns.html">4 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-5-columns.html">5 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-6-columns.html">6 COLUMNS</a></li>

                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>SINGLE</span></li>
                                                    <li><a href="portfolio-single-extended.html">EXTENDED ITEM</a></li>
                                                    <li><a href="portfolio-single-parallax.html">PARALLAX IMAGE</a></li>
                                                    <li><a href="portfolio-single-slider.html">SLIDER GALLERY</a></li>
                                                    <li><a href="portfolio-single-html5-video.html">HTML5 VIDEO</a></li>
                                                    <li><a href="portfolio-single-masonry-thumbs.html">MASONRY THUMBS</a></li>
                                                    <li><a href="portfolio-single-embed-video.html">EMBED VIDEO</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>LAYOUT</span></li>
                                                    <li><a href="portfolio-layout-default.html">DEFAULT</a></li>
                                                    <li><a href="portfolio-layout-aside-left.html">LEFT SIDEBAR</a></li>
                                                    <li><a href="portfolio-layout-aside-right.html">RIGHT SIDEBAR</a></li>
                                                    <li><a href="portfolio-layout-aside-both.html">BOTH SIDEBAR</a></li>
                                                    <li><a href="portfolio-layout-fullwidth.html">FULL WIDTH (100%)</a></li>
                                                    <li><a href="portfolio-layout-tabfilter.html">TAB FILTER &amp; PAGINATION</a></li>

                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>LOADING</span></li>
                                                    <li><a href="portfolio-loading-pagination.html">PAGINATION</a></li>
                                                    <li><a href="portfolio-loading-jpagination.html">JQUERY PAGINATION</a></li>
                                                    <li><a href="portfolio-loading-infinite-scroll.html">INFINITE SCROLL</a></li>
                                                    <li><a href="portfolio-loading-ajax-page.html">AJAX IN PAGE</a></li>
                                                    <li><a href="portfolio-loading-ajax-modal.html">AJAX IN MODAL</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- BLOG -->
                                <a class="dropdown-toggle" href="#">
                                    BLOG
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            DEFAULT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-default-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-default-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-default-aside-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="blog-default-fullwidth.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            GRID
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-column-2colums.html">2 COLUMNS</a></li>
                                            <li><a href="blog-column-3colums.html">3 COLUMNS</a></li>
                                            <li><a href="blog-column-4colums.html">4 COLUMNS</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-column-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-column-aside-right.html">RIGHT SIDEBAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            MASONRY
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-masonry-2colums.html">2 COLUMNS</a></li>
                                            <li><a href="blog-masonry-3colums.html">3 COLUMNS</a></li>
                                            <li><a href="blog-masonry-4colums.html">4 COLUMNS</a></li>
                                            <li><a href="blog-masonry-fullwidth.html">FULLWIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            TIMELINE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-timeline-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-timeline-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-timeline-right-aside-right.html">RIGHT + TIMELINE RIGHT</a></li>
                                            <li><a href="blog-timeline-right-aside-left.html">LEFT + TIMELINE RIGHT</a></li>
                                            <li><a href="blog-timeline-fullwidth-left.html">FULL WIDTH - LEFT</a></li>
                                            <li><a href="blog-timeline-fullwidth-right.html">FULL WIDTH - RIGHT</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SMALL IMAGE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-smallimg-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-aside-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-fullwidth.html">FULL WIDTH</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-smallimg-alternate-1.html">ALTERNATE 1</a></li>
                                            <li><a href="blog-smallimg-alternate-2.html">ALTERNATE 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SINGLE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-single-default.html">DEFAULT</a></li>
                                            <li><a href="blog-single-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-single-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-single-fullwidth.html">FULL WIDTH</a></li>
                                            <li><a href="blog-single-small-image-left.html">SMALL IMAGE - LEFT</a></li>
                                            <li><a href="blog-single-small-image-right.html">SMALL IMAGE - RIGHT</a></li>
                                            <li><a href="blog-single-big-image.html">BIG IMAGE</a></li>
                                            <li><a href="blog-single-fullwidth-image.html">FULLWIDTH IMAGE</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            COMMENTS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-comments-bordered.html#comments">BORDERED COMMENTS</a></li>
                                            <li><a href="blog-comments-default.html#comments">DEFAULT COMMENTS</a></li>
                                            <li><a href="blog-comments-facebook.html#comments">FACEBOOK COMMENTS</a></li>
                                            <li><a href="blog-comments-disqus.html#comments">DISQUS COMMENTS</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- SHOP -->
                                <a class="dropdown-toggle" href="#">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            1 COLUMN
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-1col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-1col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-1col-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="shop-1col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            2 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-2col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-2col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-2col-both.html">BOTH SIDEBAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            3 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-3col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-3col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-3col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            4 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-4col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-4col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-4col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SINGLE PRODUCT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-single-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-single-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-single-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="shop-single-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-compare.html">COMPARE</a></li>
                                    <li><a href="shop-cart.html">CART</a></li>
                                    <li><a href="shop-checkout.html">CHECKOUT</a></li>
                                    <li><a href="shop-checkout-final.html">ORDER PLACED</a></li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu"><!-- SHORTCODES -->
                                <a class="dropdown-toggle" href="#">
                                    SHORTCODES
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-animations.html">ANIMATIONS</a></li>
                                                    <li><a href="shortcode-buttons.html">BUTTONS</a></li>
                                                    <li><a href="shortcode-carousel.html">CAROUSEL</a></li>
                                                    <li><a href="shortcode-charts.html">GRAPHS</a></li>
                                                    <li><a href="shortcode-clients.html">CLIENTS</a></li>
                                                    <li><a href="shortcode-columns.html">GRID &amp; COLUMNS</a></li>
                                                    <li><a href="shortcode-counters.html">COUNTERS</a></li>
                                                    <li><a href="shortcode-forms.html">FORM ELEMENTS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-dividers.html">DIVIDERS</a></li>
                                                    <li><a href="shortcode-icon-boxes.html">BOXES &amp; ICONS</a></li>
                                                    <li><a href="shortcode-galleries.html">GALLERIES</a></li>
                                                    <li><a href="shortcode-headings.html">HEADING STYLES</a></li>
                                                    <li><a href="shortcode-icon-lists.html">ICON LISTS</a></li>
                                                    <li><a href="shortcode-labels.html">LABELS &amp; BADGES</a></li>
                                                    <li><a href="shortcode-lightbox.html">LIGHTBOX</a></li>
                                                    <li><a href="shortcode-forms-editors.html">HTML EDITORS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-list-pannels.html">LIST &amp; PANNELS</a></li>
                                                    <li><a href="shortcode-maps.html">MAPS</a></li>
                                                    <li><a href="shortcode-media-embeds.html">MEDIA EMBEDS</a></li>
                                                    <li><a href="shortcode-modals.html">MODAL / POPOVER / NOTIF</a></li>
                                                    <li><a href="shortcode-navigations.html">NAVIGATIONS</a></li>
                                                    <li><a href="shortcode-paginations.html">PAGINATIONS</a></li>
                                                    <li><a href="shortcode-progress-bar.html">PROGRESS BARS</a></li>
                                                    <li><a href="shortcode-widgets.html">WIDGETS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-pricing.html">PRICING BOXES</a></li>
                                                    <li><a href="shortcode-process-steps.html">PROCESS STEPS</a></li>
                                                    <li><a href="shortcode-callouts.html">CALLOUTS</a></li>
                                                    <li><a href="shortcode-info-bars.html">INFO BARS</a></li>
                                                    <li><a href="shortcode-blockquotes.html">BLOCKQUOTES</a></li>
                                                    <li><a href="shortcode-responsive.html">RESPONSIVE</a></li>
                                                    <li><a href="shortcode-sections.html">SECTIONS</a></li>
                                                    <li><a href="shortcode-social-icons.html">SOCIAL ICONS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-alerts.html">ALERTS</a></li>
                                                    <li><a href="shortcode-styled-icons.html">STYLED ICONS</a></li>
                                                    <li><a href="shortcode-tables.html">TABLES</a></li>
                                                    <li><a href="shortcode-tabs.html">TABS</a></li>
                                                    <li><a href="shortcode-testimonials.html">TESTIMONIALS</a></li>
                                                    <li><a href="shortcode-thumbnails.html">THUMBNAILS</a></li>
                                                    <li><a href="shortcode-toggles.html">TOGGLES</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
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
<script type="text/javascript">var plugin_path = '/js';</script>
<script type="text/javascript" src="js/jquery/jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>


<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/demo.revolution_slider.js"></script>
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
