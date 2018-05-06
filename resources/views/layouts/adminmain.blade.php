<!doctype html>
<html class="perfect-scrollbar-off" lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

	<title>HFB Trends Remember to put user search history, viewed number, hierachy of viewed list..</title>
    <!-- Bootstrap core CSS     -->
         <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('/assets/css/material-dashboard.css') }}" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"> -->

</head>

<body class="profile-page">
 
	<div class="wrapper">
	    <div class="sidebar" data-active-color="{{ session()->get('type')}}"  data-background-color="black" data-image="{{ Storage::url($profile->coverimage) }}">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="/" class="simple-text">
					HFB Trends
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	    	<div class="user">
	    	<div class="photo">
	             <img src="{{$user->avatar }}" alt="Circle Image" class="img-circle img-responsive">
	          </div>
 				
 			<div class="info">
                        <a href="#dropdownitems" data-toggle="collapse" class="collapsed active">{{$user->email}}<b class="caret"></b></a>
                        <div class="collapse" id="dropdownitems">
                        <ul class="nav">
                            @if(auth::id() == $user->id)
                            <li><a href="{{route('pr.userprofile')}}">User Profile</a></li>
                            <li><a href="{{route('pr.edituserprofile')}}">Edit Profile</a></li>
                            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            @endif
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
	                    <a href="{{route('pr.listposts')}}">
	                        <i class="material-icons">chrome_reader_mode</i>
	                        <p>Posts</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="{{route('pr.listusers')}}">
	                        <i class="material-icons text-gray">face</i>
	                        <p>Users</p>
	                    </a>
	                </li>
                    <li>
                        <a href="{{route('pr.listcategories')}}">
                            <i class="material-icons text-gray">view_compact</i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pr.listtags')}}">
                            <i class="material-icons text-gray">view_list</i>
                            <p>Tags</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pr.listowners')}}">
                            <i class="material-icons text-gray">attach_money</i>
                            <p>Property Owners</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pr.listadverts')}}">
                            <i class="material-icons text-gray">visibility</i>
                            <p>Adverts</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pr.listfollowers')}}">
                            <i class="material-icons text-gray">subscriptions</i>
                            <p>Subscribers</p>
                        </a>
                    </li><!-- 
                    <li>
                        <a href="{{route('pr.listfollowers')}}">
                            <i class="material-icons text-gray">card_giftcard</i>
                            <p>Promos</p>
                        </a>
                    </li> -->
                    <li>
                        <a href="{{route('pr.myfavorites')}}">
                            <i class="material-icons text-gray">favorite</i>
                            <p>Favourites</p>
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
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">
									<li class="active">
		                                <a href="{{route('pr.newcategory')}}" class="btn btn-primary btn-raised btn-default" style="margin-left: 45px;padding: 15px">
											<i class="material-icons">view_compact</i>
		                                    Create Classification
		                                </a>
		                            </li>
									<li>
		                                <a href="{{route('pr.newpost')}}" class="btn btn-primary btn-raised btn-default" style="margin-left: 10px;padding: 15px">
											<i class="material-icons">note_add</i>
											Create Post
		                                </a>
		                            </li>
		                            <li>
		                                <a href="{{route('pr.newadvert')}}" class="btn btn-primary btn-raised btn-default" style="margin-left: 10px;padding: 15px">
											<i class="material-icons">visibility</i>
		                                    Create Advert
		                                </a>
		                            </li><!-- 
		                            <li>
		                                <a href="{{route('pr.newpromo')}}" class="btn btn-primary btn-raised btn-default" style="margin-left: 10px;padding: 15px">
											<i class="material-icons">card_giftcard</i>
		                                    Create Promo
		                                </a>
		                            </li> -->
		                            <li>
		                                <a href="{{route('pr.newemail')}}" class="btn btn-primary btn-raised btn-default" style="margin-left: 10px;padding: 15px">
											<i class="material-icons">email</i>
		                                    Send Email
		                                </a>
		                            </li>
		                            <li>
		                                <a href="{{route('pr.newuser')}}" class="btn btn-primary btn-raised btn-default" style="margin-left: 10px;padding: 15px">
											<i class="material-icons">face</i>
		                                    Create User
		                                </a>
		                            </li>
								</ul>
							<ul class="nav navbar-nav navbar-right">
                            @if(auth::id() == $user->id)
                            <li>
                                        <a href="{{ route('logout') }}" class="btn btn-rose btn-raised btn-default" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="material-icons">power_settings_new</i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            @endif
							</ul>
                        <div class="col-md-8">
						<!-- <form class="navbar-form navbar-left" role="search">
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
				</div>
			</nav>

	

	         @yield('citizencontent')

	   

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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- 	<script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script> -->
	<script src="{{ asset('/js/app.js') }}"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('/assets/js/material.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> 
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
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
