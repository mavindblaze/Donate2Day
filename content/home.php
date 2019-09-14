<?php
function myHome(){
	$user = isLogin();
	$isLogin = $user['login'];
	$user_ID = $user['ID'];
	
	//START GUEST PART
	$cause_area = "
		<section class='causes_area'>
			<div class='container'>
				<div class='main_title'>
					<h2>Our major causes</h2>
					<p>Creepeth called face upon face yielding midst is after moveth </p>
				</div>
				<div class='row'>
					<div class='col-lg-4 col-md-6'>
						<div class='single_causes'>
							<h4>Give Donation</h4>
							<img src='img/causes/c1.png' alt=''>
							<p>
								It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.
							</p>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='single_causes'>
							<h4>Give Inspiration</h4>
							<img src='img/causes/c2.png' alt=''>
							<p>
								It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.
							</p>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='single_causes'>
							<h4>Become Bolunteer</h4>
							<img src='img/causes/c3.png' alt=''>
							<p>
								It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	";
	
	$about_us = "
		<section class='about_area section_gap_bottom'>
			<div class='container'>
				<div class='row'>	
					<div class='single_about row'>
						<div class='col-lg-6 col-md-12 text-center about_left'>
							<div class='about_thumb'>
								<img src='img/about-img.jpg' class='img-fluid' alt=''>
							</div>
						</div>
						<div class='col-lg-6 col-md-12 about_right'>
							<div class='about_content'>
								<h2>
									We are nonprofit team <br>
										and work worldwide
								</h2>
								<p>
										Their multiply doesn't behold shall appear living heaven second 
										roo lights. Itself hath thing for won't herb forth gathered good 
										bear fowl kind give fly form winged for reason
								</p>
								<p>
										Land their given the seasons herb lights fowl beast whales it 
										after multiply fifth under to it waters waters created heaven 
										very fill agenc to. Dry creepeth subdue them kind night behold 
										rule stars him grass waters our without 
								</p>
								<a href='#' class='primary_btn'>Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	";
	
	$category = "
		<section class='features_causes'>
			<div class='container'>
				<div class='main_title'>
					<h2>Featured causes</h2>
					<p>Creepeth called face upon face yielding midst is after moveth </p>
				</div>

				<div class='row'>
					<div class='col-lg-4 col-md-6'>
						<div class='card'>
							<div class='card-body'>
								<figure>
									<img class='card-img-top img-fluid' src='img/features/fc1.jpg' alt='Card image cap'>
								</figure>
								<div class='card_inner_body'>
									<h4 class='card-title'>Education for every child</h4>
									<p class='card-text'>
										Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
									</p>
									<div class='d-flex justify-content-between raised_goal'>
										<br/>
									</div>
									<div class='d-flex justify-content-between donation align-items-center'>
										<a href='#' class='primary_btn'>donate</a>
										<p><span class='lnr lnr-heart'></span> Donate2Day</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='card'>
							<div class='card-body'>
								<figure>
									<img class='card-img-top img-fluid' src='img/features/fc2.jpg' alt='Card image cap'>
								</figure>
								<div class='card_inner_body'>
									<h4 class='card-title'>Feeding the hungry people</h4>
									<p class='card-text'>
										Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
									</p>
									<div class='d-flex justify-content-between raised_goal'>
										<br/>
									</div>
									<div class='d-flex justify-content-between donation align-items-center'>
										<a href='#' class='primary_btn'>donate</a>
										<p><span class='lnr lnr-heart'></span> Donate2Day</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='card'>
							<div class='card-body'>
								<figure>
									<img class='card-img-top img-fluid' src='img/features/fc3.jpg' alt='Card image cap'>
								</figure>
								<div class='card_inner_body'>
									<h4 class='card-title'>Providing cloth people</h4>
									<p class='card-text'>
										Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
									</p>
									<div class='d-flex justify-content-between raised_goal'>
										<br/>
									</div>
									<div class='d-flex justify-content-between donation align-items-center'>
										<a href='#' class='primary_btn'>donate</a>
										<p><span class='lnr lnr-heart'></span> Donate2Day</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='card'>
							<div class='card-body'>
								<figure>
									<img class='card-img-top img-fluid' src='img/features/fc1.jpg' alt='Card image cap'>
								</figure>
								<div class='card_inner_body'>
									<h4 class='card-title'>Education for every child</h4>
									<p class='card-text'>
										Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
									</p>
									<div class='d-flex justify-content-between raised_goal'>
										<br/>
									</div>
									<div class='d-flex justify-content-between donation align-items-center'>
										<a href='#' class='primary_btn'>donate</a>
										<p><span class='lnr lnr-heart'></span> Donate2Day</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='card'>
							<div class='card-body'>
								<figure>
									<img class='card-img-top img-fluid' src='img/features/fc2.jpg' alt='Card image cap'>
								</figure>
								<div class='card_inner_body'>
									<h4 class='card-title'>Feeding the hungry people</h4>
									<p class='card-text'>
										Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
									</p>
									<div class='d-flex justify-content-between raised_goal'>
										<br/>
									</div>
									<div class='d-flex justify-content-between donation align-items-center'>
										<a href='#' class='primary_btn'>donate</a>
										<p><span class='lnr lnr-heart'></span> Donate2Day</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-4 col-md-6'>
						<div class='card'>
							<div class='card-body'>
								<figure>
									<img class='card-img-top img-fluid' src='img/features/fc3.jpg' alt='Card image cap'>
								</figure>
								<div class='card_inner_body'>
									<h4 class='card-title'>Providing cloth people</h4>
									<p class='card-text'>
										Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
									</p>
									<div class='d-flex justify-content-between raised_goal'>
										<br/>
									</div>
									<div class='d-flex justify-content-between donation align-items-center'>
										<a href='#' class='primary_btn'>donate</a>
										<p><span class='lnr lnr-heart'></span> Donate2Day</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	";
	
	$CTA = "
		<div class='cta-area section_gap overlay'>
			<div class='container'>
				<div class='row justify-content-center'>
					<div class='col-lg-7'>
						<h1>Become a volunteer</h1>
						<p>
							So seed seed green that winged cattle in. Gathering thing made fly you're 
							divided deep leave on the medicene moved us land years living.
						</p>
						<a href='#' class='primary_btn yellow_btn rounded'>join with us</a>
					</div>
				</div>
			</div>
		</div>
	";
	//END GUEST PART
	
	//START USER PART
	
	//END USER PART
	
	
	if( $isLogin && $user_ID > 0){
		$home = "
		";
	} else {
		$home = "
			{$cause_area}
			{$about_us}
			{$category}
			{$CTA}
		";
	}
	
	echo $home;
}


?>