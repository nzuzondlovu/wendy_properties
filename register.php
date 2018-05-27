<?php 
include 'functions.php';
?>

<?php

if (isset($_POST['submit'])) {

  $fname = mysqli_real_escape_string($con, strip_tags(trim($_POST["fname"])));
  $lname = mysqli_real_escape_string($con, strip_tags(trim($_POST["lname"])));
  $email = mysqli_real_escape_string($con, strip_tags(trim($_POST["email"])));
  $pass1 = mysqli_real_escape_string($con, strip_tags(trim($_POST["pass1"])));
  $pass2 = mysqli_real_escape_string($con, strip_tags(trim($_POST["pass2"])));

  if ($fname != '' && $fname != '' && $fname != '' && $fname != '' && $fname != '') {

    if ($pass1 == $pass2) {

      $sql = "INSERT INTO tbl_agents(fname, lname, email, password)
      VALUES('".$fname."', '".$lname."', '".$email."', '".$pass1."')";
      mysqli_query($con, $sql);
      $_SESSION['success'] = 'You have been registered succesfully, please log in.';
      header("location:login.php");

    } else {
      $_SESSION['failure'] = 'Please check if the passwords match.';
    }    
  } else {
    $_SESSION['failure'] = 'Please fill in all fields.';
  }
  


}


?>

<?php 
include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Register</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="index.php" class="current">Register</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
        <p>Already have an account? <strong><a href="login.php">Login here.</a></strong></p>
        <div class="col-md-12">
            <?php if(isset($_SESSION['success']) && $_SESSION['success'] != '') { ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
            <?php } ?>

            <?php if(isset($_SESSION['failure']) && $_SESSION['failure'] != '') { ?>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $_SESSION['failure']; unset($_SESSION['failure']); ?>
            </div>
            <?php } ?>
          </div> 
        <form method="post" class="login-form">
          <div class="form-block">
            <label>Name</label>
            <input class="border" type="text" name="fname" type="text" />
          </div>
          <div class="form-block">
            <label>Surname</label>
            <input class="border" type="text" name="lname" type="text" />
          </div>
          <div class="form-block">
            <label>Email</label>
            <input class="border" type="text" name="email" type="email" />
          </div>
          <div class="form-block">
            <label>Password</label>
            <input class="border" type="password" name="pass1" />
          </div>
          <div class="form-block">
            <label>Confirm Password</label>
            <input class="border" type="password" name="pass2" />
          </div>
          <div class="form-block">
            <button class="button button-icon" type="submit" name="submit"><i class="fa fa-angle-right"></i>Register</button>
          </div>
          <div class="divider"></div>
          <p class="note">By clicking the "Register" button you agree with our <a href="#">Terms and conditions</a></p>    
        </form>
      </div>
    </div><!-- end row -->

  </div>
</section>

<section class="module cta newsletter">
  <div class="container">
   <div class="row">
    <div class="col-lg-7 col-md-7">
     <h3>Sign up for our <strong>newsletter.</strong></h3>
     <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
   </div>
   <div class="col-lg-5 col-md-5">
     <form method="post" id="newsletter-form" class="newsletter-form">
      <input type="email" placeholder="Your email..." />
      <button type="submit" form="newsletter-form"><i class="fa fa-send"></i></button>
    </form>
  </div>
</div><!-- end row -->
</div><!-- end container -->
</section>



<?php 
include 'footer.php';
?>