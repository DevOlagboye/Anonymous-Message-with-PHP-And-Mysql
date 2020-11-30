<?php
session_start();
include_once 'includes/dbh.php';

$username = $_SESSION['username'];
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
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
			<div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54 text-center">
			<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($fullUrl, "upload=Success") == true) {
		echo '<div class=" text-center alert alert-success" role="alert" id="alert">Upload Successful!</div>';
	}
?>
				<script>
				let alert = document.querySelector("#alert");
				setTimeout(function(){$(alert).fadeOut();}, 10000);
				</script>
			<?php
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($result)){
					$profileimage = $row['profileimg'];
					$uploadedprofile = $row['uploadedimg'];
				}
			}
			if ($uploadedprofile == 0) {
				echo "<div class='alert alert-danger' role='alert'><a href='upload.php' class='alert-link'>You Are Yet to Upload Your Profile Image Click Here to Upload Your Profile Image</a></div>";
			}else{
				echo "<div class='image'>
				<img src='images/Uploads/$profileimage' alt='' class='mb-3 img-thumbnail img__img'>
				<div class='image__overlay image__overlay--blur'>
				<a href='upload.php' class='text-center text-light'>Change Profile <i class='fa fa-upload'></i></a>
				</div>
				</div>";
			}			
			?>	
            <span class="login100-form-title pb-2">
				<?php
				$sql = "SELECT * FROM users where username ='$username'";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo $row['username']."'s  Profile";
						echo "<p id='onlinelink'>Mydomain/sendmessage.php?username=".$row['username']."<i class='fa fa-clone' ></i></p>";
						echo "<p id='link'>localhost/Anonymous/Login/sendmessage.php?username=".$row['username']."<i class='fa fa-clone' onclick='copyText()'></i></p>";
					}
				}
				?>
					</span>
                    <br>
                    <p class="text-center">Share your profile link to get responses from your friend. Go to "View Messages" to check out the responses.</p><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="messages.php" class="login100-form-btn">
								View Messages <i class="fa fa-long-arrow-right" style="margin-left: 10px;"></i>
							</a>
						</div>
					</div><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" >
                            <i class="fa fa-share" style="margin-right: 10px;"></i>Share my Profile 
							</button>
						</div>
                    </div><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" >
                            <i class="fa fa-whatsapp" style="margin-right: 10px;"></i>Share on WhatsApp 
							</button>
						</div>
                    </div><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" >
                            <i class="fa fa-facebook" style="margin-right: 10px;"></i>Share on Facebook 
							</button>
						</div>
                    </div><br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" >
                            <i class="fa fa-instagram" style="margin-right: 10px;"></i>Share on Instagram 
							</button>
						</div>
					</div><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="settings.php" class="login100-form-btn" >
                            <i class="fa fa-sliders" style="margin-right: 10px;"></i>Settings
							</a>
						</div>
					</div>
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
	<script src="js/sweetalert.min.js"></script>
	  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	  <script>
		  Swal.fire(
  'Welcome Back!',
  '<?php echo $_SESSION['username'];  ?> Welcome to Your Dashboard',
  'success',
)
	  </script> -->
	  <!-- <script>
		  swal({
      title: 'Welcome Back',
    	text: '<?php echo $_SESSION['username'];  ?> Welcome to Your Dashboard',
      icon: 'success',
      button: 'Okay',
    }); 
		
	  </script> -->
	<script>
		function copyText(link){
			var link = document.createRange();
			link.selectNode(document.getElementById("link"));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(link);
			document.execCommand('copy');
			window.getSelection().removeAllRanges();
			swal({
      title: 'Copied',
    //   text: "Copied",
      icon: 'success',
      button: 'Okay',
    }); 
		}
	</script>
</body>
</html>