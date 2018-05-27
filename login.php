<?php
include 'functions.php';
?>

<?php

if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($con, strip_tags(trim($_POST["email"])));
  $pass1 = md5(mysqli_real_escape_string($con, strip_tags(trim($_POST["pass1"]))));

  if ($email != '' && $pass1 != '') {

    $sql = "SELECT * FROM tbl_user WHERE email='".$email."' AND password='".$pass1."'";
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) > 0) {

      $user_details = mysqli_fetch_assoc($res);
      $_SESSION['user_id'] = $user_details['id'];
      $_SESSION['fname'] = $user_details['fname'];
      $_SESSION['lname'] = $user_details['lname'];
      $_SESSION['email'] = $user_details['email'];
      $_SESSION['phone'] = $user_details['phone'];
      $_SESSION['bio'] = $user_details['bio'];
      $_SESSION['image'] = $user_details['image'];
      $_SESSION['facebook'] = $user_details['facebook'];
      $_SESSION['twitter'] = $user_details['twitter'];
      $_SESSION['linkedin'] = $user_details['linkedin'];


      $_SESSION['success'] = 'You have been logged in succesfully.';
      header("location:dashboard.php");

    } else {
      session_destroy();
      $_SESSION['failure'] = '<strong>Invalid login credentials.</strong> Please try submitting again.';
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
    <h1>Login</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Login</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
        <p>Don't have an account? <strong><a href="register.php">Register here.</a></strong></p> 
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
            <label>Email</label>
            <input class="border" type="email" name="email" required="required" />
          </div>
          <div class="form-block">
            <label>Password</label>
            <input class="border" type="password" name="pass1" required="required" />
          </div>
          <div class="form-block">
            <label><input type="checkbox" name="remember" />Remember Me</label><br/>
          </div>
          <div class="form-block">
            <button class="button button-icon" type="submit" name="submit"><i class="fa fa-angle-right"></i>Login</button>
          </div>
          <div class="divider"></div>
          <p class="note"><a href="#">I don't remember my password.</a> </p>    
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