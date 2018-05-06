@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
 <div id="app">
    <div class="main main-raisedlist">
        <div class="profile-content">
            <div class="container-fluid">
            @if($follow_requests)
             <div class="title">
                        <h5>Follow requests</h5>
                    </div>
                <div class="row">
                @foreach($follow_requests as $request)
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ $request->avatar }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">{{$request->fullnames}}</h4>
                                            <h6 class="category">{{$request->username}}</h6>
                                            <h5><i style="color: orange" class="fa fa-star"></i><b> 1.2K</b> Stars</h5>
                                            <h5><follower :profile_user_id="{{$request->id}}"></follower></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>
                        @endif
            @if($listfollowers)
             <div class="title">
                        <h5>Followers</h5>
                    </div>
                <div class="row">
                @foreach($listfollowers as $follower)
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ $follower->avatar }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">{{$follower->fullnames}}</h4>
                                            <h6 class="category">{{$follower->username}}</h6>
                                            <h5><i style="color: orange" class="fa fa-star"></i><b> 1.2K</b> Stars</h5>
                                            <h5><follower :profile_user_id="{{$follower->id}}"></follower></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                             @endif
                       
                          @if(!$listfollowers && !$follow_requests)
                         <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                                <div class="card card-background" style="background-image: url('/assets/img/examples/card-blog3.jpg')">
                                    <div class="card-content">
                                        <h3 class="card-title">You're a newbie huh?</h3>
                                        <p class="card-description">
                                            You have no followers at the moment, how about you invite your friends and businesses to follow you by sending them a message and make sure to follow back <i class="fa fa-smile-o"></i>
                                        </p>
                                        <a href="#pablo" class="btn btn-primary btn-round">
                                            <i class="material-icons">search</i> Search People
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
