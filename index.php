<?php
//include functions script
include 'functions.php'; 

//include header script
include 'header.php';
?>


<section class="subheader subheader-slider">
  <div class="slider-wrap">

    <div class="slider-nav slider-nav-simple-slider">
      <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
      <span class="slider-next"><i class="fa fa-angle-right"></i></span>
    </div>

    <div class="slider slider-simple slider-advanced">
      <?php

      //select all from property table but limit to 2 rows
      $sql = "SELECT * FROM tbl_prop LIMIT 2";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {

        while ($row = mysqli_fetch_assoc($res)) {

          //while data is available display the following
          echo '
          <div class="slide">
          <div class="img-overlay black"></div>
          <div class="container">
          <div class="slide-price">R'.$row['price'].'</div>
          <div class="slide-content">
          <h1>'.$row['title'].'</h1>
          <p><i class="fa fa-map-marker icon"></i>'.$row['address'].'</p>
          <p class="slide-text">'.$row['description'].'</p>
          <table>
          <tr>
          <td><i class="fa fa-bed"></i><br/>'.$row['beds'].' Beds</td>
          <td><i class="fa fa-tint"></i><br/>'.$row['baths'].' Baths</td>
          <td><i class="fa fa-expand"></i><br/>'.$row['area'].' Sq Mtr</td>
          <td><i class="fa fa-car"></i><br/>'.$row['garages'].' Garage</td>
          </tr>
          </table>
          <a href="list.php" class="button small alt right">Featured</a>
          <a href="list.php" class="button small grey right">'.$row['status'].'</a>
          <a href="property.php?id='.$row['id'].'" class="button button-icon"><i class="fa fa-angle-right"></i>View Details</a>
          </div>
          </div>
          </div>';
        }
      } else {

        //if no data exist display the following message
        echo '
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>No features found.</strong>
        </div>';
      }
      ?>     
    </div><!-- end slider -->
  </div><!-- end slider wrap -->
</section>

<section class="module no-padding-top filter">

  <div class="tabs">

    <form method="post" action="list.php">
      <div class="filter-header">
        <div class="container">
          <ul>
            <li><a href="#tabs-1">Search</a></li>
          </ul>
        </div><!-- end container -->
      </div><!-- end filter header -->

      <div class="container">

        <div id="tabs-1" class="ui-tabs-hide">

          <div class="filter-item filter-item-7">
            <label>Property Type</label>
            <select name="type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
              <option value="villa">Villa</option>
              <option value="office">Office</option>
              <option value="retail">Retail</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Location</label>
            <select name="location">
              <option value="">Any</option>
              <option value="baltimore">Baltimore</option>
              <option value="annapolis">Annapolis</option>
              <option value="nyc">New York City</option>
              <option value="miami">Miami</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Price</label>
            <input type="number" name="priceMin" class="area-filter" placeholder="Min" />
            <input type="number" name="priceMax" class="area-filter" placeholder="Max" />
            <div class="clear"></div>
          </div>

          <div class="filter-item filter-item-7">
            <label>Beds</label>
            <select name="beds" id="property-beds">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Baths</label>
            <select name="baths" id="property-baths">
              <option value="">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Area</label>
            <input type="number" name="areaMin" class="area-filter" placeholder="Min" />
            <input type="number" name="areaMax" class="area-filter" placeholder="Max" />
            <div class="clear"></div>
          </div>

          <div class="filter-item filter-item-7">
            <label class="label-submit">Submit</label><br/>
            <input type="submit" name="submit_search" class="button alt" value="Find Properties" />
          </div>

        </div><!-- end tab 1 -->

      </form>
    </div><!-- end container -->
  </div><!-- end tabs -->
</section>

<section class="module services">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-home"></i>
          <h4>Sell Property</h4>
          <p>Reach thousands of property buyers on a safe platform</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-group"></i>
          <h4>Expert Agents</h4>
          <p>Have the best agents in the country help you or do it for you</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-file-text"></i>
          <h4>Daily Listings</h4>
          <p>Our listings are updated daily and with a huge variety</p>
        </div>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>

<section class="module no-padding properties featured">

  <div class="container">
    <div class="module-header">
      <h2>Featured <strong>Properties</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Below is a list of all the featured properties</p>
    </div>
  </div>

  <div class="slider-nav slider-nav-properties-featured">
    <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
    <span class="slider-next"><i class="fa fa-angle-right"></i></span>
  </div>
  
  <div class="slider-wrap">
    <div class="slider slider-featured">
      <?php

      //select only 10 properties
      $sql = "SELECT * FROM tbl_prop LIMIT 10";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {

        //if data exists proceed to the while loop
        while ($row = mysqli_fetch_assoc($res)) {

          //while there is data display the following
          echo '
          <div class="property property-hidden-content slide">
          <a href="#" class="property-content">
          <div class="property-title">
          <h4>'.$row['title'].'</h4>
          <p class="property-address"><i class="fa fa-map-marker icon"></i>'.$row['address'].'</p>
          </div>
          <table class="property-details">
          <tr>
          <td><i class="fa fa-bed"></i> '.$row['beds'].' Beds</td>
          <td><i class="fa fa-tint"></i> '.$row['baths'].' Baths</td>
          <td><i class="fa fa-expand"></i> '.$row['area'].' Sq Mtr</td>
          </tr>
          </table>
          </a>
          <a href="property.php?id='.$row['id'].'" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">'.$row['status'].'</div>
          <div class="property-price">R'.$row['price'].'</div>
          <div class="property-color-bar"></div>
          <img src="'.$row['image'].'" alt="" />
          </a>
          </div>';
        }
      } else {

        //else if there is no data display the following message
        echo '
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>No features found.</strong>
        </div>';
      }
      ?> 
    </div><!-- end slider -->
  </div><!-- end slider wrap -->
</section>

<section class="module properties">
  <div class="container">

    <div class="module-header">
      <h2>Recently Added <strong>Properties</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Here is a list of our recently added properties</p>
    </div>

    <div class="row">
      <?php

      //display only 3 properties
      $sql = "SELECT * FROM tbl_prop LIMIT 3";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {

        //if data then run while
        while ($row = mysqli_fetch_assoc($res)) {

          //while there is data, run while
          echo '
          <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
          <a href="#" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">'.$row['status'].'</div>
          <div class="property-price">R'.$row['price'].'</div>
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

        //when no data display message
        echo '
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>No features found.</strong>
        </div>';
      }
      ?>
    </div><!-- end row -->

    <div class="center"><a href="list.php" class="button button-icon more-properties-btn"><i class="fa fa-angle-right"></i> View More Properties</a></div>

  </div><!-- end container -->
</section>

<section class="module agents-featured">
  <div class="container">

    <div class="module-header">
      <h2>Meet Our <strong>Agents</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Meet some of the best agents in the game</p>
    </div>

    <div class="row">
      <?php

      //sql statement to select 3 users
      $sql = "SELECT * FROM tbl_user LIMIT 3";
      $res = mysqli_query($con, $sql);

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
        <strong>No features found.</strong>
        </div>';
      }
      ?> 
    </div>
  </div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>