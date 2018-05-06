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

	<title>Nakuru Properties</title>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('/assets/css/material-dashboard.css') }}" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <script>
      window.Laravel = { csrfToken: '{{ csrf_token() }}', basePath: '{{ url("/") }}/' }
    </script>
<!-- <link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"> -->
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <style> 
       #map {
        height: 250px;
        width: 500px;
        margin-bottom: 20px;
       }
       #detailmap {
        height: 315px;
        width: 560px;
       }
    </style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6545636130115851",
    enable_page_level_ads: true
  });
</script>
</head>

<body class="profile-page">
 
	<div class="wrapper">
	    <div class="sidebar" data-active-color="{{ session()->get('type')}}"  data-background-color="black" data-image="{{ Storage::url($profile->coverimage) }}">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="{{route('pr.userprofile')}}" class="simple-text">
					Nakuru Properties
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	    	<div class="user">
	    	<div class="photo">
	             <img src="{{$user->avatar }}" alt="Circle Image" class="img-circle img-responsive">
	          </div>
 				
 			<div class="info">
                        <a href="#dropdownitems" data-toggle="collapse" class="collapsed active">{{$user->username}} <b class="caret"></b></a>
                        <div class="collapse" id="dropdownitems">
                        <ul class="nav">
                            @if(auth::id() == $user->id)
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
                        <a href="{{route('pr.userprofile')}}">
                            <i class="material-icons text-gray">face</i>
                            <p>Profile</p>
                        </a>
                    </li>
	                <li class="active">
	                    <a href="{{route('pr.userhome')}}" style="background-color: #9c27b0;">
	                        <i class="material-icons">home</i>
	                        <p>Home</p>
	                    </a>
	                </li>
                    <li>
                        <a href="{{route('pr.userfavorites')}}">
                            <i class="material-icons text-gray">favorite</i>
                            <p>Favourites</p>
                        </a>
                    </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<div class="content">
             <nav class="navbar navbar-transparent" style="margin-bottom: 10px">
                <div class="container-fluid">
                   <div class="navbar-minimize">
                <button  id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular" style="color: #9c27b0;">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini" style="color: #9c27b0;">view_list</i>
                <div class="ripple-container"></div>

                </button>
                </div>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a style="margin-left: 15px; margin-top: 4px" class="btn btn-primary btn-default" data-toggle="modal" data-target="#noticeModal"><i class="material-icons">search</i> Search</a>

                                    @if (session()->has('verify')) <div class="alert alert-warning">{!! session('verify') !!}</div>
                                    @endif


                                </div>

                                <div class="collapse navbar-collapse" id="example-navbar">
                                    <ul class="nav navbar-nav">
                                        <!-- <li >
                                            <button type="button" class="btn btn-primary btn-lg" data-toggle="popover" data-placement="bottom" title="Popover on bottom" data-content="Here will be some very useful information about his popover." data-container="body">On bottom</button>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </nav>
 <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            @include('layouts.modalsearch')
</div>

	        @yield('citizencontent')

</div>

	   

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


	<!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
	<script type="text/javascript" src="{{ asset('/assets/js/atv-img-animation.js') }}"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->

	<script type="text/javascript" src="{{ asset('/assets/js/material-kit.js?v=1.1.0') }}"></script>
		<!-- Material Dashboard javascript methods -->
	<script type="text/javascript" src="{{ asset('/assets/js/material-dashboard.js') }}"></script>

		<script type="text/javascript">
		
   $(document).ready(function() {
  

  			$.ajax({
            type: 'get',
            url: '/get/categories',
            dataType: "json",
            success: function(categories) {
            $('#categories').empty();


            $.each(categories, function (i, item) {
           $('#categories').append($('<option>', { 
                       value: item.id,
                        text: item.name,
                        html: item[i]
                         }));
                               })
           $('#categories').selectpicker('refresh');
                         }

                  });

            $.ajax({
            type: 'get',
            url: '/get/tags',
            dataType: "json",
            success: function(tags) {
            $('#tags').empty();


            $.each(tags, function (i, item) {
           $('#tags').append($('<option>', { 
                       value: item.id,
                        text: item.name,
                        html: item[i]
                         }));
                               })
           $('#tags').selectpicker('refresh');
                         }

                  });


             $.ajax({
            type: 'get',
            url: '/get/towns',
            dataType: "json",
            success: function(towns) {
            // console.log(towns);
            $('#towns').empty();


            $.each(towns, function (i, item) {
           $('#towns').append($('<option>', { 
                       value: item.id,
                        text: item.name,
                        html: item[i]
                         }));
                               })
           $('#towns').selectpicker('refresh');
                         }

                  });

            $('#towns').on('change', function() {

            var townID = $(this).val();
            if(townID) {
            $.ajax({
            type: 'get',
            url: '/newpost/location/'+townID,
            dataType: "json",
            success: function(location) {
            $('#locations').empty();


            $.each(location, function (i, item) {
           $('#locations').append($('<option>', { 
                       value: item.id,
                        text: item.name,
                        html: item[i]
                         }));
                               })
           $('#locations').selectpicker('refresh');
                         }

                  });

            }else{

                $('#locations').empty();

            }

           });


            $('.searchmodal').on('click', '.searchquery', function() {
        console.log('response');
        $.ajax({
            type: 'post',
            url: '/searchresults',
            data: {
                '_token': $('input[name=_token]').val(),
                'category': $("#categories").val(),
                'town': $("#towns").val(),
                'location': $("#locations").val(),
                'tag': $("#tags").val(),
                'min': $('#min').val(),
                'max': $('#max').val()
            },
            success: function(results) {

                console.log(results);
                 $('.yield').remove();
                 $('#results').empty();
                 $('#resultstemplate').show();
                 $('#results').html(results);
               //  $.each(results, function (i, item) {
               // $('#results').append("<div class='card card-plain card-blog'><div class='row'><div class='col-md-4'><div class='card-image'><a href='/property/"+item.slug+"'><div class='atvImg'><img class='img' src="  + item.coverimage+  " /></div></a><div class='card-icon'><i class='material-icons'>play_circle_outline</i></div></div></div><div class='col-md-8'><h6 class='category text-info'></h6><h3 class='card-title'><a>" + item.title+  "</a></h3><p class='card-description'>" + item.description+   "<a href='/property/"+item.slug+"'> Read More </a></p></div></div> </div>");  
               //                 })

                }
        });
    });

             });

	</script>



</html>
