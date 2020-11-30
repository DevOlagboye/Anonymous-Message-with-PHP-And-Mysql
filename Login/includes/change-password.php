<?php
include_once 'dbh.php';
session_start();

if (isset($_POST['change-password-button'])) {
    $oldpassword = $_SESSION['password'];
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $sql = "UPDATE users SET password ='$password' WHERE password ='$oldpassword'";
    mysqli_query($con, $sql);

    header("Location: ../change-password.php?Password-Change=Success");
}else {
    header("Location: ../change-password.php?Password-Change=Error");
}
