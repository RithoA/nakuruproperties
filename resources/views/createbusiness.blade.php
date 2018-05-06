@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
<div id="app">
<div class="main main-raisedlist">
<div class="page-header header-filter" style="background-image: url('/assets/img/examples/office2.jpg');">
            <div class="container">
                <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h1 class="title">Kuza Biashara Yako!</h1>
	                    <h4>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. Take the chance to show off all your potential.</h4>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="card card-raised card-form-horizontal">
							<div class="card-content">
								<form method="POST"  role="form" action="{{ route('bs.registerbusiness') }}">
								{{ csrf_field() }}
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
						        	        	<input type="text" name="businessname"  placeholder="Business Name" class="form-control" />
						                	</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
						        	        	<input type="text" name="category"  placeholder="Business Category" class="form-control" />
						                	</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
						        	        	<input type="text" name="subcategory"  placeholder="Business Subcategory" class="form-control" />
						                	</div>
										</div>
										<div class="col-md-3">
										<a href="#pablo"><button type="submit" class="btn btn-primary btn-block">Create</button></a>
											
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
        </div>
        </div>
        @endsection