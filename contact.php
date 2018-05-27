<?php 
include 'functions.php';

if (isset($_POST['submit'])) {

  $fname = mysqli_real_escape_string($con, strip_tags(trim($_POST["fname"])));
  $lname = mysqli_real_escape_string($con, strip_tags(trim($_POST["lname"])));
  $email = mysqli_real_escape_string($con, strip_tags(trim($_POST["email"])));
  $message = mysqli_real_escape_string($con, strip_tags(trim($_POST["messsage"])));
  $phone = mysqli_real_escape_string($con, strip_tags(trim($_POST["phone"])));
  $subject = mysqli_real_escape_string($con, strip_tags(trim($_POST["subject"])));

  if ($fname != '' && $lname != '' && $email != '' && $message != '') {

    $ourEmail = "support@".$siteaddress;
    $message .= "\n\nContact Number: ".$phone;
    $headers = "From: ".$email."" . "\r\n" .
    "CC: ".$email;

    mail($ourEmail,$subject,$message,$headers);

  } else {
    $_SESSION['failure'] = 'Please fill in all fields';
  }
}

include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Contact Us</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Contact Us</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module contact-details">
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email Us</h4>
          <p>hello@<?php echo $siteaddress; ?></p>
          <p>support@<?php echo $siteaddress; ?></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Call Us</h4>
          <p>General: 123 456 5665</p>
          <p>Support: (+27) 123 456 5665</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-map-marker"></i>
          <h4>Visit Us</h4>
          <p>1234 Smith Drive<br/> Annapolis, MD 21012 USA</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-share-alt"></i>
          <h4>Connect With Us</h4>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div><!-- end row -->

  </div>
</section>


<section class="module">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-md-8">

        <div class="comment-form">
          <h4><span>Quick Contact</span> <img src="images/divider-half.png" alt="" /></h4>
          <p><b>Fill out the form below.</b></p>
          
          <form method="post" id="contact-us">            
           <div class="form-block">
            <label>
              Name *
            </label>
            <input class="requiredField" type="text" placeholder="Your Name" name="fname" value="" />
          </div>
          <div class="form-block">
            <label>
              Surname *
            </label>
            <input class="requiredField" type="text" placeholder="Your Name" name="lname" value="" />
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="form-block">
                <label>
                 Email *
               </label>
               <input class="email requiredField" type="text" placeholder="Your email" name="email" value="" />
             </div>
           </div>
           <div class="col-lg-6 col-md-6">
            <div class="form-block">
              <label>Phone</label>
              <input type="text" placeholder="Your phone" name="phone" value="" />
            </div>
          </div>
        </div>
        <div class="form-block">
          <label>Subject</label>
          <input type="text" placeholder="Subject" name="subject" value="" />
        </div>
        <div class="form-block">
          <label>
            Message *
          </label>
          <textarea class="requiredField" placeholder="Your message..." name="message"></textarea>
        </div>
        <div class="form-block">
          <input type="submit" name="submit" value="Submit" />
          <input type="hidden" name="submitted" id="submitted" value="true" />
        </div>
      </form>
    </div>

    <div class="divider"></div>
  </div>

  <div class="col-lg-4 col-md-4 sidebar">

    <?php include 'sidebar.php'; ?>

  </div>

</div><!-- end row -->

</div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>