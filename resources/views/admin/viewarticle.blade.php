@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
<div id="app">
<div class="main main-raisedresults">
		<div class="container">
            <div class="section section-text">
                <div class="row">

				<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">


						<!-- Carousel Card -->
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="/assets/img/bg2.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
											</div>
										</div>
										<div class="item">
											<img src="/assets/img/bg3.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
											</div>
										</div>
										<div class="item">
											<img src="/assets/img/bg.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
											</div>
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
						<!-- End Carousel Card -->

					</div>
				</div>


			</div>

					<div class="col-md-8 col-md-offset-2">
						<h3 class="title">This is my Story:</h3>
						This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more. We are here to make life better.
						<br /> <br />
						And now I look and look around and there’s so many Kanyes I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.
						<p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more. We are here to make life better.
						<br /> <br />
						And now I look and look around and there’s so many Kanyes I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p>
						<p>We are here to make life better. And now I look and look around and there’s so many Kanyes I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br /> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p>
						<p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I'm so proud of the nr #1 song in the country. Panda! Good music 2016!</p>
						<p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I'm so proud of the nr #1 song in the country. Panda! Good music 2016!</p>
						<div class="col-md-6 col-md-offset-9" style="margin-top: 30px">
								<div class="stats">
                                             <a href="#pablo" class="text-danger"><i class="material-icons">favorite</i> 342</a> &middot;
                                             <a href="#pablo" class="text-info"><i class="material-icons">share</i> 45</a>&middot;
											 <a href="#pablo" class="text-warning"><i class="material-icons">bookmark</i></a> 
                               </div>
						</div>
						
    				</div>
				</div>
			</div>

			<div class="section section-blog-info">
                <div class="row">
					<div class="col-md-8 col-md-offset-2">
					
						<div class="card card-profile card-plain">
							<div class="row">
								<div class="col-md-2">
									<div class="card-avatar">
										<a href="#pablo">
											<img class="img" src="../assets/img/faces/card-profile1-square.jpg">
										</a>
									<div class="ripple-container"></div></div>
								</div>
								<div class="col-md-8">
									<h4 class="card-title">Alec Thompson</h4>
									<p class="description">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
								</div>
								<div class="col-md-2">
									 <h5><following :profile_user_id="2"></following></h5>
								</div>
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