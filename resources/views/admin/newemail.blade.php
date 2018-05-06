@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
<div id="app">
	            <div class="container-fluid">
	                 <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                    <div class="card card-nav-tabs">
								<div class="header header-primary">
									<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<ul class="nav nav-tabs" data-tabs="tabs">
											<li class="active">
													<a href="#coverimage" data-toggle="tab">
														<i class="material-icons">add_a_photo</i>
														Select Covermage
													</a>
												</li>
												<li>
													<a href="#article" data-toggle="tab">
														<i class="material-icons">create</i>
														Write Email
													</a>
												</li>
												<li>
													<a href="#links" data-toggle="tab">
														<i class="material-icons">device_hub</i>
														Links
													</a>

												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-content">
								<form class="form" role="form" method="POST" action="{{ route('em.newemail') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
								<div class="tab-content text-center">
								<div class="tab-pane active" id="coverimage">
								<div class="col-md-8">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="margin-left: 150px">
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
							  </div>
								<div class="tab-pane" id="article">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<textarea class="form-control" name="subject" placeholder="Subject..." rows="1"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<textarea class="form-control" name="greetings" placeholder="Greetings..." rows="1"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<textarea class="form-control" name="content" placeholder="Content..." rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="clearfix"></div>
										</div>
										<div class="tab-pane" id="links">
										<div class="row">
										<div class="col-md-4">
										<select class="selectpicker" data-style="btn btn-primary btn-round" name="sendto" title="Send to..." required>
										<option disabled selected>Send to?</option>
										<option value="All">All Subscribed</option>
										@foreach ($usersto as $userto)
										<option value="{{$userto->email}}">{{$userto->email}}</option>
										@endforeach
										</select>
										</div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">toys</i>
											</span>
											<input id="page" type="text" class="form-control" placeholder="Page Link" name="pagelink">
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Email</button>
	                                    <div class="clearfix"></div>
										</div>
									</div>
									</form>
								</div>
							</div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        </div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
        $(document).ready(function() {
            $('.summernote').summernote({
              height:300,
            });
        });
</script>
<script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img/>");
                        img.attr("style", "height:150px;width: 150px;margin: 5px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });
});
</script>

	        @endsection