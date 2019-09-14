<?php

function isLogin(){
	$user = array();
	if((isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == true) && (isset($_SESSION['user_ID']) && $_SESSION['user_ID'] != "")){

		$user['login'] = true;
		$user['ID'] = $_SESSION['user_ID'];
		
	} else {
		$user['login'] = false;
		$user['ID'] = 0;
	}
	
	return $user;
}

?>