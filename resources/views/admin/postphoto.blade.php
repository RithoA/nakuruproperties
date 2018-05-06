@extends('layouts.businessmain')
@section('businesscontent')
<div class="content">
<div id="app">
<div class="container-fluid">
	                <div class="row" style="padding-top: 25px">
	                <form class="form" role="form" method="POST" action="{{ route('ps.createphoto') }}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
    					 <div class="card">
	                            <div class="card-header card-header-icon" data-background-color="purple">
	                            <i class="material-icons">perm_identity</i>  
	                            </div>
	                            <input type="hidden" name="type" value="photo">
	                            <div class="card-content">
	                            <h4 class="card-title">Upload Photo</h4>
                                <div class="col-md-6">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="padding: 50px">
								<div class="fileinput-new card card-raised">
									<img src="/assets/img/image_placeholder.jpg" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists card card-raised"></div>
								<div>
									<span class="btn btn-raised btn-round btn-info btn-file">
										<span class="fileinput-new">Select Photo</span>
										<span class="fileinput-exists"><i class="material-icons">edit</i>Change Photo</span>
										<input type="file" name="coverimage" accept="Image" required/>
									</span>
								</div>
							    </div>
							    </div>
                                <div class="col-md-6" style="padding-top: 25px">
										<div class="form-group">
										<input class="form-control" name="business_id" type="hidden" value="{{ $mybusiness->id }}"></input>
										<input class="form-control" name="slug" type="hidden" value="{{ $mybusiness->slug }}"></input>
	                                                <h4><i class="material-icons">title</i> Title</h4>
													<div class="form-group label-floating">
								    					<textarea class="form-control" rows="2" name="title" placeholder="title.." required></textarea>
		                        					</div>
	                                    </div>
										<div class="form-group">
	                                                <h4><i class="material-icons">description</i> Description</h4>
													<div class="form-group label-floating">
								    					<textarea class="form-control" rows="5" name="description" placeholder="my thoughts about this photo are.."></textarea>
		                        			       </div>
	                                            </div>
	                             </div>
	                        <button type="submit" class="btn btn-primary pull-right" style="margin-top: 130px">Create</button>
	                                    
                                </div>
                	      </div>
                	      </form>
	                </div>
	            </div>
	            </div>          
</div>
@endsection