@extends('layouts.usermain')
@section('citizencontent')
<div class="content">
 <div id="app">
 <div class="main main-raisedresults">

                                    <div class="profile-content">
                                    <div class="container-fluid">
                                    <div class="row collections" style="padding-top: 50px">
                                    @forelse($myFavorites as $post)
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
                                        <h4 class="card-title">
                                            <a href="{{ route('ps.viewpost', $post->slug) }}">{{$post->title}}</a>
                                        </h4>
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
                                           <div class="stats">
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
                                    @empty
                                    <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                                    <div class="card card-background" style="background-image: url('/assets/img/examples/card-blog3.jpg')">
                                    <div class="card-content">
                                        <h3 class="card-title">You're a newbie huh?</h3>
                                        <p class="card-description">
                                            You have no favorite posts at the moment, how about you go through our listings and find what you like <i class="fa fa-smile-o"></i>
                                        </p>
                                        <a class="btn btn-primary btn-round">
                                            <i class="material-icons">search</i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    @endforelse
                                    </div> 
                                    </div>
                                    </div>
                                    </div>
</div>  </div> 
@endsection
