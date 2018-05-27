<?php 
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

    <form class="multi-page-form" method="post">

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
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </td>
          </tr>
        </table>

            <div class="form-block">
              <label>Property Title*</label>
              <input class="border required" type="text" name="property-title" />
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Price*</label>
                  <input class="border required" type="number" name="price" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Price Postfix</label>
                  <input class="border" type="text" name="price-post" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Bedrooms</label>
                  <input class="border" type="number" name="beds" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Bathrooms</label>
                  <input class="border" type="number" name="baths" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Garages</label>
                  <input class="border" type="number" name="garages" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Area</label>
                  <input class="border" type="number" name="area" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Area Postfix</label>
                  <input class="border" type="text" name="area-post" />
                </div>
              </div>
            </div>

            <div class="form-block border">
                  <label>Property Type</label>
                  <select name="property-type" class="border">
                    <option></option>
                    <option value="family-house">Family House</option>
                    <option value="apartment">Apartment</option>
                    <option value="condo">Condo</option>
                  </select>
            </div>

            <div class="form-block border">
                  <label>Property Status</label>
                  <select name="property-type" class="border">
                    <option></option>
                    <option value="for-rent">For Rent</option>
                    <option value="for-sale">For Sale</option>
                    <option value="sold">Sold</option>
                  </select>
            </div>

            <div class="form-block">
              <label>Description</label>
              <textarea class="border" name="description"></textarea>
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
              <h4>Property Images</h4>
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </td>
          </tr>
        </table>

        <div class="form-block">
          <label>Featured Image</label>
          <input type="file" name="featured-img" />
        </div>
        <br/>

        <div class="form-block gallery">
          <label>Gallery Images</label>
          <div class="additional-img-container">
                <table>
                    <tr>
                    <td>
                    <div class="media-uploader-additional-img">
                    <input type="file" class="additional_img" name="additional_img1" value="" />
                    <span class="delete-additional-img right"><i class="fa fa-trash"></i> Delete</span>
                    </div>
                    </td>
                    </tr>
                </table>
            </div>
            <span class="button small add-additional-img">Add Image</span>
        </div>

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
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
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
                <input type="text" name="property_latitude" class="border" id="property_latitude" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-block">
                <label for="property_longitude">Longitude</label>
                <input type="text" name="property_longitude" class="border" id="property_longitude" />
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
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
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
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </td>
          </tr>
        </table>

        <div class="form-block">
            <label>What do you want displayed for the agent info?</label>
            <input type="radio" name="agent_display" id="agent_display_agent" value="agent" checked/>Existing Agent<br/>
            <input type="radio" name="agent_display" id="agent_display_custom" value="custom" />Custom<br/>
            <input type="radio" name="agent_display" id="agent_display_author" value="author" />Your Profile Info<br/>
            <input type="radio" name="agent_display" id="agent_display_none" value="none" />None<br/>
        </div><br/>

        <div class="form-block form-block-agent-options form-block-select-agent border">
            <label for="agent_select">Select Agent</label>
            <select name="agent_select" class="border">
                <option value="">
                <option value="John Doe">John Doe</option>
                <option value="Sarah Parker">Sarah Parker</option>
                <option value="Cassandra Smith">Cassandra Smith</option>
                <option value="Jim Sparks">Jim Sparks</option>
            </select>
        </div>

        <div class="form-block form-block-agent-options form-block-custom-agent show-none">
            <label>Custom Owner/Agent Details</label>
            <input class="border" type="text" name="agent_custom_name" placeholder="Name" />
            <input class="border" type="text" name="agent_custom_email" placeholder="Email" />
            <input class="border" type="text" name="agent_custom_phone" placeholder="Phone" />
            <input class="border" type="text" name="agent_custom_url" placeholder="Website" />
        </div>

        <div class="center"><button type="submit" class="button button-icon large alt"><i class="fa fa-angle-right"></i> Submit Property</button></div>
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