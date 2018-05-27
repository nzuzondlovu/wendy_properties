<?php 
include 'functions.php';

$sql = "SELECT * FROM tbl_prop ";

if (isset($_POST['submit_search'])) {

  $type = mysqli_real_escape_string($con, strip_tags(trim($_POST["type"])));
  $location = mysqli_real_escape_string($con, strip_tags(trim($_POST["location"])));
  $priceMin = mysqli_real_escape_string($con, strip_tags(trim($_POST["priceMin"])));
  $priceMax = mysqli_real_escape_string($con, strip_tags(trim($_POST["priceMax"])));
  $beds = mysqli_real_escape_string($con, strip_tags(trim($_POST["beds"])));
  $baths = mysqli_real_escape_string($con, strip_tags(trim($_POST["baths"])));
  $areaMin = mysqli_real_escape_string($con, strip_tags(trim($_POST["areaMin"])));
  $areaMax = mysqli_real_escape_string($con, strip_tags(trim($_POST["areaMax"])));

  if ($type != '' && $location != '' && $priceMin != '' && $priceMax != '' && $beds != '' && $baths != '' && $areaMin != '' && $areaMax != '') {

    echo $sql = "SELECT * FROM tbl_prop WHERE (`price` BETWEEN ".$priceMin." AND ".$priceMax.") OR `beds` = ".$beds." OR `baths` = ".$baths." OR `type` = ".$type." OR (`area` BETWEEN ".$areaMin." AND ".$areaMax."";    

  } else {
    //header('Location: index.php');
  } 
}

if (isset($_POST['submit_header'])) {
    
    $phrase = mysqli_real_escape_string($con, strip_tags(trim($_POST["phrase"])));

    if ($phrase != '') {

      $sql = "SELECT * FROM tbl_prop WHERE id LIKE '%".$phrase."%' OR title LIKE '%".$phrase."%' OR price LIKE '%".$phrase."%' OR beds LIKE '%".$phrase."%' OR baths LIKE '%".$phrase."%' OR garages LIKE '%".$phrase."%' OR area LIKE '%".$phrase."%' OR type LIKE '%".$phrase."%' OR status LIKE '%".$phrase."%' OR description LIKE '%".$phrase."%' OR address LIKE '%".$phrase."%' OR latitude LIKE '%".$phrase."%' OR longitude LIKE '%".$phrase."%' OR agent LIKE '%".$phrase."%' OR date LIKE '%".$phrase."%'";
    }
  } else {
    # code...
  }

$res = mysqli_query($con, $sql);
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
  <?php

  if (mysqli_num_rows($res) > 0) {

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
</div>

</div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>