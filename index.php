<?php
session_start();
include('session.php');
include('control.php');

if(isset($_GET['login']) || isset($_GET['register'])){
	$html = "

	<!DOCTYPE html>
	<html>
		<head>
			<!-- Required meta tags -->
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
			<link rel='icon' href='img/favicon.png' type='image/png'>
			<title>Donate2Day</title>
			<link rel='icon' type='image/png' href='./img/login/images/icons/favicon.ico'/>
			<link rel='stylesheet' type='text/css' href='./vendors/login/vendor/bootstrap/css/bootstrap.min.css'>
			<link rel='stylesheet' type='text/css' href='./fonts/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
			<link rel='stylesheet' type='text/css' href='./fonts/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'>
			<link rel='stylesheet' type='text/css' href='./vendors/login/vendor/animate/animate.css'>
			<link rel='stylesheet' type='text/css' href='./vendors/login/vendor/css-hamburgers/hamburgers.min.css'>
			<link rel='stylesheet' type='text/css' href='./vendors/login/vendor/select2/select2.min.css'>
			<link rel='stylesheet' type='text/css' href='./css/login/css/util.css'>
			<link rel='stylesheet' type='text/css' href='./css/login/css/main.css'>
			
			<link href='https://fonts.googleapis.com/css?family=Poppins:500,600|Roboto' rel='stylesheet'> 
		</head>
		<body>";
		if(isset($_GET['login'])){
			myContent('myLogin');
		} elseif(isset($_GET['register'])){
			myContent('myRegister');
		}
			
	$html .= "		
			<script src='./vendors/login/vendor/jquery/jquery-3.2.1.min.js'></script>
			<script src='./vendors/login/vendor/bootstrap/js/popper.js'></script>
			<script src='./vendors/login/vendor/bootstrap/js/bootstrap.min.js'></script>
			<script src='./vendors/login/vendor/select2/select2.min.js'></script>
			<script src='./js/login/js/main.js'></script>
		</body>

	</html>

	";
} else {
	
	$html = "

	<!DOCTYPE html>
	<html>
		<head>
			<!-- Required meta tags -->
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
			<link rel='icon' href='img/favicon.png' type='image/png'>
			<title>Donate2Day</title>
			<!-- Bootstrap CSS -->
			<link rel='stylesheet' href='./css/bootstrap.css'>
			<link rel='stylesheet' href='./vendors/linericon/style.css'>
			<link rel='stylesheet' href='./css/font-awesome.min.css'>
			<link rel='stylesheet' href='./vendors/lightbox/simpleLightbox.css'>
			<link rel='stylesheet' href='./vendors/nice-select/css/nice-select.css'>
			<!-- main css -->
			<link rel='stylesheet' href='./css/style.css'>
			<link rel='stylesheet' href='./css/responsive.css'>
			
			<link href='https://fonts.googleapis.com/css?family=Poppins:500,600|Roboto' rel='stylesheet'> 
		</head>
		<body>";
		
			myPrintFunction('myHeader');
			myPrintFunction('myBanner');
			myContent('myHome');
			myPrintFunction('myFooter');

	$html .= "		
			<script src='js/jquery-3.2.1.min.js'></script>
			<script src='js/popper.js'></script>
			<script src='js/bootstrap.min.js'></script>
			<script src='js/stellar.js'></script>
			<script src='vendors/lightbox/simpleLightbox.min.js'></script>
			<script src='vendors/nice-select/js/jquery.nice-select.min.js'></script>
			<script src='js/jquery.ajaxchimp.min.js'></script>
			<script src='js/mail-script.js'></script>
			<script src='js/countdown.js'></script>
			<!--gmaps Js-->
			<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE'></script>
			<script src='js/gmaps.min.js'></script>
			<script src='js/theme.js'></script>
		</body>

	</html>

	";

}
	
echo $html;

?>