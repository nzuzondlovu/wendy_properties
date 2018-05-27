<?php
include 'functions.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$title = mysqli_real_escape_string($con, strip_tags(trim($_POST["title"])));
$price = mysqli_real_escape_string($con, strip_tags(trim($_POST["price"])));
$beds = mysqli_real_escape_string($con, strip_tags(trim($_POST["beds"])));
$baths = mysqli_real_escape_string($con, strip_tags(trim($_POST["baths"])));
$garages = mysqli_real_escape_string($con, strip_tags(trim($_POST["garages"])));
$area = mysqli_real_escape_string($con, strip_tags(trim($_POST["area"])));
$type = mysqli_real_escape_string($con, strip_tags(trim($_POST["type"])));
$status = mysqli_real_escape_string($con, strip_tags(trim($_POST["status"])));
$description = mysqli_real_escape_string($con, strip_tags(trim($_POST["description"])));
$address = mysqli_real_escape_string($con, strip_tags(trim($_POST["address"])));
$latitude = mysqli_real_escape_string($con, strip_tags(trim($_POST["latitude"])));
$longitude = mysqli_real_escape_string($con, strip_tags(trim($_POST["longitude"])));
//$amnities[] = mysqli_real_escape_string($con, strip_tags(trim($_POST["amnities[]"])));
//$agent = mysqli_real_escape_string($con, strip_tags(trim($_POST["agent"])));

if ($title != '' && $price != '' && $beds != '' && $baths != '' && $garages != '' && $area != '' && $type != '' && $status != '' && $description != '' && $address != '' && $latitude != '' && $longitude != '' && $agent == '') {

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $_SESSION['success'] = "File is an image - " . $check["mime"] . ".<br/>";
            $uploadOk = 1;
        } else {
            $_SESSION['failure'] = "File is not an image.<br/>";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        $_SESSION['failure'] = "Sorry, file already exists.<br/>";
        //(rand(10,100))
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 100000) {
        $_SESSION['failure'] = "Sorry, your file is too large.<br/>";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $_SESSION['failure'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['failure'] = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            $sql = "INSERT INTO tbl_prop VALUES('".$title."', '".$price."', '".$beds."', '".$baths."', '".$garages."', '".$area."', '".$type."', '".$status."', '".$description."', '".$address."', '".$latitude."', '".$longitude."', '".$agent."', '".$target_file."')";
            mysqli_query($con, $sql);
            //$_SESSION['success'] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $_SESSION['success'] = "New property has been added succesfully.";

        } else {
            $_SESSION['failure'] = "Sorry, there was an error uploading your file.";
        }
    }

} else {
    $_SESSION['failure'] = 'Please fill in all fields.';
}

header('Location: dashboard.php');

?>