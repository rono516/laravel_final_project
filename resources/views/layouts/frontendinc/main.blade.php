<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>TukLearn</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="frontendassets/images/favicon.ico" type="image/x-icon" />
{{--    <link rel="apple-touch-icon" href="frontendassets/images/apple-touch-icon.png">--}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="frontendassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontendassets/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontendassets/css/carousel.css">
    <link rel="stylesheet" href="frontendassets/css/animate.css">
    <link rel="stylesheet" href="frontendassets/style.css">

    <!--[if lt IE 9]>
    <script src="frontendassets/js/vendor/html5shiv.min.js"></script>
    <script src="frontendassets/js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="frontendassets/images/loader.gif" alt="">
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">
    <!-- BEGIN # MODAL LOGIN -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                    <form id="login-form">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="flaticon-add" aria-hidden="true"></span>
                        </button>
                        <div class="modal-body">
                            <input class="form-control" type="text" placeholder="What you are looking for?" required>
                        </div>
                    </form><!-- End # Login Form -->
                </div><!-- End # DIV Form -->
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    @include('layouts.frontendinc.topnavbar')



    @yield('content')

{{--    footer--}}
    @include('layouts.frontendinc.footer')

{{--    <div class="copyrights">--}}
{{--        <div class="container">--}}
{{--            <div class="clearfix">--}}
{{--                <div class="pull-left">--}}
{{--                    <div class="cop-logo">--}}
{{--                        <a href="#"><img width="70" height="60" src="frontendassets/images/tuklogo.png" alt="Logo here"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="pull-right">--}}
{{--                    <div class="footer-links">--}}
{{--                        <ul class="list-inline">--}}
{{--                            <li>Design : <a href="https://html.design">HTML.Design</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!-- end container -->--}}
{{--    </div><!-- end copy -->--}}
</div><!-- end wrapper -->

<!-- jQuery Files -->
<script src="frontendassets/js/jquery.min.js"></script>
<script src="frontendassets/js/bootstrap.min.js"></script>
<script src="frontendassets/js/carousel.js"></script>
<script src="frontendassets/js/animate.js"></script>
<script src="frontendassets/js/custom.js"></script>
<!-- VIDEO BG PLUGINS -->
<script src="frontendassets/js/videobg.js"></script>

</body>
</html>
