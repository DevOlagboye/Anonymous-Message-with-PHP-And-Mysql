<?php

session_start();
include_once 'dbh.php';


                $username = $_GET['username'];
				$sql = "SELECT * FROM users where username= '$username'";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$username = $row['username'];
					}
				}

if (isset($_POST['send-button'])) {
    $receiver = $username;
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "INSERT INTO messages(username, messages) VALUES ('$receiver', '$message')";
    mysqli_query($con,$sql);
    echo '<script>alert("Message Sent!!!");window.location.assign("../index.php");</script>';
}else {
    echo '<script>alert("An Error Occured!");window.location.assign("../index.php");</script>';
}
?>