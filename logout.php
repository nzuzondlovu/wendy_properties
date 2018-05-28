<?php
//script to destroy the seesion and redirect the user to the index page
session_start();
session_destroy();
session_start();
$_SESSION['logout_success'] = 'You are successfully logged out.';
header("location:index.php");
?>
