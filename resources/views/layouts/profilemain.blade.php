<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Nakuru Properties</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css?v=1.1.0" rel="stylesheet"/>
</head>

<body class="profile-page">

    <nav class="navbar navbar-primary navbar-fixed-top" id="sectionsNav">
        <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="/">Nakuru Properties</a>
                          <a style="margin-left: 15px; margin-top: 4px" class="btn btn-primary btn-default" data-toggle="modal" data-target="#noticeModal"><i class="material-icons">search</i> Search</a>
                        </div>


                          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li><a href="{{ route('register') }}">
                                        Register
                                    </a>
                                </li>
                           </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                  </nav>
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            @include('layouts.modalsearch')
</div>
<div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-small ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
      </div>
      <div class="modal-body text-center">
        <h5>You have to be logged in to favourite a property...</h5>
      </div>
      <div class="modal-footer text-center">
        <a class="btn btn-default btn-simple" style="margin-bottom: 20px" data-dismiss="modal">Never mind</a>
        <a href="{{ route('login') }}" style="margin-bottom: 20px" class="btn btn-primary btn-simple">Login</a>
      </div>
    </div>
  </div>
</div>
  <div class="main main-raisedresults">
       @yield('content')
    </div>

   
    <!--     *********    END PRICING 5      *********      -->
</body>
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
    <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
    <script type="text/javascript" src="{{ asset('/assets/js/atv-img-animation.js') }}"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script type="text/javascript" src="{{ asset('/assets/js/material-kit.js?v=1.1.0') }}"></script>

    <!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</html>
