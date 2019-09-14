<?php

function myLogin(){
	$login = "
		<div class='limiter'>
			<div class='container-login100' style='background-image: url(\"./img/login/images/img-01.jpg\");'>
				<div class='wrap-login100'>
					<form class='login100-form validate-form'>
						
						<span class='login100-form-title p-t-20 p-b-45' style=\"font-size: 50px !important; color: #fdbb00 !important;\">
							Donate2Day
						</span>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Username is required'>
							<input class='input100' type='text' name='username' placeholder='Username'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-user'></i>
							</span>
						</div>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Password is required'>
							<input class='input100' type='password' name='pass' placeholder='Password'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-lock'></i>
							</span>
						</div>

						<div class='container-login100-form-btn p-t-10'>
							<button class='login100-form-btn'>
								Login
							</button>
						</div>

						<div class='container-login100-form-btn p-t-10'>
							<a class='login100-form-btn-revert' href='index.php?register'>
								Create new account
							</a>
						</div>

						<div class='text-center w-full p-t-25'>
							<a href='#' class='txt1'>
								Forgot Password?
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	";
	
	echo $login;
}

?>