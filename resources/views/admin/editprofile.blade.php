@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
	            <div class="container-fluid">
	             <!-- <div class="progress">
	             <span>84% Complete</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
								
								</div>
								</div> -->
	                <div class="row" style="padding-top: 25px">
	                <div class="col-md-4">
    						<!-- <div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="{{ Storage::url($user->avatar) }}" />
    								</a>
    							</div>
    							<div class="content">
    								<a href="#pablo" class="btn btn-primary btn-round"><i class="material-icons">edit</i> Change</a>
    							</div>
    						</div> -->
    						 <form class="form" role="form" method="POST" action="{{ route('pr.updateavatar') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
							<div class="fileinput fileinput-new text-center card card-profile" data-provides="fileinput">
								<div class="fileinput-new card card-avatar">
									<img src="{{ $user->avatar }}">
								</div>
								<div class="fileinput-preview fileinput-exists card card-avatar"></div>
								<div>
									<span class="btn btn-raised btn-round btn-info btn-file">
										<span class="fileinput-new">Select Profile Picture</span>
										<span class="fileinput-exists"><i class="material-icons">edit</i>Change</span>
										<input type="file" name="avatar" accept="Image" />
										</span>
									@if(auth::id() == $user->id)
									<a href="#pablo" class="fileinput-exists"><button type="submit" class="btn btn-primary btn-round"><i class="fa fa-check"></i> Update </button></a>
									@endif
								</div>
							</div>
							</form>
					

							 <form class="form" role="form" method="POST" action="{{ route('pr.updatecoverimage') }}" enctype="multipart/form-data" style="padding-top: 20px">
                                {{ csrf_field() }}
							<div class="fileinput fileinput-new text-center" data-provides="fileinput">
								<div class="fileinput-new card card-raised">
									<img src="{{ Storage::url($profile->coverimage) }}" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists card card-raised"></div>
								<div>
									<span class="btn btn-raised btn-round btn-info btn-file">
										<span class="fileinput-new">Select Cover Image</span>
										<span class="fileinput-exists"><i class="material-icons">edit</i>Change</span>
										<input type="file" name="coverimage" accept="Image" />
									</span>
									@if(auth::id() == $user->id)
									<a href="#pablo" class="fileinput-exists"><button type="submit" class="btn btn-primary btn-round"><i class="fa fa-check"></i> Update </button></a>
									@endif
								</div>
							</div>
							</form>
		    			</div>
	                    <div class="col-md-8" style="padding-top: 30px">
	                        <div class="card">
	                            <div class="card-header card-header-icon" data-background-color="purple">
	                            <i class="material-icons">perm_identity</i>  
	                            </div>
	                            <div class="card-content">
	                            <h4 class="card-title">Edit Profile
									<small class="category">Complete your profile</small></h4>
	                                 <form class="form" role="form" method="POST" action="{{ route('pr.updateprofile') }}">
                                      {{ csrf_field() }}
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label text-black">Username: {{$user->username}}</label>
													<input type="text" name="username" class="form-control">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email: {{$user->email}}</label>
													<input type="email" name="email" class="form-control">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4" style="padding-top: 9.5px">
												<div class="form-group label-floating">
													<label class="control-label">Phone: {{$profile->phone}}</label>
													<input type="text" name="phone" value="{{$profile->phone}}" class="form-control">
												</div>
	                                        </div>

	                                        <div class="col-md-4">
											<div class="form-group dropup">
                                            @if($user->gender==1)
                                           <select id="gender" name="gender" value="{{$profile->gender}}" class="form-control selectpicker" data-style="form-control" title="Male">
                                           @else
                                           <select id="gender" name="gender" value="{{$profile->gender}}" class="form-control selectpicker" data-style="form-control" title="Female">
                                           @endif
                                       		 <option value="1">Male</option>
                                       		 <option value="0">Female</option>
                                       		</select>
                                      		 </div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">My Location: {{$profile->location}}</label>
													<input type="text" name="location" value="{{$profile->location}}" class="form-control">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>About Me</label>
													<div class="form-group label-floating">
									    				<label class="control-label">{{$profile->about}}</label>
								    					<textarea class="form-control" value="{{$profile->about}}" name="about" rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-md-8" style="padding-top: 30px">
	                        <div class="card">
	                            <div class="card-header card-header-icon" data-background-color="purple">
	                            <i class="material-icons">lock</i>  
	                            </div>
	                            <div class="card-content">
	                            <h4 class="card-title">Reset Password
	                                 <form class="form" role="form" method="POST" action="{{ route('pr.updateprofile') }}">
                                      {{ csrf_field() }}
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label text-black">New password</label>
													<input type="text" name="username" class="form-control">
												</div>
	                                        </div>
	                                        </div>
	                                        <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Confirm password</label>
													<input type="email" name="email" class="form-control">
												</div>
	                                        </div>
	                                    </div>
	                                    <button type="submit" class="btn btn-primary pull-right">Reset</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        @endsection