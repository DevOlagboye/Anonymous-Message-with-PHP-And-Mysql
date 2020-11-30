<?php
include_once 'dbh.php';

if (isset($_POST['submit-register'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $email = mysqli_real_escape_string($con,$_POST['email']);

    $query = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($con, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo '<script>alert("Username Taken");window.location.assign("../register.php")</script>';
    }else {
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        $done = mysqli_query($con, $sql);
        echo '<script>alert("Registration Successful");window.location.assign("../index.php")</script>'; 
    }      
    }else{
    echo 'An Error Occured';
}
