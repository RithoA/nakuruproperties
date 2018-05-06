@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
 <div id="app">
    <div class="main main-raisedlist">
        <div class="profile-content">
            <div class="container-fluid">
                @if($listfollowing)
                <div class="title">
                        <h5>Following</h5>
                    </div>
                <div class="row">
                @foreach($listfollowing as $following)
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ $following->avatar }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">{{$following->fullnames}}</h4>
                                            <h6 class="category">{{$following->username}}</h6>
                                            <h5><i style="color: orange" class="fa fa-star"></i><b> 1.2K</b> Stars</h5>
                                            <h5><following :profile_user_id="{{$following->id}}"></following></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                             @else
                             <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                                <div class="card card-background" style="background-image: url('/assets/img/examples/card-blog3.jpg')">
                                    <div class="card-content">
                                        <h3 class="card-title">You're a newbie huh?</h3>
                                        <p class="card-description">
                                            How about you search for friends and businesses, and if you like what you see press follow <i class="fa fa-smile-o"></i>
                                        </p>
                                        <a href="#pablo" class="btn btn-primary btn-round">
                                            <i class="material-icons">search</i> Search People
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
