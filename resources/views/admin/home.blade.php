@extends('layouts.citizenmain')
@section('citizencontent')
 <div id="app">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
               <!--  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol> -->

                <!-- Wrapper for slides -->
               <div class="carousel-inner">
                @foreach($homeadvert as $advert)
                @if($advert->id == 1)
                    <div class="item active">
                        <div class="page-header header-filter" style="background-image: url('{{$advert->coverimage}}');">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <h1 class="title">{{$advert->title}}</h1>
                                        <h4>{{$advert->description}}</h4>
                                        <br />

                                        <div class="buttons">
                                            <share></share>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endif
                    @endforeach
                    @foreach($adverts as $advert)
                    <div class="item">
                        <div class="page-header header-filter" style="background-image: url('{{$advert->coverimage}}');">

                            <div class="container">
                            @if($advert->id != 1)
                                <div class="row">
                                    
                                    @if($advert->section == 1)
                                    <div class="col-md-7 col-md-offset-5 text-right">
                                    @elseif($advert->section == 2)
                                    <div class="col-md-6 text-left">
                                    @elseif($advert->section == 3)
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                    @endif
                                        <h1 class="title">{{$advert->title}}</h1>
                                        <h4>{{$advert->description}}</h4>
                                        <br />
                                        @if($advert->linkcategory == 1)
                                        <div class="buttons">
                                            <a href="#pablo" class="btn btn-white btn-simple btn-lg">
                                                <share></share> Share Offer
                                            </a>

                                            <a href="{{$advert->link}}" class="btn btn-danger btn-lg">
                                                <i class="material-icons">visibility</i> View now
                                            </a>
                                        </div>
                                        @elseif($advert->linkcategory == 2)
                                        <div class="buttons">
                                            <a href="{{$advert->link}}" class="btn btn-primary btn-lg">
                                                Read More
                                            </a>
                                            <a href="#pablo" class="btn btn-white btn-simple btn-lg">
                                                <share></share> Share Deal
                                            </a>
                                        </div>
                                        @elseif($advert->linkcategory == 3)
                                        <h6>Connect with us on:</h6>
                                        <div class="buttons">
                                            <share></share>
                                        </div>
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endif
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
        <div class="main main-raisedresults">
            <div class="profile-content">
                                    <div class="container-fluid">
                                    <div class="row collections" style="padding-top: 50px">
                                    @foreach($posts as $post)
                                    <div class="col-md-6 col-lg-4">
                                    <div class="card card-blog">
                                    <div class="card-image">
                                        <a href="{{ route('ps.viewpost', $post->slug) }}">
                                            <div class="atvImg">
                                                <img class="img" src="{{ $post->coverimage }}" />
                                            </div>
                                        </a>
                                        <div class="card-icon">
                                        @if ($post->type == 'Prime')
                                                 <i class="material-icons">grade</i>
                                        @else
                                                <i class="material-icons">perm_media</i>
                                        @endif
                                            </div>
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title">
                                            <a href="{{ route('ps.viewpost', $post->slug) }}">{{$post->title}}</a>
                                        </h5>
                                        <div class="footer">
                                        <div class="author">
                                            <a class="card-title" href="{{ route('ps.viewpost', $post->slug) }}">Ksh {{ number_format($post->price) }}</a>
                                        &middot;
                                        </div>
                                        </div>
                                        <div class="footer">
                                            <div class="author">
                                                <a href="{{ route('pr.viewprofile') }}">
                                                   <img  src="{{ $avatar}}" alt="..." class="avatar img-raised">
                                                </a>
                                            </div>
                                           <div class="stats" style="margin-bottom: 10px">
                                             <!-- <a style="color: gray"><i>{{$post->created_at->diffForHumans()}}</i></a>&middot; -->
                                              @if (Auth::check())
                                             <favorite :post={{ $post->id }} :favorited={{ $post->favorited() ? 'true' : 'false' }}></favorite> 
                                             @endif&middot;
                                             <commentcount :post="{{$post->id}}"></commentcount> &middot;
                                             <a href="#pablo" class="text-info"><i class="material-icons">share</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    @endforeach
                                    </div> 
                                    <ul class="pagination pagination-primary">
                                    {{$posts->links()}}
                                    </ul>
                                    </div>
                                    </div>
          </div>
        </div>            
    @endsection