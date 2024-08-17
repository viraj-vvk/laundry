<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" id="parent">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						<a class="login100-form-title-1" href="../">Home</a> | Change Password
					</span>
				</div>
				<?php
				if(!isset($_POST['username']) && !isset($_POST['mail'])){
				 ?>
				<form class="login100-form validate-form" action="" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
					<?php
					$otp = "111111";
					if(!isset($_GET['username'])){
				 	?>
						<input class="input100" type="text" name="username" placeholder="Enter username">
					<?php
					}
						else {
							?>
			 				<input class="input100" type="text" name="username" placeholder="Enter username" value="<?php echo $_GET['username']; ?>" disabled>
			 				<?php
	 					}
				 		?>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate = "E-mail ID is required">
						<span class="label-input100">Mail ID</span>
						<input class="input100" type="mail" name="mail" id="mail" placeholder="Enter Mail ID">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
				</form>
				<?php
			}
			else if(isset($_POST['mail']) && isset($_POST['username'])){
				$otp = "123456";
				mail($_POST['mail'],"My subject",$otp);
				?>
				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Mail Id</span>
						<input class="input100" type="text" name="mail" placeholder="Enter username" value="<?php	echo $_POST['mail'];	?>">
						<span class="focus-input100"></span>
					</div>
					<input type="hidden" value="<?php echo $otp;	?>" name="otp1">
					<div class="wrap-input100 validate-input m-b-26" data-validate = "Password is required">
						<span class="label-input100">OTP</span>
						<input class="input100" type="text" name="otp" id="otp" placeholder="Enter OTP">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Verify
						</button>
					</div>
				</form>
				<?php
			}
			if(isset($_POST['mail']) && isset($_POST['otp'])){
				if($_POST['otp1']==$_POST['otp']){
					?><script>	alert("OTP Matched");	</script><?php
					?>
					<form class="login100-form validate-form" method="post">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="text" name="password" placeholder="Enter New Password" >
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate = "Password is required">
							<span class="label-input100">Confirm Password</span>
							<input class="input100" type="password" name="password" id="password" placeholder="Enter Password Again">
							<span class="focus-input100"></span>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Change Password
							</button>
						</div>
					</form>
					<?php
				}
				else {
					?>
					<script>	alert("Password Not Matched");	</script>
					<div class="login100-form m-l-65">
						<a href="forgetPass.php">
							<button class="login100-form-btn">
								Try Again
							</button>
						</a>
					</div>
					<?php
				}
			}
			 ?>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
