<?php
include_once 'dbh.php';
session_start();

if (isset($_POST['login-submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";

    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0 && $row = mysqli_fetch_assoc($result)) {
        header("Location: ../home.php");
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['profileimage'] = $row['profileimg'];
    }else {
        echo '<script>alert("Kindly Submit Correct Credentials");window.location.assign("../index.php");</script>';
    }
}else {
    echo '<script>alert("Session Expired");window.location.assign("../index.php");</script>';
}
?>