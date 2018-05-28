<?php
include 'functions.php';

//pagination variables
$num_rec_per_page=8;

if (isset($_GET["page"])) {

  $page  = $_GET["page"];
} else {

  $page=1;
}

$start_from = ($page-1) * $num_rec_per_page;

$sql = "SELECT * FROM tbl_user";
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
      <a href="agent.php?id='.$row['id'].'" class="agent-img">
      <div class="img-fade"></div>
      <div class="button alt agent-tag">24 Properties</div>
      <img src="'.$row['image'].'" alt="" />
      </a>
      <div class="agent-content">
      <div class="agent-details">
      <h4><a href="#">'.$row['fname'].' '.$row['lname'].'</a></h4>
      <p><i class="fa fa-tag icon"></i>Selling Agent</p>
      <p><i class="fa fa-envelope icon"></i>'.$row['email'].'</p>
      <p><i class="fa fa-phone icon"></i>'.$row['phone'].'</p>
      </div>
      <div class="center">
      <ul class="social-icons circle">
      <li><a href="'.$row['facebook'].'"><i class="fa fa-facebook"></i></a></li>
      <li><a href="'.$row['twitter'].'"><i class="fa fa-twitter"></i></a></li>
      <li><a href="'.$row['linkedin'].'"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      </div>
      </div>
      </div>
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

<?php

$sql = "SELECT * FROM tbl_user ";
$rs_result = mysqli_query($con, $sql); 
$total_records = mysqli_num_rows($rs_result);  
$total_pages = ceil($total_records / $num_rec_per_page);

if ($total_pages == 0) {
  $total_pages = 1;
}

echo '
<div class="pagination">
<div class="center">
<ul>
<li><a href="?page=1" class="button small grey"><i class="fa fa-angle-left"></i></a></li>'; 

if ($page < 4) {
 for ($i=1; $i<$page; $i++) {
   echo '<li><a href="?page='.$i.'" class="button small grey">'.$i.'</a></li>';
 };
} else {
  for ($i=($page-3); $i<$page; $i++) {
    echo '<li><a href="?page='.$i.'" class="button small grey">'.$i.'</a></li>';
  };
}
echo '<li class="current"><a href="?page='.$page.'" class="button small grey">'.$page.'</a></li>';

if ($page >= ($total_pages - 3)) {
  for ($i=($page+1); $i<=($total_pages); $i++) {
    echo '<li><a href="?page='.$i.'" class="button small grey">'.$i.'</a></li>';
  };
} else {
  for ($i=($page+1); $i<=($page+3); $i++) {
    echo '<li><a href="?page='.$i.'" class="button small grey">'.$i.'</a></li>';
  };
}

echo '
<li><a href="?page='.$total_pages.'" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
</ul>
</div>
<div class="clear"></div>
</div>';
?>
</div><!-- end row -->

</div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>