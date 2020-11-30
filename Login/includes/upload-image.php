<?php 
include_once "dbh.php";
session_start();
$username = $_SESSION['username'];

//Uploading Files
if (isset($_POST['upload-image'])) {//When Upload Image button is clicked
    //name of the uploaded file
    $filename = $_FILES['image'] ['name'];
//destination of the file on the server
$destination = '../images/Uploads/' .$filename;

//getting the file extension
$extention = pathinfo($filename, PATHINFO_EXTENSION);
// the physical file on a temporary uploads directory on the server
$file = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];

if (!in_array($extention, ['zip', 'pdf', 'docx', 'jpg', 'png', 'jpeg'])) {
    echo "Your file extension must be .zip, .pdf, .docx, .png, .jpg, .jpeg";
}elseif ($_FILES['image']['size'] > 1000000) { // file shouldn't be larger than 1mb
    echo "File Too Large";
}else{
    //move the uploaded (temporary) file to the specified destination
    if(move_uploaded_file($file, $destination)){
        $query = "UPDATE users SET profileimg = '$filename', uploadedimg = 1  WHERE username = '$username'";
        if (mysqli_query($con, $query)){
            // echo "File Uploaded Successfully";
            header("Location: ../home.php?upload=Success");
        }else{
            header("Location: ../upload.php?upload=Error");
        }
    }else {
        header("Location: ../upload.php?upload=Error");
    }
}
}