<div class="modal-dialog modal-notice">
    <div class="modal-content">
     <form class="form" role="form" method="GET" action="{{ route('sr.search') }}">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
        <h5 class="modal-title" id="myModalLabel">Search Property</h5>
      </div>
      <div class="modal-body">
        <div class="card card-refine card-plain">
							<div class="card-content">
								<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<select class="selectpicker" id="categories" name="category" data-style="form-control" title="Category" required>
										<option disabled> Select Category</option>
									</select>
								</div>
							</div>
							<div class="row">
							<div class="col-md-10 col-md-offset-1">
									<select class="selectpicker" id="towns" name="town" data-style="form-control" title="Town/Region">
										<option disabled> Select Town/Region</option>
									</select>
						   </div>
							</div>
							<div class="row">
							<div class="col-md-10 col-md-offset-1">
									<select class="selectpicker" id="locations" name="location[]" data-style="form-control" multiple title="Location">
										<option disabled> Select locations</option>
									</select>
						   </div>
							</div>
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<select id="tags" class="selectpicker" name="tag[]" data-style="form-control" multiple title="Type/Tag">
									<option disabled> Select Type/Tag</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5 col-md-offset-1">
									<div class="form-group label-floating">
								<label class="control-label">Minimum Price</label>
								<input type="number" id="min" name="min" value="200000" min="200000" max="1000000000" class="form-control">
							</div>
								</div>
								<div class="col-md-5">
									<div class="form-group label-floating">
								<label class="control-label">Maximum Price</label>
								<input type="number" id="max" name="max" value="500000" min="200000" max="1000000000" class="form-control">
							    </div>
								</div>
							</div>
					 </div>
					</div>
          </div>
      <div class="modal-footer text-center">
      <a data-dismiss="modal" style="margin-right: 10px"><button class="btn btn-primary btn-warning"><i class="material-icons text-white">cached</i> Cancel </button></a>
            <button type="submit" class="btn btn-primary btn-default"><i class="material-icons text-white">search</i> Search </button>
      </div>
	</form>
    </div> 
  </div>
  