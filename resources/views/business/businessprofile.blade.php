@extends('layouts.businessmain')
@section('businesscontent')
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
                                <h3 class="title">{{ $mybusiness->businessname }}</h3>
                                <h5><i style="color: orange" class="fa fa-star"></i><b>1.2K</b>Stars</h5>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="description text-center">
                    <p>{{$profile->about}}</p>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="profile-tabs">
                            <div class="nav-align-center">
                                <ul class="nav nav-pills nav-pills-icons nav-pills-info" role="tablist">
                                <li class="active">
                                        <a href="#posts" role="tab" data-toggle="tab">
                                            <i class="material-icons">camera</i>
                                            9 Posts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#followers" role="tab" data-toggle="tab">
                                            <i class="material-icons">people</i>
                                            5k Subscribers
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>
                <div class="tab-content">
                   
                    <myfeed></myfeed>
                    
                    <div class="tab-pane influencers" id="followers">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/avatar.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Gigi Hadid</h4>
                                            <h6 class="category">Model</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/marc.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Marc Jacobs</h4>
                                            <h6 class="category">Designer</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/kendall.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Kendall Jenner</h4>
                                            <h6 class="category">Model</h6>

                                            <p class="card-description">
                                                I love you like Kanye loves Kanye. Don't be scared of the truth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/card-profile2-square.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">George West</h4>
                                            <h6 class="category">Model/DJ</h6>

                                            <p class="card-description">
                                                I love you like Kanye loves Kanye.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/camp.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Shiru Anna</h4>
                                            <h6 class="category">Designer</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/christian.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Agwambo Sianda</h4>
                                            <h6 class="category">Model</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
