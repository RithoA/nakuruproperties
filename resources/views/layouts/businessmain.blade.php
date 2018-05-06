<!doctype html>
<html class="perfect-scrollbar-off" lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Jikuze</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
         <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!--  Material Dashboard CSS    -->
          <link href="{{ asset('/assets/css/material-dashboard.css') }}" rel="stylesheet" type="text/css">
         <!--  <link href="{{ asset('/assets/css/material-kit.css?v=1.1.0') }}" rel="stylesheet" type="text/css"> -->

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body class="profile-page">

	<div class="wrapper">
	    <div class="sidebar" data-active-color="blue" data-background-color="black" data-image="../assets/img/examples/city.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="/" class="simple-text">
					Jikuze
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	    	<div class="user">
	    	<div class="photo">
	             <img src="{{$user->avatar}}" alt="Circle Image" class="img-circle img-responsive">
	          </div>
 				
 			<div class="info">
                        <a href="#dropdownitems" data-toggle="collapse" class="collapsed">{{$mybusiness->businessname}}<b class="caret"></b></a>
                        <div class="collapse" id="dropdownitems">
                        <ul class="nav">
                            <li><a href="{{ url('/mybusiness/' . $mybusiness->slug) }}">Business Profile</a></li>
                            <li><a href="{{route('pr.edituserprofile')}}">Edit Business Profile</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                        </div>
 			</div>



	    	</div>
				<ul class="nav">
	                <li>
	                    <a href="{{route('pr.userhome')}}">
	                        <i class="material-icons">home</i>
	                        <p>Home</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="{{route('pr.userprofile')}}">
	                        <i class="material-icons">person</i>
	                        <p>My Profile</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="{{ url('/mybusiness/' . $mybusiness->slug) }}">
	                        <i class="material-icons">store</i>
	                        <p>Business Profile</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="maps.html">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">message</i>
	                        <p>Messages</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
				<div class="navbar-minimize">
				<button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
				<i class="material-icons visible-on-sidebar-regular">more_vert</i>
				<i class="material-icons visible-on-sidebar-mini">view_list</i>
				<div class="ripple-container"></div>

				</button>
				</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle toggled" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Profile</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                
                                    <i class="material-icons">present_to_all</i>
                                    Promo
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('pr.postphoto', $mybusiness->slug) }}"><i class="material-icons">photo</i> Photo</a></li>
                                    <li><a href="#"><i class="material-icons">video_library</i> Video</a></li>
                                    <li><a href="#"><i class="material-icons">book</i> Article</a></li>
                                    <li><a href="#"><i class="material-icons">event</i> Event</a></li>
                                    <li><a href="#"><i class="material-icons">work</i> Job</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">account_balance_wallet</i> My Wallet
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Balance: Ksh {{$user->account}}</a></li>
                                    <li><a href="#">Withdraw</a></li>
                                    <li><a href="#">Transfer</a></li>
                                    <li><a href="#">Deposit</a></li>
                                    <li><a href="#">Transaction History</a></li>
                                </ul>
                            </li>
						</ul>
<!-- 
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group form-search is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form> -->
					</div>
				</div>
			</nav>

	         @yield('businesscontent')

	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Afrinovo
            </p>

	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/js/material.min.js') }}"></script>

	<!--  Charts Plugin -->
	<script type="text/javascript" src="{{ asset('/assets/js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script type="text/javascript" src="{{ asset('/assets/js/bootstrap-notify.js') }}"></script>


	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<script type="text/javascript" src="{{ asset('/assets/js/moment.min.js') }}"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script type="text/javascript" src="{{ asset('/assets/js/nouislider.min.js') }}"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<script type="text/javascript" src="{{ asset('/assets/js/bootstrap-datetimepicker.js') }}"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script type="text/javascript" src="{{ asset('/assets/js/bootstrap-selectpicker.js') }}"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script type="text/javascript" src="{{ asset('/assets/js/bootstrap-tagsinput.js') }}"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script type="text/javascript" src="{{ asset('/assets/js/jasny-bootstrap.min.js') }}"></script>

	<!--    Plugin For Google Maps   -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
	<script type="text/javascript" src="{{ asset('/assets/js/atv-img-animation.js') }}"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->

	<script type="text/javascript" src="{{ asset('/assets/js/material-kit.js?v=1.1.0') }}"></script>
		<!-- Material Dashboard javascript methods -->
	<script type="text/javascript" src="{{ asset('/assets/js/material-dashboard.js') }}"></script>

</html>
