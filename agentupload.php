<?php
include 'functions.php';

$target_dir = "uploads/agents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$fname = mysqli_real_escape_string($con, strip_tags(trim($_POST["fname"])));
$lname = mysqli_real_escape_string($con, strip_tags(trim($_POST["lname"])));
$email = mysqli_real_escape_string($con, strip_tags(trim($_POST["email"])));
$pass1 = md5(mysqli_real_escape_string($con, strip_tags(trim($_POST["pass1"]))));
$pass2 = md5(mysqli_real_escape_string($con, strip_tags(trim($_POST["pass2"]))));
$phone = mysqli_real_escape_string($con, strip_tags(trim($_POST["phone"])));
$bio = mysqli_real_escape_string($con, strip_tags(trim($_POST["bio"])));
$facebook = mysqli_real_escape_string($con, strip_tags(trim($_POST["facebook"])));
$twitter = mysqli_real_escape_string($con, strip_tags(trim($_POST["twitter"])));
$linkedin = mysqli_real_escape_string($con, strip_tags(trim($_POST["linkedin"])));

if ($fname != '' && $lname != '' && $email != '' && $phone != '' && $pass1 != '' && $pass2 != '') {

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $_SESSION['success'] = "File is an image - " . $check["mime"] . ".<br/>";
            $uploadOk = 1;
        } else {
            $_SESSION['failure'] .= "File is not an image.<br/>";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        $_SESSION['failure'] .= "Sorry, file already exists.<br/>";
        //(rand(10,100))
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $_SESSION['failure'] .= "Sorry, your file is too large.<br/>";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $_SESSION['failure'] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['failure'] .= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            $sql = "INSERT INTO `tbl_user`(`fname`, `lname`, `email`, `phone`, `bio`, `facebook`, `twitter`, `linkedin`, `image`, `password`)
            VALUES('".$fname."', '".$lname."', '".$email."', '".$phone."', '".$bio."', '".$facebook."', '".$twitter."', '".$linkedin."', '".$target_file."', '".$pass1."')";
            mysqli_query($con, $sql);
            //$_SESSION['success'] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $_SESSION['success'] = "New agent has been added succesfully.";

        } else {
            $_SESSION['failure'] .= "Sorry, there was an error uploading your file.";
        }
    }

} else {
    $_SESSION['failure'] .= 'Please fill in all fields.';
}

if ($_SESSION['failure']) {
    header('Location: addagent.php');
} else {
    header('Location: agents.php');
}



?>