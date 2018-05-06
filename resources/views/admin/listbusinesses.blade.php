@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
 <div id="app">
    <div class="main main-raisedlist">
        <div class="profile-content">
            <div class="container-fluid">

                
                <div class="row">
                @foreach($listbusinesses as $listbusinesses)
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ $listbusinesses->coverimage }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">{{$listbusinesses->businessname}}</h4>
                                            <h6 class="category">{{$listbusinesses->category}}</h6>
                                            <h5><i style="color: orange" class="fa fa-star"></i><b> 1.2K</b> Stars</h5>
                                            <h5><followingbiz :profile_business_id="{{$listbusinesses->id}}"></followingbiz></h5>
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
    
@endsection
