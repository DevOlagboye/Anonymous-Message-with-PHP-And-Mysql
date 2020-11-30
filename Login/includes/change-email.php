<?php

include_once 'dbh.php';
session_start();

if (isset($_POST['change-email-button'])) {
    $oldemail = $_SESSION['email'];
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $sql = "UPDATE users SET email ='$email' WHERE email ='$oldemail'";
    mysqli_query($con, $sql);

    header("Location: ../change-email.php?Email-change=Success");
}else {
    header("Location: ../change-email.php?Email-change=Error");
}
