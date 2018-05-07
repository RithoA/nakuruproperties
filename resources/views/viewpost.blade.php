@extends('layouts.profilemain')

@section('content')

       <div id="app">
       <div class="blogs-3">
        <div class="container-fluid" style="padding-right: 5px;padding-left: 5px">
        <div class="col-md-6 col-md-offset-2">
        <div class="card">
                                    <!-- <div class="card-content content-info">
                                        <h4 class="card-title">
                                            <a href="#pablo">"Real estate is an imperishable asset, ever increasing in value. It is the most solid security that human ingenuity has devised. It is the basis of all security and about the only indestructible security."</a>
                                        </h4>
                                        <h5 class="category-social">
                                            John Paulson
                                        </h5>
                              </div> -->
                       </div>
                 </div>
                 <div class="col-md-6 col-md-offset-2">       
                     <div class="row">
                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel slide" data-ride="carousel">

                                    <!-- Indicators -->
                                    <!-- <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol> -->

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active" style="
                                    overflow: hidden;">
                                            <img src="{{$post->coverimage}}" alt="Awesome Image" style="height: 65vh">
                                        </div>
                                        @foreach ($postphotos as $postphoto)
                                        <div class="item" class="responsive" style="
                                    overflow: hidden;">
                                            <img src="{{$postphoto->photo}}" style="height: 65vh">
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <i class="material-icons">keyboard_arrow_left</i>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Carousel Card -->
                </div>
                <div>
                        <h3 class="title">{{$post->title}}</h3>
                        <h4 class="title text-info">{{$post->description}}</h4>
                        <div class="card"> 
                        <div class="card-content">
                         {!! $post->body !!}
                         </div>
                         </div>
                         <div class="clearfix"></div>
                         @if($post->videolink)
                         <div style="position: relative;
                                    overflow: hidden;
                                    padding-top: 56.25%;">
                         <iframe style="position: absolute;
                                        top: 0;
                                       left: 0;
                                      width: 90%;
                                     height: 90%;
                                    border: 0;
                                    margin-left: 30px;"
                         src="http://www.youtube.com/embed/{{$post->videolink}}" frameborder="0" allowfullscreen></iframe>
                         </div>
                        @endif
                        <div class="clearfix"></div>
                         @if($post->latitude)
                         <h3 class="title">Map</h3>
                         <div style="position: relative;
                                    overflow: hidden;
                                    padding-top: 56.25%;">
                         
                                        <div style="position: absolute;
                                        top: 0;
                                       left: 0;
                                      width: 70%;
                                     height: 70%;
                                    border: 0;
                                    margin-left: 30px;" id="detailmap"></div>
                         </div>
                        @endif
                        <div class="col-md-10 col-md-offset-7" style="margin-top: 30px">
                        <div class="stats">
                        <!-- <a style="color: gray">{{$post->created_at->diffForHumans()}}</a>&middot; -->
                         <!-- <a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg"><button class="btn btn-info">
                                    Access Product
                                </button></a> -->
                                <a href="{{ route('pr.viewprofile') }}">
                                <button class="btn btn-social btn-fill btn-twitter"></i>Enquire
                                </button></a>&middot;
                                <a href="#pablo" class="text-danger" data-toggle="modal" data-target="#smallAlertModal"><i class="material-icons">favorite_border</i></a> &middot;
                                <commentcount :post="{{$post->id}}"></commentcount> &middot;
                                <share></share> 
                        </div>
                        </div>

                  <div id="comments">
                    <div class="title">
                        <h3 class="title text-center">Comments</h3>
                    </div>
                <div class="row">
                @if (Auth::check())
                <div class="media-area">
                    <div class="media media-post"><!-- start-media-post -->
                                  <a class="pull-left author" href="#pablo">
                                      <div class="avatar">
                                            <img class="media-object" style="max-height: 64px;max-width: 64px" alt="64x64" src="{{$user->avatar }}">
                                      </div>
                                  </a>
                      <commentadd :post="{{$post->id}}"></commentadd> 
                      <div style="overflow-y: scroll; height:1040px;">
                      <commentwrapper :post="{{$post->id}}"></commentwrapper>
                      </div> 
                    </div> <!-- end media-post -->
               </div><!-- end media -->  
                    @else
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                                <div class="card card-background" style="background-image: url('/assets/img/examples/card-blog3.jpg')">
                                    <div class="card-content">
                                        <h3 class="card-title">Hope you're having a pleasant day</h3>
                                        <p class="card-description">
                                            You have to be logged in to view this section <i class="fa fa-smile-o"></i>
                                        </p>
                                        <a href="{{ route('login') }}" class="btn btn-primary btn-default">Sign in
                                        </a>
                                    </div>
                             </div>
                       </div>
                @endif
                </div>
                </div>

                </div>

            </div>


             <div class="col-md-2 col-md-offset-1">
            <div class="row" style="padding-top: 50px">

                                    <h6 class="category text-info">Recent Posts</h6>
                                    @foreach ($recent as $recent)
                                    <div class="card card-blog card-atv">
                                    <div class="card-image">
                                        <a href="{{ route('ps.viewpost', $recent->slug) }}">
                                            <div class="atvImg">
                                                <img class="img" src="{{$recent->coverimage}}" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="{{ route('ps.viewpost', $recent->slug) }}" >{{$recent->title}}</a>
                                    </h4>
                                    <h6 class="category text-info"><a href="{{ route('ps.viewpost', $recent->slug) }}" >View</a></h6>
                                    </div>
                                    </div>
                                    <br/>
                                    @endforeach
                                    </div> 
             <br/>
             <div class="row">
              <div class="related-products">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                    <div class="card-content content-info">
                                        <h4 class="card-title">
                                            <a href="#pablo">"Real estate is an imperishable asset, ever increasing in value. It is the most solid security that human ingenuity has devised. It is the basis of all security and about the only indestructible security."</a>
                                        </h4>
                                        <h5 class="category-social">
                                            John Paulson
                                        </h5>
                         </div>
                       </div>
                    </div>
                 </div>
              </div>
              <br/>
             </div>
             <div class="row" style="padding-top: 50px">

                                    <h6 class="category text-info">Featured</h6>
                                    @foreach ($prime as $prime)
                                    <div class="card card-blog card-atv">
                                    <div class="card-image">
                                        <a href="{{ route('ps.viewpost', $prime->slug) }}">
                                            <div class="atvImg">
                                                <img class="img" src="{{$prime->coverimage}}" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="{{ route('ps.viewpost', $prime->slug) }}" >{{$prime->title}}</a>
                                    </h4>
                                    <h6 class="category text-info"><a href="{{ route('ps.viewpost', $prime->slug) }}" >View</a></h6>
                                    </div>
                                    </div>
                                    <br/>
                                    @endforeach
                                    </div>
                                    </div>
      </div>
    </div>
     <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-center">You may also like..</h2>
                    <br />
                    <div class="row">
                    @foreach ($suggest as $suggest)
                        <div class="col-md-4">
                            <div class="card card-blog card-atv">
                                <div class="card-image">
                                     <a href="{{ route('ps.viewpost', $suggest->slug) }}">
                                            <div class="atvImg">
                                                <img class="img" src="{{ $suggest->coverimage }}" />
                                            </div>
                                        </a>
                                </div>

                                <div class="card-content">
                                    <h6 class="category text-info"></h6>
                                    <h4 class="card-title">
                                        <a href="{{ route('ps.viewpost', $suggest->slug) }}">{{$suggest->title}}</a>
                                    </h4>
                                    <p class="card-description">
                                        {{$suggest->description}}<a href="{{ route('ps.viewpost', $suggest->slug) }}"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
                </div>

            </div>
        </div>
	</div>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATyoHTTO6d72ponwOcYvN6s3LkDtA-hL0&libraries=places&callback=initialize" async defer></script>
<script type="text/javascript">
   function initialize() {
   initMap();
    }
 var map, marker;

   function initMap() {
        var show = {lat: {{$post->latitude}}, lng: {{$post->longitude}}};
        map = new google.maps.Map(document.getElementById('detailmap'), {
          zoom: 15,
          center: show,
          disableDefaultUI: false,
          scrollwheel: false
        });
        marker = new google.maps.Marker({
          position: show,
          map: map,
          draggable: true,
          rotateControl: true
        });
        }
</script>
@endsection