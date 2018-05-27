<?php
include 'functions.php';

$sql = "SELECT * FROM tbl_agent";
$res = mysqli_query($con, $sql);

$num = 0;
$num = mysqli_num_rows($res);

include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Agent List</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Agents</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
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
    <div class="property-listing-header">
      <span class="property-count left"><?php echo $num; ?> agents found</span>
      <form action="#" method="get" class="right">
       <select name="sort_by" onchange="this.form.submit();">
        <option value="date_desc">New to Old</option>
        <option value="date_asc">Old to New</option>
        <option value="price_desc">Properties (High to Low)</option>
        <option value="price_asc">Properties (Low to High)</option>
      </select>
    </form>
    <div class="property-layout-toggle right">
     <a href="agent-listing-grid.html" class="property-layout-toggle-item active"><i class="fa fa-th-large"></i></a>
     <a href="agent-listing-row.html" class="property-layout-toggle-item"><i class="fa fa-bars"></i></a>
   </div>
   <div class="clear"></div>
 </div><!-- end agent listing header -->

 <div class="row">
  <?php

  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

      echo '
      <div class="col-lg-3 col-md-3">
      <div class="agent shadow-hover">
      <a href="#" class="agent-img">
      <div class="img-fade"></div>
      <div class="button alt agent-tag">24 Properties</div>
      <img src="images/agent-img1.jpg" alt="" />
      </a>
      <div class="agent-content">
      <div class="agent-details">
      <h4><a href="#">Sarah Parker</a></h4>
      <p><i class="fa fa-tag icon"></i>Selling Agent</p>
      <p><i class="fa fa-envelope icon"></i>sparker@homely.com</p>
      <p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
      </div>
      <div class="center">
      <ul class="social-icons circle">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      </div>
      </div>
      </div>
      </div>

      <div class="pagination">
      <div class="center">
      <ul>
      <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
      <li class="current"><a href="#" class="button small grey">1</a></li>
      <li><a href="#" class="button small grey">2</a></li>
      <li><a href="#" class="button small grey">3</a></li>
      <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
      </ul>
      </div>
      <div class="clear"></div>
      </div>';
    }
  } else {
    echo '
    <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>No agents found.</strong>
    </div>';
  }
  ?>  
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