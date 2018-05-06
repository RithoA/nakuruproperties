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

<body class="signup-page">
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

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li pull-left><a href="{{ route('login') }}" class="btn btn-primary btn-raised btn-default"">
                     Login
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="card card-signup">
                        <h2 class="card-title text-center">Register</h2>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="info info-horizontal" style="margin-left: 10px; margin-right: 10px">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Our Vision</h4>
                                        <p class="description">
                                            We aim transform the real estate industry through commitment to positive change and innovation that redefines the quality and consistency of service that clients can expect from a property manager.
                                        </p>
                                    </div>
                                </div>

                                <!-- <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">code</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Fully Coded in HTML5</h4>
                                        <p class="description">
                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub
                                        </p>
                                    </div>
                                </div> -->

                                <div class="info info-horizontal" style="margin-left: 10px; margin-right: 10px">
                                    <div class="icon icon-info">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">To our Clients</h4>
                                        <p class="description">
                                            We provide top quality professional service and support to a wide range of residential real estate owners and commercial investors in an effort to help the many individual communities in our portfolio be sought after places to live.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <form class="form" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                    <div class="card-content">
                                    <div class="social text-center">
                                    <h4>Register new account</h4>
                                    </div>
                                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <input class="form-control" placeholder="Email..." id="email" type="email" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                         @endif
                                        </div>
                                        <div class="input-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <input class="form-control" placeholder="Username..." id="username" type="text" name="username" value="{{ old('username') }}" required>
                                            @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                         </span>
                                         @endif
                                        </div>
                                        <div class="input-group dropup{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <div class="input-group dropup{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                                <i class="fa fa-venus-mars" style="font-size: 20px; font-weight: bold;"></i>
                                            </span>
                                        <select id="gender" name="gender" class="form-control selectpicker" data-style="form-control" title="Gender.." value="{{ old('gender') }}" required>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                       </select>
                                       @if ($errors->has('gender'))
                                            <span class="help-block">
                                           <strong>{{ $errors->first('gender') }}</strong>
                                          </span>
                                         @endif
                                       </div>
                                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <input id="password"  type="password" placeholder="Password..." class="form-control" name="password" required/>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                           <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                         @endif
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <input id="password-confirm" type="password" placeholder="Confirm Password..." class="form-control" name="password_confirmation" required />
                                        </div>

                                        <!-- <div class="checkbox">
                                            <label>
                                                <input required type="checkbox" name="optionsCheckboxes">
                                                I agree to the <a href="#something">terms and conditions</a>.
                                            </label>
                                        </div> -->
                                    </div>
                                     <div class="footer text-center">
                                <a class="btn btn-primary btn-simple btn-wd btn-lg"><button type="submit" class="btn btn-primary">
                                    Get Started
                                </button></a>
                                </div>
                                </form>
                                <!-- <div class="social text-center">
                                 <h4>Or use your google account</h4>
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-google"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

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
