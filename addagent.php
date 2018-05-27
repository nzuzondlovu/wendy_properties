<?php 
include 'functions.php';



include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Submit Agent</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Submit Agent</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module property-submit">
  <div class="container">

    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
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
        <form class="multi-page-form" method="post" action="agentupload.php" enctype="multipart/form-data">

          <div class="multi-page-form-content active">

            <table class="property-submit-title">
              <tr>
                <td><span class="property-submit-num"><i class="fa fa-user"></i></span></td>
                <td>
                  <h4>Agent Info</h4>
                  <p>Insert agent details below.</p>
                </td>
              </tr>
            </table>

            <div class="form-block">
              <label>First Name*</label>
              <input class="border required" type="text" name="fname" required="required" />
            </div>
            <div class="form-block">
              <label>Last Name*</label>
              <input class="border required" type="text" name="lname"  required="required" />
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Email*</label>
                  <input class="border required" type="email" name="email" required="required" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Phone*</label>
                  <input class="border required" type="text" name="phone" required="required" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Facebook</label>
                  <input class="border" type="text" name="facebook" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Twiiter</label>
                  <input class="border" type="text" name="twitter" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Linkedin</label>
                  <input class="border" type="text" name="linkedin" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Password*</label>
                  <input class="border required" type="password" name="pass1" required="required" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Confirm Password*</label>
                  <input class="border required" type="password" name="pass2" required="required" />
                </div>
              </div>
            </div>

            <div class="form-block border">
              <label>Agent Image</label>
              <input type="file" name="fileToUpload" id="fileToUpload" required="required" />
            </div>

            <div class="form-block">
              <label>Bio</label>
              <textarea class="border" name="bio"></textarea>
            </div>

            <div class="clear"></div>
            <div class="center"><button type="submit" class="button button-icon large alt"><i class="fa fa-angle-right"></i> Submit Agent</button></div>
            <div class="clear"></div>
          </div><!-- end basic info -->

        </form>

      </div><!-- end col -->
    </div><!-- end row -->

  </div><!-- end container -->
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