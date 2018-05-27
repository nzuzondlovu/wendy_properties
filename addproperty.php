<?php

include 'functions.php';

/*if(isset($_SESSION['user_id']) == '' ) {
  header("location:login.php");
}*/

include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Submit Property</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Submit Property</a></div>
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
        <form class="multi-page-form" action="upload.php" method="post" enctype="multipart/form-data">

          <div class="center">
            <div class="form-nav">
              <div class="form-nav-item completed"><span><i class="fa fa-check"></i></span><br/> Basic Info</div>
              <div class="form-nav-item"><span>2</span><br/> Images</div>
              <div class="form-nav-item"><span>3</span><br/> Location</div>
              <div class="form-nav-item"><span>4</span><br/> Amenities</div>
              <div class="form-nav-item"><span>5</span><br/> Agent Info</div>
              <div class="clear"></div>
            </div>
          </div>

          <div class="multi-page-form-content active">

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>

            <table class="property-submit-title">
              <tr>
                <td><span class="property-submit-num">1</span></td>
                <td>
                  <h4>Basic Info</h4>
                  <p>Insert basic property information below.</p>
                </td>
              </tr>
            </table>

            <div class="form-block">
              <label>Property Title*</label>
              <input class="border required" required="required" type="text" name="title" />
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-block">
                  <label>Price*</label>
                  <input class="border required" required="required" type="number" name="price" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Bedrooms*</label>
                  <input class="border required" type="number" required="required" name="beds" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Bathrooms*</label>
                  <input class="border required" type="number" required="required" name="baths" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Garages*</label>
                  <input class="border required" type="number" required="required" name="garages" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-block">
                  <label>Area*</label>
                  <input class="border required" type="number" required="required" name="area" />
                </div>
              </div>
            </div>

            <div class="form-block border">
              <label>Property Type*</label>
              <select name="type" class="border required" required="required">
                <option></option>
                <option value="family-house">Family House</option>
                <option value="apartment">Apartment</option>
                <option value="condo">Condo</option>
              </select>
            </div>

            <div class="form-block border">
              <label>Property Status*</label>
              <select name="status" class="border required" required="required">
                <option></option>
                <option value="for-rent">For Rent</option>
                <option value="for-sale">For Sale</option>
                <!-- <option value="sold">Sold</option> -->
              </select>
            </div>

            <div class="form-block">
              <label>Description*</label>
              <textarea class="border required" name="description" required="required"></textarea>
            </div>

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <div class="clear"></div>

          </div><!-- end basic info -->

          <div class="multi-page-form-content">

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>

            <table class="property-submit-title">
              <tr>
                <td><span class="property-submit-num">2</span></td>
                <td>
                  <h4>Property Image</h4>
                  <p>Please choose the image for your property.</p>
                </td>
              </tr>
            </table>

            <div class="form-block">
              <label>Featured Image</label>
              <input type="file" name="fileToUpload" id="fileToUpload" required="required" />
            </div>
            <br/>

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>
            <div class="clear"></div>
          </div><!-- end property images -->

          <div class="multi-page-form-content">

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>

            <table class="property-submit-title">
              <tr>
                <td><span class="property-submit-num">3</span></td>
                <td>
                  <h4>Location</h4>
                  <p>Please enter the location of the property.</p>
                </td>
              </tr>
            </table>

            <div class="form-block">
              <label>Address*</label>
              <input class="border required" type="text" name="address" />
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-block">
                  <label for="property_latitude">Latitude</label>
                  <input type="text" name="latitude" class="border" id="property_latitude" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-block">
                  <label for="property_longitude">Longitude</label>
                  <input type="text" name="longitude" class="border" id="property_longitude" />
                </div>
              </div>
            </div><!-- end row -->

            <input size="25" id="pac-input" class="map-input controls" type="text" placeholder="Search" name="map_input">
            <div id="map-single"></div>

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>
            <div class="clear"></div>
          </div><!-- end location -->

          <div class="multi-page-form-content">

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>

            <table class="property-submit-title">
              <tr>
                <td><span class="property-submit-num">4</span></td>
                <td>
                  <h4>Amenities</h4>
                  <p>Choose all the amneties that are available at the property.</p>
                </td>
              </tr>
            </table>

            <div class="form-block amenities-list">
              <label><input type="checkbox" name="amenities[]" value="ac" />Air Conditioning</label>
              <label><input type="checkbox" name="amenities[]" value="balcony" />Balcony</label>
              <label><input type="checkbox" name="amenities[]" value="bedding" />Bedding</label>
              <label><input type="checkbox" name="amenities[]" value="cable" />Cable TV</label>
              <label><input type="checkbox" name="amenities[]" value="coffee pot" />Coffee Pot</label>
              <label><input type="checkbox" name="amenities[]" value="dishwasher" />Dishwasher</label>
              <label><input type="checkbox" name="amenities[]" value="fridge" />Fridge</label>
              <label><input type="checkbox" name="amenities[]" value="grill" />Grill</label>
              <label><input type="checkbox" name="amenities[]" value="heating" />Heating</label>
              <label><input type="checkbox" name="amenities[]" value="internet" />Internet</label>
              <label><input type="checkbox" name="amenities[]" value="microwave" />Microwave</label>
              <label><input type="checkbox" name="amenities[]" value="oven" />Oven</label>
              <label><input type="checkbox" name="amenities[]" value="parking" />Parking</label>
              <label><input type="checkbox" name="amenities[]" value="pool" />Pool</label>
              <label><input type="checkbox" name="amenities[]" value="Toaster" />Toaster</label>
            </div>

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Next</span>
            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>
            <div class="clear"></div>
          </div><!-- end amenities -->

          <div class="multi-page-form-content" id="owner-info">

            <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Previous</span>

            <table class="property-submit-title">
              <tr>
                <td><span class="property-submit-num">5</span></td>
                <td>
                  <h4>Agent Info</h4>
                  <p>Please choose an agent below.</p>
                </td>
              </tr>
            </table>

            <div class="form-block form-block-agent-options form-block-select-agent border">
              <label for="agent">Select Agent</label>
              <select name="agent" class="border">
                <option value="">Select Agent...</option>
                <?php
                $sql = "SELECT * FROM tbl_user ORDER BY fname ASC";
                $res = mysqli_query($con, $sql);

                if(mysqli_num_rows($res) > 0) {
                  while($row = mysqli_fetch_assoc($res)) {
                    echo '<option value="'.$row['id'].'">'.$row['fname'].' '.$row['lname'].'</option>';
                  }
                }
                ?>
              </select>
            </div>
            <div class="center">
              <button type="submit" name="submit" class="button button-icon large alt"><i class="fa fa-angle-right"></i> Submit Property</button>
            </div>
            <div class="clear"></div>
          </div><!-- end agent info -->

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