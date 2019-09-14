<?php

function myRegister(){
	$register = "
		<div class='limiter'>
			<div class='container-login100' style='background-image: url(\"./img/login/images/img-01.jpg\");'>
				<div class='wrap-login100'>
					<form class='login100-form validate-form'>
						
						<span class='login100-form-title p-t-20 p-b-45' style=\"font-size: 50px !important; color: #fdbb00 !important;\">
							Donate2Day
						</span>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Name is required'>
							<input class='input100' type='text' name='name' placeholder='Name'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-user-circle'></i>
							</span>
						</div>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Email is required'>
							<input class='input100' type='email' name='email' placeholder='Email'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-envelope'></i>
							</span>
						</div>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Username is required'>
							<input class='input100' type='text' name='username' placeholder='Username'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-user'></i>
							</span>
						</div>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Password is required'>
							<input class='input100' type='password' name='password' placeholder='Password'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-lock'></i>
							</span>
						</div>

						<div class='wrap-input100 validate-input m-b-10' data-validate = 'Confirm Password is required'>
							<input class='input100' type='password' name='confirm_password' placeholder='Confirm Password'>
							<span class='focus-input100'></span>
							<span class='symbol-input100'>
								<i class='fa fa-lock'></i>
							</span>
						</div>

						<div class='container-login100-form-btn p-t-10'>
							<button class='login100-form-btn'>
								Register
							</button>
						</div>

						<div class='container-login100-form-btn p-t-10'>
							<a class='login100-form-btn-revert' href='index.php?login'>
								Back To Login
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	";
	
	echo $register;
}

?>