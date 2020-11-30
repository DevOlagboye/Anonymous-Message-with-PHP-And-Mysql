<?php
include_once 'dbh.php';
session_start();

if (isset($_POST['change-username-button'])) {
    $oldusername = $_SESSION['username'];
    $newusername = mysqli_real_escape_string($con, $_POST['username']);
    
    $sql = "UPDATE users SET username ='$newusername' WHERE username ='$oldusername'";
    if (mysqli_query($con, $sql)) {
        $query = "UPDATE messages SET username = '$newusername' WHERE username ='$oldusername'";
        mysqli_query($con, $query);
        header("Location: ../change-username.php?Username-Update=Success");
    }else{
        header("Location: ../change-username.php?Username-Update=Error");
    }
}else {
    header("Location: ../change-username.php?Username-Update=Error");
}
