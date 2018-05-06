@extends('layouts.profilemain')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ Storage::url($bizprofile->coverimage) }}');"></div>
   <div id="app">
        <div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-xs-6 col-xs-offset-3">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="{{$bizuser->avatar}}" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">{{$bizuser->username}}</h3>
                                <!-- <h5><i style="color: orange" class="fa fa-star"></i><b>1.2K</b>Stars</h5>
                                <h5><following :profile_user_id="2"></following></h5> -->
	                        </div>
	                    </div>
    	            </div>
                </div>


                <div class="description text-center">
                    <h6>{{$bizprofile->about}}</h6>
                </div>

				<div class="contact-content">
            <div class="container">
                <h2 class="title">Send us a message</h2>
                @if (session()->has('sentemail')) <div class="alert alert-success">{!! session('sentemail') !!}</div>
                @endif
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 20px">
                        <h6 class="description">You can contact us with anything related to our listings. We'll get in touch with you as soon as possible.<br><br>
                        </h6>
                        <form class="form" role="form" id="contact-form" method="POST" action="{{ route('em.sendmessage') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                           
                            <div class="form-group label-floating">
                                <label class="control-label">Your name</label>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Email address</label>
                                <input type="email" name="sendfrom" class="form-control" required/>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required/>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Your message</label>
                                <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Send Message" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">pin_drop</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us at the office</h4>
                                <h6> {{$bizprofile->location}}<br>
                                </h6>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">phone</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <h6>nakuruproperties.co.ke <br>
                                    {{$bizprofile->phone}}<br>
                                    Mon - Fri, 10:00-17:00<br>
                                    Sat, 10:00-14:00
                                </h6>
                            </div>
                        </div>
                        <!-- <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">business_center</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Legal Information</h4>
                                <h6> Creative Tim Ltd.<br>
                                    VAT &middot; EN2341241<br>
                                    IBAN &middot; EN8732ENGB2300099123<br>
                                    Bank &middot; Great Britain Bank
                                </h6>
                            </div>
                        </div> -->
                    </div>
               </div>
            </div>
        </div>
                    </div>
            </div>
	</div>
</div>


@endsection
