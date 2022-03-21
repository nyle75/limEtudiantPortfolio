<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="AssetConnexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="AssetConnexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="AssetConnexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="AssetConnexion/css/main.css">
<!--===============================================================================================-->
<link href="assets/img/Logo.png" rel="icon">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/loup.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Connexion
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<?php
session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	header ('location: page-admin.php');
}

?>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="AssetConnexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="AssetConnexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="AssetConnexion/vendor/bootstrap/js/popper.js"></script>
	<script src="AssetConnexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="AssetConnexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="AssetConnexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="AssetConnexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="AssetConnexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="AssetConnexion/js/main.js"></script>

</body>
</html>

