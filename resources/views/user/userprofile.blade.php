@extends('layouts.usermain')
@section('citizencontent')
<div class="content">
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ Storage::url($profile->coverimage) }}');"></div>
 <div id="app">
    <div class="main main-raisedprofile">
        <div class="profile-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            <div class="avatar">
                                <img src="{{$user->avatar}}" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title">{{$user->username}}</h3>
                                <h5><i style="color: orange" class="fa fa-star"></i> Word of the Week</h5>
                                <p class="card-description">
                                        “{{$word}}”
                               </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="description text-center">
                @if($profile->about)
                    <p>About Me: {{$profile->about}}</p>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="profile-tabs">
                            <div class="nav-align-center">
                                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                    <li class="active">
                                        <a href="#following" role="tab" data-toggle="tab">
                                            <i class="material-icons">stars</i>
                                            Prime Properties
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>
                <div class="tab-content">
                    <div class="row">
                     @foreach($listprime as $post)
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="{{ route('ps.viewpost', $post->slug) }}">
                                               <div class="atvImg">
                                                <img class="img" src="{{ $post->coverimage }}" style="max-height: 25vh" />
                                            </div>
                                            </a>
                                        </div>
                                        <div class="card-content">
                                        <div class="footer">
                                        <div class="author">
                                                <a href="{{ route('pr.viewprofile') }}">
                                                   <img  src="{{ $avatar}}" alt="..." class="avatar img-raised">
                                                </a>
                                            </div>
                                           <div class="stats">
                                              @if (Auth::check())
                                             <favorite :post={{ $post->id }} :favorited={{ $post->favorited() ? 'true' : 'false' }}></favorite> 
                                             @endif&middot;
                                             <commentcount :post="{{$post->id}}"></commentcount> &middot;
                                             <a href="#pablo" class="text-info"><i class="material-icons">share</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                        <h4 href="{{ route('ps.viewpost', $post->slug) }}" class="card-title">{{$post->title}}</h4>
                                        <h6 class="category">Price: Ksh {{ number_format($post->price) }}</h6>
                                        <a class="card-title" href="#pablo" class="text-info">{{ $post->description }}</a>
                                        </div>
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
</div>
    
@endsection
