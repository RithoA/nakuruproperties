@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
<div id="app">
	             <div class="container-fluid" style="margin-top: 25px">
	                <div class="row" >
	                    <div class="col-md-5 col-md-offset-3">
	                        <div class="card">
	                            <div class="card-header card-header-icon" data-background-color="purple">
	                            <i class="material-icons">perm_identity</i>  
	                            </div>
	                            <div class="card-content">
	                            <h4 class="card-title">Create User
	                                 <form class="form" role="form" method="POST" action="{{ route('us.createuser') }}">
                                      {{ csrf_field() }}
	                                    <div class="row">
	                                        <div class="col-md-10">
												<div class="form-group label-floating">
													<label class="control-label">Email:</label>
									   <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required>
									   </div>
                                            @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                         @endif
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-10">
											<div class="form-group dropup">
                                       <select id="gender" name="gender" class="form-control selectpicker" data-style="form-control" title="Gender.." value="{{ old('gender') }}" required>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                       </select>
                                       @if ($errors->has('gender'))
                                            <span class="help-block">
                                           <strong>{{ $errors->first('gender') }}</strong>
                                          </span>
                                         @endif
                                      		 </div>
	                                        </div>
	                                        </div>
	                                    <div class="row">
	                                        <div class="col-md-10">
												<div class="form-group dropup">
                                        <select id="type" name="type" class="form-control selectpicker" data-style="form-control" title="User Type" value="{{ old('type') }}" required>
                                        <option value="user">User</option>
                                        <option value="client">Client</option>
                                       </select>
                                       @if ($errors->has('type'))
                                            <span class="help-block">
                                           <strong>{{ $errors->first('type') }}</strong>
                                          </span>
                                         @endif
                                      		 </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-8">
										  <div class="form-group label-floating">
										 <label class="control-label">Password:</label>
										  <input id="password" class="form-control" name="password" required/>
										  </div>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                           <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                         @endif
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Confirm Password:</label>
													<input id="password-confirm" class="form-control" name="password_confirmation" required />
												</div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right">Create</button>
	                                    <div class="clearfix"></div>
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