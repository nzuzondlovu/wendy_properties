<?php 
//include the fucntions scripts
include 'functions.php';

//pagination variables
$num_rec_per_page=6;

if (isset($_GET["page"])) {

  $page  = $_GET["page"];
} else {

  $page=1;
}


$start_from = ($page-1) * $num_rec_per_page;

//default sql statement
$sql = "SELECT * FROM tbl_prop LIMIT $start_from, $num_rec_per_page";

if (isset($_POST['submit_search'])) {

  //sanitize input to avoid sql injections
  $type = mysqli_real_escape_string($con, strip_tags(trim($_POST["type"])));
  $location = mysqli_real_escape_string($con, strip_tags(trim($_POST["location"])));
  $priceMin = mysqli_real_escape_string($con, strip_tags(trim($_POST["priceMin"])));
  $priceMax = mysqli_real_escape_string($con, strip_tags(trim($_POST["priceMax"])));
  $beds = mysqli_real_escape_string($con, strip_tags(trim($_POST["beds"])));
  $baths = mysqli_real_escape_string($con, strip_tags(trim($_POST["baths"])));
  $areaMin = mysqli_real_escape_string($con, strip_tags(trim($_POST["areaMin"])));
  $areaMax = mysqli_real_escape_string($con, strip_tags(trim($_POST["areaMax"])));

  //check if is empty
  if ($priceMin != '' && $priceMax != '' && $areaMin != '' && $areaMax != '') {

    //make values empty, to be excluded in the search
    if ($type == 'Any') {
      $type = "''";
    }
    if ($location == 'Any') {
      $type = "''";
    }
    if ($beds == 'Any') {
      $type = "''";
    }
    if ($baths == 'Any') {
      $type = "''";
    }

    //sql code to search the table
    $sql = "SELECT * FROM tbl_prop WHERE (`price` BETWEEN ".$priceMin." AND ".$priceMax.") OR `beds` = ".$beds." OR `baths` = ".$baths." OR `type` = '".$type."' OR `address` = '".$location."' OR (`area` BETWEEN ".$areaMin." AND ".$areaMax.") LIMIT $start_from, $num_rec_per_page";    

  } else {

    //upon a failure set failure session to ...
    $_SESSION['failure'] = 'Please make sure all fields are filled in.';
  }
}

if (isset($_POST['submit_header'])) {

  //sanitize the phrase from any sql injections
  $phrase = mysqli_real_escape_string($con, strip_tags(trim($_POST["phrase"])));

  if ($phrase != '') {

      //sql search statement
    $sql = "SELECT * FROM tbl_prop WHERE id LIKE '%".$phrase."%' OR title LIKE '%".$phrase."%' OR price LIKE '%".$phrase."%' OR beds LIKE '%".$phrase."%' OR baths LIKE '%".$phrase."%' OR garages LIKE '%".$phrase."%' OR area LIKE '%".$phrase."%' OR type LIKE '%".$phrase."%' OR status LIKE '%".$phrase."%' OR description LIKE '%".$phrase."%' OR address LIKE '%".$phrase."%' OR latitude LIKE '%".$phrase."%' OR longitude LIKE '%".$phrase."%' OR agent LIKE '%".$phrase."%' OR date LIKE '%".$phrase."%' LIMIT $start_from, $num_rec_per_page";

    //to be used in the pagination
    $_SESSION['sphrase'] = "WHERE id LIKE '%".$phrase."%' OR title LIKE '%".$phrase."%' OR price LIKE '%".$phrase."%' OR beds LIKE '%".$phrase."%' OR baths LIKE '%".$phrase."%' OR garages LIKE '%".$phrase."%' OR area LIKE '%".$phrase."%' OR type LIKE '%".$phrase."%' OR status LIKE '%".$phrase."%' OR description LIKE '%".$phrase."%' OR address LIKE '%".$phrase."%' OR latitude LIKE '%".$phrase."%' OR longitude LIKE '%".$phrase."%' OR agent LIKE '%".$phrase."%' OR date LIKE '%".$phrase."%' LIMIT $start_from, $num_rec_per_page";
  }
}

//run query
$res = mysqli_query($con, $sql);
//get number of rows
$num = mysqli_num_rows($res);

include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Property Listing Grid</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Properties</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">

   <div class="property-listing-header">
    <span class="property-count left"><?php echo $num; ?> properties found</span>
    <form action="#" method="get" class="right">
     <select name="sort_by" onchange="this.form.submit();">
      <option value="date_desc">New to Old</option>
      <option value="date_asc">Old to New</option>
      <option value="price_desc">Price (High to Low)</option>
      <option value="price_asc">Price (Low to High)</option>
    </select>
  </form>
  <div class="property-layout-toggle right">
   <a href="property-listing-grid.html" class="property-layout-toggle-item active"><i class="fa fa-th-large"></i></a>
   <a href="property-listing-row.html" class="property-layout-toggle-item"><i class="fa fa-bars"></i></a>
 </div>
 <div class="clear"></div>
</div><!-- end property listing header -->

<div class="row">
  <!-- to display messages if any and remove them -->
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
  <?php

  if (mysqli_num_rows($res) > 0) {

    //while there is data display
    while ($row = mysqli_fetch_assoc($res)) {

      echo '
      <div class="col-lg-4 col-md-4">
      <div class="property shadow-hover">
      <a href="property.php?id='.$row['id'].'" class="property-img">
      <div class="img-fade"></div>
      <div class="property-tag button status">'.$row['status'].'</div>
      <div class="property-price">'.$row['price'].'</div>
      <div class="property-color-bar"></div>
      <img src="'.$row['image'].'" alt="" />
      </a>
      <div class="property-content">
      <div class="property-title">
      <h4><a href="property.php?id='.$row['id'].'">'.$row['title'].'</a></h4>
      <p class="property-address"><i class="fa fa-map-marker icon"></i>'.$row['address'].'</p>
      </div>
      <table class="property-details">
      <tr>
      <td><i class="fa fa-bed"></i> '.$row['beds'].' Beds</td>
      <td><i class="fa fa-tint"></i> '.$row['baths'].' Baths</td>
      <td><i class="fa fa-expand"></i> '.$row['area'].' Sq Mtr</td>
      </tr>
      </table>
      </div>
      <div class="property-footer">
      <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
      <span class="right">
      <a href="#"><i class="fa fa-heart-o icon"></i></a>
      <a href="#"><i class="fa fa-share-alt"></i></a>
      </span>
      <div class="clear"></div>
      </div>
      </div>
      </div>';
    }
  } else {
    echo '
    <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>No properties found.</strong>
    </div>';
  }
  ?>
</div><!-- end row -->

<?php

//select from table including the phrase if set
$sql = "SELECT * FROM tbl_prop ".$_SESSION['sphrase'];
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

</div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>