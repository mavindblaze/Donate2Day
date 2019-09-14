<?php

function myHeader(){
	$user = isLogin();
	if($user['login'] && $user['ID'] > 0){
		$header = "
			<header class='header_area'>
				<div class='main_menu'>
					<div class='container'>
						<nav class='navbar navbar-expand-lg navbar-light'>
							<div class='container'>
								<!-- Brand and toggle get grouped for better mobile display -->
								<a class='navbar-brand logo_h' href='index.html'><img src='img/logo.png' alt=''></a>
								<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
									<span class='icon-bar'></span>
									<span class='icon-bar'></span>
									<span class='icon-bar'></span>
								</button>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
									<ul class='nav navbar-nav menu_nav ml-auto'>
										<li class='nav-item active'><a class='nav-link' href='index.html'>Home</a></li> 
										<li class='nav-item'><a class='nav-link' href='about-us.html'>About</a></li> 
										<li class='nav-item'><a class='nav-link' href='causes.html'>Causes</a>
										<li class='nav-item submenu dropdown'>
											<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Pages</a>
											<ul class='dropdown-menu'>
												<li class='nav-item'><a class='nav-link' href='events.html'>Events</a>
												<li class='nav-item'><a class='nav-link' href='event-details.html'>Event Details</a>
												<li class='nav-item'><a class='nav-link' href='elements.html'>Elements</a></li>
											</ul>
										</li> 
										<li class='nav-item submenu dropdown'>
											<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Blog</a>
											<ul class='dropdown-menu'>
												<li class='nav-item'><a class='nav-link' href='blog.html'>Blog</a></li>
												<li class='nav-item'><a class='nav-link' href='single-blog.html'>Blog Details</a></li>
											</ul>
										</li> 
										<li class='nav-item'><a class='nav-link' href='contact.html'>Contact</a></li>
									</ul>
								</div> 
							</div>
						</nav>
					</div>
				</div>
			</header>
		";
	} else {
		$header = "
			<header class='header_area'>
				<div class='main_menu'>
					<div class='container'>
						<nav class='navbar navbar-expand-lg navbar-light'>
							<div class='container'>
								<!-- Brand and toggle get grouped for better mobile display -->
								<a class='navbar-brand logo_h' href='index.html'><img src='img/logo.png' alt=''></a>
								<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
									<span class='icon-bar'></span>
									<span class='icon-bar'></span>
									<span class='icon-bar'></span>
								</button>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
									<ul class='nav navbar-nav menu_nav ml-auto'>
										<li class='nav-item'><a class='nav-link' href='index.php?login'>JOIN US</a></li>
									</ul>
								</div> 
							</div>
						</nav>
					</div>
				</div>
			</header>
		";
	}
	
	echo $header;
}

?>