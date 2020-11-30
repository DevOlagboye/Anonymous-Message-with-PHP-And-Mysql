<?php
include_once 'includes/dbh.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anonymous</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo-icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">
			<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($fullUrl, "Password-Change=Success") == true) {
		echo '<div class=" text-center alert alert-success" role="alert" id="alert">Password Changed!</div>';
	}elseif (strpos($fullUrl, "Password-Change=Error") == true) {
		echo '<div class="text-center alert alert-danger" role="alert" id="alert">Password-Change Error! Kindly Try again</div>'; 
	}
?>
<script>
				let alert = document.querySelector("#alert");
				setTimeout(function(){$(alert).fadeOut();}, 10000);
				</script>
			<img src="images/logo-icon.png" alt="" id="img-logo" class="mb-3">
				<form class="login100-form validate-form" method="POST" action="includes/change-password.php">
					<span class="login100-form-title pb-2">
						Change Password
					</span>
					<div class="wrap-input100 m-b-23">
                        <span class="label-input100">Your Password</span>
                        
						<input class="input100" type="text" name="password" value="<?php echo $_SESSION['password'] ;?>" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="change-password-button" >
                            <i class="fa fa-long-arrow-right" style="margin-right: 10px;"></i>Change Password
							</button>
						</div>
                    </div><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="home.php" class="login100-form-btn">
                            <i class="fa fa-long-arrow-left" style="margin-right: 10px;"></i> Go Back 
							</a>
						</div>
                    </div><br>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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