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
													<a href="#images" data-toggle="tab">
														<i class="material-icons">add_a_photo</i>
														Select Images
													</a>
												</li>
												<li>
													<a href="#article" data-toggle="tab">
														<i class="material-icons">create</i>
														Write Article
													</a>
												</li>
												<li>
													<a href="#createcategories" data-toggle="tab">
														<i class="material-icons">view_compact</i>
														Classification
													</a>

												</li>
												<li>
													<a href="#createlocations" data-toggle="tab">
														<i class="material-icons">gps_not_fixed</i>
														Locations
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
								<form class="form" role="form" method="POST" action="{{ route('ps.createpost') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
								<div class="tab-content text-center">
								<div class="tab-pane active" id="coverimage">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
								<div class="fileinput-new card card-raised">
									<img src="/assets/img/image_placeholder.jpg" alt="..." style="height: 45vh; width: 30vw">
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
								<div class="tab-pane" id="images">
								<div class="fileinput fileinput-new text-center" data-provides="fileinput">
								<div class="btn btn-primary">
								<input id="fileupload" type="file" multiple="multiple" name="images[]" readonly />
								</div>
								<hr />
								<div class="clearfix"></div>
								<div class="clearfix"></div>

								<div class="card-image" id="dvPreview" style="margin: 10px">
								</div>
								</div>
							  </div>
								<div class="tab-pane" id="article">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<textarea class="form-control" name="title" placeholder="The Title..." rows="1" maxlength="35" required></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<textarea class="form-control" name="description" placeholder="Description..." minlength="100" maxlength="160" rows="1" required></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<input class="form-control" min="200000" name="price" placeholder="Price..." type="number" required></input>
		                        					</div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"></label>
								    					<input class="form-control" name="commission" placeholder="Commission..." type="number" min="10000"></input>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                    <p class="text-danger">Text Only (Video and Images in next Version)</p>
	                                    <textarea name="body" class="summernote" id="summernote"></textarea>
	                                    </div>
	                                    <div class="clearfix"></div>
										</div>
										<div class="tab-pane" id="createcategories">
										<div class="row" style="margin-left: 1px">
										<div class="col-md-4">
										<select class="selectpicker" data-style="btn btn-primary btn-round" name="owner" title="Select Owner" required>
										<option disabled selected>Select Owner</option>
										@foreach ($owners as $owner)
										<option value="{{$owner->id}}">{{$owner->name}}</option>
										@endforeach
										</select>
										</div>
										<div class="col-md-4">
										<select class="selectpicker" multiple data-style="btn btn-primary btn-round" name="category[]" title="Select Category" required>
										<option disabled>Select Category</option>
										@foreach ($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
										</select>
										</div>
										</div>
										<div class="row" style="margin-left: 1px">
										<div class="col-md-8">
										<select class="selectpicker" multiple data-style="btn btn-primary btn-round" name="tags[]" title="Select Tags" required>
										<option disabled>Select Tags</option>
										@foreach ($tags as $tag)
										<option value="{{$tag->id}}">{{$tag->name}}</option>
										@endforeach
										</select>
										</div>
										</div>
										<div class="clearfix"></div>
										</div>
										<div class="tab-pane" id="createlocations">
										<div class="row" style="margin-left: 1px">
										<div class="col-md-4">
										<select class="selectpicker" data-style="btn btn-primary btn-round" id="townid" name="town" title="Select Town" required>
										<option disabled selected>Select Town</option>
										@foreach ($towns as $town)
										<option value="{{$town->id}}">{{$town->name}}</option>
										@endforeach
										</select>
										</div>
										<div class="col-md-4">
										<select class="selectpicker" id="townlocations" data-style="btn btn-primary btn-round" name="location" title="Select Location" required>
										<option disabled selected>Select Location</option>
										
										</select>
										</div>
										<div  id="row">
										<div id="map" style="margin-left: 180px"></div> 
                                                <dt><label for="form-account-latitude">Lat:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="lat" name="latitude" value="{{ old('latitude') }}">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-longitude" >Lon:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="lng" name="longitude" value="{{ old('longitude') }}">
                                                </div><!-- /.form-group --></dd>
										</div>
										</div>
										<div class="clearfix"></div>
										</div>
										<div class="tab-pane" id="links">
										<div class="row">
										<div class="col-md-4">
										<select class="selectpicker" data-style="btn btn-primary btn-round" name="type" title="Post Type" required>
										<option disabled selected>Purchase, Blog or Prime?</option>
										<option value="Purchase">Purchase</option>
										<option value="Blog">Blog</option>
										<option value="Prime">Prime</option>
										</select>
										</div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">toys</i>
											</span>
											<input id="purchase" type="text" class="form-control" placeholder="Purchase Link" name="purchaselink">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">videocam</i>
											</span>
										<input id="videolink" type="text" class="form-control" placeholder="Video Link" name="videolink">
										</div>
										<button type="submit" class="btn btn-primary pull-right">Create Post</button>
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
                        img.attr("style", "height:100px;width: 100px;margin: 5px");
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


     $('#townid').on('change', function() {

            var townID = $(this).val();
            if(townID) {
            $.ajax({
            type: 'get',
            url: '/newpost/location/'+townID,
            dataType: "json",
            success: function(location) {
            $('#townlocations').empty();


            $.each(location, function (i, item) {
           $('#townlocations').append($('<option>', { 
                       value: item.id,
                        text: item.name,
                        html: item[i]
                         }));
                               })
           $('#townlocations').selectpicker('refresh');
                         }

                  });

            }else{

                $('#townlocations').empty();

            }

        });
});
</script>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATyoHTTO6d72ponwOcYvN6s3LkDtA-hL0&signed_in=true&libraries=places&callback=initialize" async defer></script>
<script type="text/javascript">
   function initialize() {
   initMap();
   initAutoComplete();
    } 
  var map, marker;

   function initMap() {
        var nakuru = {lat: -0.284072, lng: 36.072652};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: nakuru
        });
        marker = new google.maps.Marker({
          position: nakuru,
          map: map,
          draggable: true,
          rotateControl: true
        });
        }

   function initAutoComplete(){
          var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap')); 

          google.maps.event.addListener(searchBox,'places_changed', function(){
           var places = searchBox.getPlaces();
           var bounds = new google.maps.LatLngBounds();
           var i, place;
           for(i=0; place=places[i];i++){
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location);
           }

           map.fitBounds(bounds);
           map.setZoom(15);


          });

          google.maps.event.addListener(marker,'position_changed',function(){

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);
          }); 
        }
</script>

	        @endsection