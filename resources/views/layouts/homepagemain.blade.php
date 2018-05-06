<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Nakuru Properties</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!-- CSS Files -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('/assets/css/material-kit.css') }}" rel="stylesheet" type="text/css">
    <script>
      window.Laravel = { csrfToken: '{{ csrf_token() }}', basePath: '{{ url("/") }}/' }
    </script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.8.10/themes/smoothness/jquery-ui.css" type="text/css">
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/jquery-ui.min.js"></script>

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

<body class="presentation-page">

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
                                <li>
                                <a href="{{ route('pr.viewprofile') }}">Contact Us</a>
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

<!--  <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script> -->
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

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
  <script type="text/javascript" src="{{ asset('/assets/js/nouislider.min.js') }}"></script>

  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
  <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-datetimepicker.js') }}"></script>

  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-selectpicker.js') }}"></script>

  <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
  <script type="text/javascript" src="{{ asset('/assets/js/bootstrap-tagsinput.js') }}"></script>

  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
  <script type="text/javascript" src="{{ asset('/assets/js/jasny-bootstrap.min.js') }}"></script>

  <!--    Plugin For Google Maps   -->


  <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
  <script type="text/javascript" src="{{ asset('/assets/js/atv-img-animation.js') }}"></script>

  <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->

  <script type="text/javascript" src="{{ asset('/assets/js/material-kit.js?v=1.1.0') }}"></script>
    <!-- Material Dashboard javascript methods -->
  <script type="text/javascript" src="{{ asset('/assets/js/material-dashboard.js') }}"></script>
    


    <script type="text/javascript">
        var $section_features = '';
        $().ready(function(){

        });
    </script>

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
