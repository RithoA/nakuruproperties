	 <template>
	            <div class="container-fluid">
	                <div class="row" style="padding-top: 25px">
    					 <div class="card">
	                            <div class="card-header card-header-icon" data-background-color="purple">
	                            <i class="material-icons">perm_identity</i>  
	                            </div>
	                            <input type="hidden" name="type" value="photo" v-model="type">
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
										<input type="file" name="coverimage" accept="Image"/>
									</span>
								</div>
							    </div>
							    </div>
                                <div class="col-md-6" style="padding-top: 25px">
										<div class="form-group">
	                                                <h4><i class="material-icons">title</i> Title</h4>
													<div class="form-group label-floating">
								    					<textarea class="form-control" rows="2" name="title" placeholder="title.." v-model="title"></textarea>
		                        					</div>
	                                    </div>
										<div class="form-group">
	                                                <h4><i class="material-icons">description</i> Description</h4>
													<div class="form-group label-floating">
								    					<textarea class="form-control" rows="5" name="description" placeholder="my thoughts about this photo are.." v-model="description"></textarea>
		                        			       </div>
	                                            </div>
	                             </div>
	                             <button type="submit" class="btn btn-primary pull-right" style="margin-top: 130px"  :disabled="not_working" @click="create_photo()">Create</button>
	                                    <div class="clearfix"></div>
                                </div>
                	      </div>
	                </div>
	            </div>
</template>

<script>
      export default {
            mounted() {

            },
            data() {
                  return {
                  	    type: '',
                  	    coverimage: '',
                        title: '',
                        description: '',
                        not_working: true
                  }
            },
            methods: {
                  create_photo() {
                        axios.post('/create/photo', { type: this.type, coverimage: this.coverimage, title: this.title, description: this.description})
                            .then((resp) => {
                                  this.type = ''
                                  this.coverimage = ''
                                  this.title = ''
                                  this.description = ''
                                  console.log(resp)
                            })
                  }
            },
            watch: {
                  title() {
                        if(this.title.length > 0)
                              this.not_working = false
                        else
                              this.not_working = true
                  }
            }

      }
</script>