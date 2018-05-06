@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
				<div class="container-fluid">
	             <!-- <div class="progress">
	             <span>84% Complete</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
								
								</div>
								</div> -->
	                 <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                    <div class="card card-nav-tabs">
								<div class="header header-primary">
									<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#newowner" data-toggle="tab">
														<i class="material-icons">attach_money</i>
														Create Owner
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-content">
								
								<div class="tab-content text-center">

								<div class="tab-pane active" id="newowners">
								<form class="form" role="form" method="POST" action="{{ route('ow.createowner') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">playlist_add</i>
											</span>
											<input id="newowner" type="text" class="form-control" placeholder="Owner name.." name="owner" required>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Owner</button>
	                                    <div class="clearfix"></div>
	                                    </form>
										</div>
									</div>
								</div>
							</div>
	                    </div>
	                </div>
	            </div>
	            <div class="container-fluid">
	             <!-- <div class="progress">
	             <span>84% Complete</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
								
								</div>
								</div> -->
	                 <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                    <div class="card card-nav-tabs">
								<div class="header header-primary">
									<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#newcategory" data-toggle="tab">
														<i class="material-icons">view_compact</i>
														Create Category
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-content">
								
								<div class="tab-content text-center">

								<div class="tab-pane active" id="newcategory">
								<form class="form" role="form" method="POST" action="{{ route('ct.createcategory') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">playlist_add</i>
											</span>
											<input id="newcategory" type="text" class="form-control" placeholder="Category name.." name="category" required>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Category</button>
	                                    <div class="clearfix"></div>
	                                    </form>
										</div>
									</div>
								</div>
							</div>
	                    </div>
	                </div>
	            </div>


	            <div class="container-fluid">
	             <!-- <div class="progress">
	             <span>84% Complete</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
								
								</div>
								</div> -->
	                 <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                    <div class="card card-nav-tabs">
								<div class="header header-primary">
									<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#newtag" data-toggle="tab">
														<i class="material-icons">view_list</i>
														Create Tag/Type
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-content">
								
								<div class="tab-content text-center">

								<div class="tab-pane active" id="newtag">
								<form class="form" role="form" method="POST" action="{{ route('tg.createtag') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">add_box</i>
											</span>
											<input id="newtag" type="text" class="form-control" placeholder="Tag name.." name="tag" required>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Tag</button>
	                                    <div class="clearfix"></div>
	                                    </form>
										</div>
									</div>
								</div>
							</div>
	                    </div>
	                </div>
	            </div>

	            <div class="container-fluid">
	             <!-- <div class="progress">
	             <span>84% Complete</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
								
								</div>
								</div> -->
	                 <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                    <div class="card card-nav-tabs">
								<div class="header header-primary">
									<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#newtown" data-toggle="tab">
														<i class="material-icons">add_location</i>
														Create Town
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-content">
								
								<div class="tab-content text-center">

								<div class="tab-pane active" id="newtown">
								<form class="form" role="form" method="POST" action="{{ route('twn.createtown') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">add_location</i>
											</span>
											<input id="newtown" type="text" class="form-control" placeholder="Town.." name="town" required>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Town</button>
	                                    <div class="clearfix"></div>
	                                    </form>
										</div>
									</div>
								</div>
							</div>
	                    </div>
	                </div>
	            </div>

	            <div class="container-fluid">
	             <!-- <div class="progress">
	             <span>84% Complete</span>
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
								
								</div>
								</div> -->
	                 <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                    <div class="card card-nav-tabs">
								<div class="header header-primary">
									<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#newlocation" data-toggle="tab">
														<i class="material-icons">gps_fixed</i>
														Create Location
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-content">
								
								<div class="tab-content text-center">

								<div class="tab-pane active" id="newlocation">
								<form class="form" role="form" method="POST" action="{{ route('loc.createlocation') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="row">
                                	 <div class="col-md-4">
										<select class="selectpicker" data-style="btn btn-primary btn-round" name="town_id" title="Select Town" required>
										<option disabled selected>Select Town</option>
										@foreach ($towns as $town)
										<option value="{{$town->id}}">{{$town->name}}</option>
										@endforeach
										</select>
										</div>
                                       </div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">gps_fixed</i>
											</span>
											<input id="newlocation" type="text" class="form-control" placeholder="Location.." name="location" required>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Location</button>
	                                    <div class="clearfix"></div>
	                                    </form>
										</div>
									</div>
								</div>
							</div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        @endsection