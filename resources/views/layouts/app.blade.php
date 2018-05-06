<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Nakuru Properties</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
     <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('/assets/css/material-kit.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="login-page">
    <nav class="navbar navbar-primary navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Nakuru Properties</a>
            </div>

            <div class="collpase navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li pull-left><a href="{{ route('register') }}" class="btn btn-primary btn-raised btn-default">
                     Register
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">

               @yield('content')
          
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.afrinovo.com">
                                Afrinovo
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Terms and Conditions
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Afrinovo
                </div>

            </div>
        </footer>

    </div>

</body>
    <!--   Core JS Files   -->
    <!--   Core JS Files   -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/material.min.js') }}"></script>

    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
    <script type="text/javascript" src="{{ asset('/assets/js/moment.min.js') }}"></script>

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script type="text/javascript" src="{{ asset('/assets/js/nouislider.min.js') }}"></script>

    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-datetimepicker.js') }}"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-selectpicker.js') }}"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-tagsinput.js') }}"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script type="text/javascript" src="{{ asset('/assets/js/jasny-bootstrap.min.js') }}"></script>

    <!--    Plugin For Google Maps   -->


    <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
    <script type="text/javascript" src="{{ asset('/assets/js/atv-img-animation.js') }}"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script type="text/javascript" src="{{ asset('/assets/js/material-kit.js?v=1.1.0') }}"></script>

    <!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</html>
