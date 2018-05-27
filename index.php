<?php
include 'functions.php'; 

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

      $sql = "SELECT * FROM tbl_prop LIMIT 2";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {

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
          <a href="#" class="button small alt right">Featured</a>
          <a href="#" class="button small grey right">'.$row['status'].'</a>
          <a href="property.php?id='.$row['id'].'" class="button button-icon"><i class="fa fa-angle-right"></i>View Details</a>
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
    </div><!-- end slider -->
  </div><!-- end slider wrap -->
</section>

<section class="module no-padding-top filter">

  <div class="tabs">

    <form method="post" action="list.php">
      <div class="filter-header">
        <div class="container">
          <ul>
            <li><a href="#tabs-1">All</a></li>
            <li><a href="#tabs-2">For Sale</a></li>
            <li><a href="#tabs-3">For Rent</a></li>
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
      <!-- <div id="tabs-2" class="ui-tabs-hide">
        <form method="get">

          <div class="filter-item filter-item-7">
            <label>Property Type</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Location</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Price</label>
            <div class="price-slider" id="price-slider"></div>
            <div class="price-slider-values">
              <span class="price-range-num" id="price-low-value-1"></span>
              <span class="price-range-num right" id="price-high-value-1"></span>
            </div>
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
            <input type="submit" class="button alt" value="Find Properties" />
          </div>

        </form>
      </div>end tab 2

      <div id="tabs-3" class="ui-tabs-hide">
        <form method="get">

          <div class="filter-item filter-item-7">
            <label>Property Type</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Location</label>
            <select name="property-type">
              <option value="">Any</option>
              <option value="family-house">Family House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
            </select>
          </div>

          <div class="filter-item filter-item-7">
            <label>Price</label>
            <div class="price-slider" id="price-slider"></div>
            <div class="price-slider-values">
              <span class="price-range-num" id="price-low-value-2"></span>
              <span class="price-range-num right" id="price-high-value-2"></span>
            </div>
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
            <input type="submit" class="button alt" value="Find Properties" />
          </div>

        </form>
      </div> --><!-- end tab 3 -->

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
          <p>Morbi accumsan ipsum velit Nam nec tellus 
            a odio tincidunt auctor a ornare odio sedlon 
          maurisvitae erat consequat auctor</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-group"></i>
          <h4>Expert Agents</h4>
          <p>Morbi accumsan ipsum velit Nam nec tellus 
            a odio tincidunt auctor a ornare odio sedlon 
          maurisvitae erat consequat auctor</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-file-text"></i>
          <h4>Daily Listings</h4>
          <p>Morbi accumsan ipsum velit Nam nec tellus 
            a odio tincidunt auctor a ornare odio sedlon 
          maurisvitae erat consequat auctor</p>
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
      <p>Morbi accumsan ipsum velit nam nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor</p>
    </div>
  </div>

  <div class="slider-nav slider-nav-properties-featured">
    <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
    <span class="slider-next"><i class="fa fa-angle-right"></i></span>
  </div>
  
  <div class="slider-wrap">
    <div class="slider slider-featured">

      <div class="property property-hidden-content slide">
        <a href="#" class="property-content">
          <div class="property-title">
            <h4>Modern Family Home</h4>
            <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
          </div>
          <table class="property-details">
            <tr>
              <td><i class="fa fa-bed"></i> 3 Beds</td>
              <td><i class="fa fa-tint"></i> 2 Baths</td>
              <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
            </tr>
          </table>
        </a>
        <a href="#" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">For Rent</div>
          <div class="property-price">$150,000</div>
          <div class="property-color-bar"></div>
          <img src="images/property-img1.jpg" alt="" />
        </a>
      </div>

      <div class="property property-hidden-content slide">
        <a href="#" class="property-content">
          <div class="property-title">
            <h4>Modern Family Home</h4>
            <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
          </div>
          <table class="property-details">
            <tr>
              <td><i class="fa fa-bed"></i> 3 Beds</td>
              <td><i class="fa fa-tint"></i> 2 Baths</td>
              <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
            </tr>
          </table>
        </a>
        <a href="#" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">For Rent</div>
          <div class="property-price">$150,000</div>
          <div class="property-color-bar"></div>
          <img src="images/property-img2.jpg" alt="" />
        </a>
      </div>

      <div class="property property-hidden-content slide">
        <a href="#" class="property-content">
          <div class="property-title">
            <h4>Modern Family Home</h4>
            <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
          </div>
          <table class="property-details">
            <tr>
              <td><i class="fa fa-bed"></i> 3 Beds</td>
              <td><i class="fa fa-tint"></i> 2 Baths</td>
              <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
            </tr>
          </table>
        </a>
        <a href="#" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">For Rent</div>
          <div class="property-price">$150,000</div>
          <div class="property-color-bar"></div>
          <img src="images/property-img3.jpg" alt="" />
        </a>
      </div>

      <div class="property property-hidden-content slide">
        <a href="#" class="property-content">
          <div class="property-title">
            <h4>Modern Family Home</h4>
            <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
          </div>
          <table class="property-details">
            <tr>
              <td><i class="fa fa-bed"></i> 3 Beds</td>
              <td><i class="fa fa-tint"></i> 2 Baths</td>
              <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
            </tr>
          </table>
        </a>
        <a href="#" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">For Rent</div>
          <div class="property-price">$150,000</div>
          <div class="property-color-bar"></div>
          <img src="images/property-img4.jpg" alt="" />
        </a>
      </div>

      <div class="property property-hidden-content slide">
        <a href="#" class="property-content">
          <div class="property-title">
            <h4>Modern Family Home</h4>
            <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
          </div>
          <table class="property-details">
            <tr>
              <td><i class="fa fa-bed"></i> 3 Beds</td>
              <td><i class="fa fa-tint"></i> 2 Baths</td>
              <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
            </tr>
          </table>
        </a>
        <a href="#" class="property-img">
          <div class="img-fade"></div>
          <div class="property-tag button alt featured">Featured</div>
          <div class="property-tag button status">For Rent</div>
          <div class="property-price">$150,000</div>
          <div class="property-color-bar"></div>
          <img src="images/property-img2.jpg" alt="" />
        </a>
      </div>

    </div><!-- end slider -->
  </div><!-- end slider wrap -->
</section>

<section class="module property-categories">
  <div class="container">

    <div class="module-header">
      <h2>Browse Our Most <strong>Popular Categories</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Morbi accumsan ipsum velit nam nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor</p>
    </div>

    <div class="row">
      <div class="col-lg-8 col-md-8">
        <a href="#" class="property-cat property-cat-apartments">
          <h3>Studio Apartments</h3>
          <div class="color-bar"></div>
          <span class="button small">234 Properties</span>
        </a>
      </div>
      <div class="col-lg-4 col-md-4">
        <a href="#" class="property-cat property-cat-houses">
          <h3>Family Homes</h3>
          <div class="color-bar"></div>
          <span class="button small">234 Properties</span>
        </a>
      </div>
    </div><!-- end row -->

    <div class="row">
      <div class="col-lg-4 col-md-4">
        <a href="#" class="property-cat property-cat-condos">
          <h3>Condos & Villas</h3>
          <div class="color-bar"></div>
          <span class="button small">234 Properties</span>
        </a>
      </div>
      <div class="col-lg-4 col-md-4">
        <a href="#" class="property-cat property-cat-waterfront">
          <h3>Waterfront Homes</h3>
          <div class="color-bar"></div>
          <span class="button small">234 Properties</span>
        </a>
      </div>
      <div class="col-lg-4 col-md-4">
        <a href="#" class="property-cat property-cat-cozy">
          <h3>Cozy Houses</h3>
          <div class="color-bar"></div>
          <span class="button small">234 Properties</span>
        </a>
      </div>
    </div><!-- end row -->

  </div><!-- end container -->
</section>

<section class="module testimonials">

  <div class="container">
    <div class="module-header">
      <h2>Our <strong>Testimonials</strong></h2>
      <img src="images/divider-white.png" alt="" />
      <p>Morbi accumsan ipsum velit nam nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor</p>
    </div>
  </div>

  <div class="slider-nav slider-nav-testimonials">
    <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
    <span class="slider-next"><i class="fa fa-angle-right"></i></span>
  </div>

  <div class="container">
    <div class="slider slider-testimonials">
      <div class="testimonial slide">
        <h3>"Homely helped us sell our house with minimal effort. Their team was efficient and always there to help!"</h3>
        <div class="testimonial-details">
          <img class="testimonial-img" src="images/testimonial-img.png" alt="" />
          <p class="testimonial-name"><strong>John Doe</strong></p>
          <span class="testiomnial-title"><em>CEO at <a href="#">Rype Creative</a></em></span>
        </div>
      </div>
      <div class="testimonial slide">
        <h3>"Homely helped us sell our house with minimal effort. Their team was efficient and always there to help! Homely helped us sell our house with minimal effort. Their team was efficient and always there to help!"</h3>
        <div class="testimonial-details">
          <img class="testimonial-img" src="images/testimonial-img.png" alt="" />
          <p class="testimonial-name"><strong>John Doe</strong></p>
          <span class="testiomnial-title"><em>CEO at <a href="#">Rype Creative</a></em></span>
        </div>
      </div>
    </div><!-- end slider -->
  </div><!-- end container -->
</section>

<section class="module properties">
  <div class="container">

    <div class="module-header">
      <h2>Recently Added <strong>Properties</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Morbi accumsan ipsum velit nam nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-4">
        <div class="property shadow-hover">
          <a href="#" class="property-img">
            <div class="img-fade"></div>
            <div class="property-tag button alt featured">Featured</div>
            <div class="property-tag button status">For Sale</div>
            <div class="property-price">$150,000</div>
            <div class="property-color-bar"></div>
            <img src="images/property-img1.jpg" alt="" />
          </a>
          <div class="property-content">
            <div class="property-title">
              <h4><a href="#">Modern Family Home</a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
            </div>
            <table class="property-details">
              <tr>
                <td><i class="fa fa-bed"></i> 3 Beds</td>
                <td><i class="fa fa-tint"></i> 2 Baths</td>
                <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
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
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="property shadow-hover">
          <a href="#" class="property-img">
            <div class="img-fade"></div>
            <div class="property-tag button alt featured">Featured</div>
            <div class="property-tag button status">For Rent</div>
            <div class="property-price">$6,500 <span>Per Month</span></div>
            <div class="property-color-bar"></div>
            <img src="images/property-img3.jpg" alt="" />
          </a>
          <div class="property-content">
            <div class="property-title">
              <h4><a href="#">Beautiful Waterfront Condo</a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
            </div>
            <table class="property-details">
              <tr>
                <td><i class="fa fa-bed"></i> 3 Beds</td>
                <td><i class="fa fa-tint"></i> 2 Baths</td>
                <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
              </tr>
            </table>
          </div>
          <div class="property-footer">
            <span class="left"><i class="fa fa-calendar-o icon"></i> 1 week ago</span>
            <span class="right">
              <a href="#"><i class="fa fa-heart-o icon"></i></a>
              <a href="#"><i class="fa fa-share-alt"></i></a>
            </span>
            <div class="clear"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="property shadow-hover">
          <a href="#" class="property-img">
            <div class="img-fade"></div>
            <div class="property-tag button alt featured">Featured</div>
            <div class="property-tag button status">For Rent</div>
            <div class="property-price">$150,000</div>
            <div class="property-color-bar"></div>
            <img src="images/property-img4.jpg" alt="" />
          </a>
          <div class="property-content">
            <div class="property-title">
              <h4><a href="#">Modern Family Home</a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
            </div>
            <table class="property-details">
              <tr>
                <td><i class="fa fa-bed"></i> 3 Beds</td>
                <td><i class="fa fa-tint"></i> 2 Baths</td>
                <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
              </tr>
            </table>
          </div>
          <div class="property-footer">
            <span class="left"><i class="fa fa-calendar-o icon"></i> 2 weeks ago</span>
            <span class="right">
              <a href="#"><i class="fa fa-heart-o icon"></i></a>
              <a href="#"><i class="fa fa-share-alt"></i></a>
            </span>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div><!-- end row -->

    <div class="center"><a href="#" class="button button-icon more-properties-btn"><i class="fa fa-angle-right"></i> View More Properties</a></div>

  </div><!-- end container -->
</section>

<section class="module agents-featured">
  <div class="container">

    <div class="module-header">
      <h2>Meet Our <strong>Agents</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Morbi accumsan ipsum velit nam nec tellus a odiose tincidunt auctor a ornare odio sed non mauris vitae erat consequat auctor</p>
    </div>

    <div class="row">
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
     <div class="col-lg-3 col-md-3">
      <div class="agent shadow-hover">
        <a href="#" class="agent-img">
          <div class="img-fade"></div>
          <div class="button alt agent-tag">68 Properties</div>
          <img src="images/agent-img2.jpg" alt="" />
        </a>
        <div class="agent-content">
          <div class="agent-details">
            <h4><a href="#">John Doe</a></h4>
            <p><i class="fa fa-tag icon"></i>Buying Agent</p>
            <p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
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
   <div class="col-lg-3 col-md-3">
    <div class="agent shadow-hover">
      <a href="#" class="agent-img">
        <div class="img-fade"></div>
        <div class="button alt agent-tag">32 Properties</div>
        <img src="images/agent-img4.jpg" alt="" />
      </a>
      <div class="agent-content">
        <div class="agent-details">
          <h4><a href="#">Cassandra Smith</a></h4>
          <p><i class="fa fa-tag icon"></i>Senior Agent</p>
          <p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
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
 <div class="col-lg-3 col-md-3">
  <div class="agent shadow-hover">
    <a href="#" class="agent-img">
      <div class="img-fade"></div>
      <div class="button alt agent-tag">24 Properties</div>
      <img src="images/agent-img3.jpg" alt="" />
    </a>
    <div class="agent-content">
      <div class="agent-details">
        <h4><a href="#">Jim Sparks</a></h4>
        <p><i class="fa fa-tag icon"></i>Buying Agent</p>
        <p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
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
</div>

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