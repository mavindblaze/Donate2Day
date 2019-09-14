<?php

function myBanner(){
	$user = isLogin();
	$isLogin = $user['login'];
	$user_ID = $user['ID'];
	
	$banner = "
		<section class='home_banner_area'>
			<div class='banner_inner'>
				<div class='container'>
					<div class='banner_content'>
						<p class='upper_text'>Give a hand</p>
						<h2>to make the better world</h2>
						<p>
							That don't lights. Blessed land spirit creature divide our made two 
							itself upon you'll dominion waters man second good you they're divided upon winged were replenish night
						</p>
						<a class='primary_btn mr-20' href='#'>Fund Someone</a>
						<a class='primary_btn yellow_btn text-white' href='causes.html'>Start FundRaising</a>
					</div>
				</div>
			</div>
		</section>
	";
	
	if( $isLogin && $user_ID > 0){
		echo "";
	} else {
		echo $banner;
	}
}

?>