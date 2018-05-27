<?php 
include 'functions.php';

$id = mysqli_real_escape_string($con, strip_tags(trim($_GET["id"])));
$sql = "SELECT * FROM tbl_prop WHERE id=".$id."";
$res = mysqli_query($con, $sql);

if (isset($id) && $id != '' && mysqli_num_rows($res) > 0) {
	
	$row = mysqli_fetch_assoc($res);

} else {
	header('Location: list.php');
}


include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Property Single</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> Properties <i class="fa fa-angle-right"></i> <a href="#" class="current"><?php echo $row['address']; ?></a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-8 col-md-8">
		
			<div class="property-single-item property-main">
				<div class="property-header">
					<div class="property-title">
						<h4><?php echo $row['title']; ?></h4>
            <div class="property-price-single right">R<?php echo $row['price']; ?> <span>Per Month</span></div>
						<p class="property-address"><i class="fa fa-map-marker icon"></i><?php echo $row['address']; ?></p>
            <div class="clear"></div>
					</div>
					<div class="property-single-tags">
						<div class="property-tag button alt featured">Featured</div>
						<div class="property-tag button status"><?php echo $row['status']; ?></div>
						<div class="property-type right">Property Type: <a href="#"><?php echo $row['type']; ?></a></div>
					</div>
				</div>

				<table class="property-details-single">
					<tr>
						<td><i class="fa fa-bed"></i> <span><?php echo $row['beds']; ?></span> Beds</td>
						<td><i class="fa fa-tint"></i> <span><?php echo $row['baths']; ?></span> Baths</td>
						<td><i class="fa fa-expand"></i> <span><?php echo $row['area']; ?></span> Sq Mtr</td>
						<td><i class="fa fa-car"></i> <span><?php echo $row['garages']; ?></span> Garage</td>
					</tr>
				</table>

        <div class="property-gallery">
          <div class="slider-nav slider-nav-property-gallery">
            <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="slide-counter"></div>
          <div class="slider slider-property-gallery">
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
            <div class="slide"><img src="<?php echo $row['image']; ?>" alt="" /></div>
          </div>
          <div class="slider property-gallery-pager">
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
            <a class="property-gallery-thumb"><img src="<?php echo $row['image']; ?>" alt="" /></a>
          </div>
        </div>

			</div><!-- end property title and gallery -->

			<div class="widget property-single-item property-description content">
				<h4>
					<span>Description</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<p><?php echo $row['description']; ?></p>

				<div class="tabs">
			        <ul>
			          <li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Additional Details</a></li>
			          <li><a href="#tabs-2"><i class="fa fa-crop icon"></i>Floor Plans</a></li>
			          <li><a href="#tabs-3"><i class="fa fa-files-o icon"></i>Attachments</a></li>
			        </ul>
			        <div id="tabs-1" class="ui-tabs-hide">
			          <ul class="additional-details-list">
			          	<li>Property ID: <span><?php echo $row['id']; ?></span></li>
			          	<li>Contact: <span><?php echo $row['status']; ?></span></li>
			          	<li>Type: <span><?php echo $row['type']; ?></span></li>
			          	<li>Year Built: <span>2001</span></li>
			          	<li>Lot Dimensions: <span><?php echo $row['area']; ?></span></li>
			          	<li>Deposit Amount: <span>20%</span></li>
			          </ul>
			        </div>
			        <div id="tabs-2" class="ui-tabs-hide">
			          <a href="#"><img src="images/floor-plan1.jpg" alt="" /></a>
			        </div>
			        <div id="tabs-3" class="ui-tabs-hide">
			          <a href="#"><i class="fa fa-file-o icon"></i> Lease Agreement</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Brochure</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Property Details</a>
			        </div>
			    </div>
			</div><!-- end description -->

			<div class="widget property-single-item property-amenities">
				<h4>
					<span>Amenities</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<ul class="amenities-list">
					<li><i class="fa fa-check icon"></i> Balcony</li>
					<li><i class="fa fa-check icon"></i> Cable TV</li>
					<li><i class="fa fa-check icon"></i> Deck</li>
					<li><i class="fa fa-check icon"></i> Dishwasher</li>
					<li><i class="fa fa-check icon"></i> Heating</li>
					<li><i class="fa fa-close icon"></i> Internet</li>
					<li><i class="fa fa-check icon"></i> Parking</li>
					<li><i class="fa fa-check icon"></i> Pool</li>
					<li><i class="fa fa-check icon"></i> Oven</li>
					<li><i class="fa fa-close icon"></i> Gym</li>
					<li><i class="fa fa-check icon"></i> Laundry Room</li>
				</ul>
			</div><!-- end amenities -->

			<div class="widget property-single-item property-location">
				<h4>
					<span>Location</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div id="map-single"></div>
			</div><!-- end location -->

			<div class="widget property-single-item property-agent">
				<h4>
					<span>Agent</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div class="agent">
			        <a href="#" class="agent-img">
			            <div class="img-fade"></div>
			            <div class="button alt agent-tag">68 Properties</div>
			            <img src="images/agent-img2.jpg" alt="" />
			        </a>
			        <div class="agent-content">
			            <a href="#" class="button button-icon small right"><i class="fa fa-angle-right"></i>Contact Agent</a>
			            <a href="#" class="button button-icon small grey right"><i class="fa fa-angle-right"></i>Agent Details</a>
			            <div class="agent-details">
			                <h4><a href="#">John Doe</a></h4>
			                <p><i class="fa fa-tag icon"></i>Buying Agent</p>
			                <p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
			                <p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
			            </div>
			            <ul class="social-icons">
			                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			            </ul>
			        </div>
			        <div class="clear"></div>
			    </div>
			</div><!-- end agent -->

			<div class="widget property-single-item property-related">
				<h4>
					<span>Related Properties</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>

				<div class="row">
			        <div class="col-lg-6 col-md-6">
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

			        <div class="col-lg-6 col-md-6">
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

			    </div><!-- end row -->
			</div><!-- end related properties -->

		</div><!-- end col -->
		
		<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
		
			<div class="widget widget-sidebar advanced-search">
			  <h4><span>Advanced Search</span> <img src="images/divider-half-white.png" alt="" /></h4>
			  <div class="widget-content box">
				<form>
				  <div class="form-block border">
					<label for="property-location">Location</label>
					<select id="property-location" class="border">
					  <option value="">Any</option>
					  <option value="baltimore">Baltimore</option>
					  <option value="ny">New York</option>
					  <option value="nap">Annapolis</option>
					</select>
				  </div>

				  <div class="form-block border">
					<label for="property-status">Property Status</label>
					<select id="property-status" class="border">
					  <option value="">Any</option>
					  <option value="sale">For Sale</option>
					  <option value="rent">For Rent</option>
					</select>
				  </div>

				  <div class="form-block border">
					<label for="property-type">Property Type</label>
					<select id="property-type" class="border">
					  <option value="">Any</option>
					  <option value="family">Family Home</option>
					  <option value="apartment">Apartment</option>
					  <option value="apartment">Condo</option>
					</select>
				  </div>
				  
				  <div class="form-block">
            <label>Price</label>
            <div class="price-slider" id="price-slider"></div>
          </div>

				  <div class="form-block border">
					<label>Beds</label>
					<select name="beds" id="property-beds" class="border">
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

				  <div class="form-block border">
					<label>Baths</label>
					<select name="baths" id="property-baths" class="border">
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

				  <div class="form-block">
					<label>Area</label>
					<input type="number" name="areaMin" class="area-filter border" placeholder="Min" />
					<input type="number" name="areaMax" class="area-filter border" placeholder="Max" />
					<div class="clear"></div>
				  </div>

				  <div class="form-block">
					<input type="submit" class="button" value="Find Properties" />
				  </div>
				</form>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
			
			<div class="widget widget-sidebar recent-properties">
			  <h4><span>Recent Properties</span> <img src="images/divider-half.png" alt="" /></h4>
			  <div class="widget-content">

				<div class="recent-property">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/property-img1.jpg" alt="" /></a></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
					  <h5><a href="#">Beautiful Waterfront Condo</a></h5>
					  <p><strong>$1,800</strong> Per Month</p>
					</div>
				  </div>
				</div>

				<div class="recent-property">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/property-img2.jpg" alt="" /></a></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
					  <h5><a href="#">Family Home</a></h5>
					  <p><strong>$500,000</strong></p>
					</div>
				  </div>
				</div>

				<div class="recent-property">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/property-img3.jpg" alt="" /></a></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
					  <h5><a href="#">Ubran Apartment</a></h5>
					  <p><strong>$1,800</strong> Per Month</p>
					</div>
				  </div>
				</div>

			  </div><!-- end widget content -->
			</div><!-- end widget -->

      <div class="widget widget-sidebar recent-posts">
          <h4><span>Recent Blog Posts</span> <img src="images/divider-half.png" alt="" /></h4>
          <div class="widget-content">

          <div class="recent-property">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/blog-img1-thumb.jpg" alt="" /></a></div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <h5><a href="#">6 Tips to help you sell your house</a></h5>
              <p><i class="fa fa-calendar-o"></i> Feb, 18th 2017</p>
            </div>
            </div>
          </div>

          <div class="recent-property">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/blog-img2-thumb.jpg" alt="" /></a></div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <h5><a href="#">Common mistakes to avoid when moving </a></h5>
              <p><i class="fa fa-calendar-o"></i> Feb, 18th 2017</p>
            </div>
            </div>
          </div>

          <div class="recent-property">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/blog-img3-thumb.jpg" alt="" /></a></div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <h5><a href="#">How to design a minimal but productive home office </a></h5>
              <p><i class="fa fa-calendar-o"></i> Feb, 18th 2017</p>
            </div>
            </div>
          </div>

          </div><!-- end widget content -->
      </div><!-- end widget -->
			
			<div class="widget widget-sidebar recent-properties">
			  <h4><span>Quick Links</span> <img src="images/divider-half.png" alt="" /></h4>
			  <div class="widget-content box">
				<ul class="bullet-list">
				  <li><a href="#">Featured Properties</a></li>
				  <li><a href="#">Featured Agents</a></li>
				  <li><a href="#">Terms & Conditions</a></li>
				  <li><a href="#">Privacy Policy</a></li>
				  <li><a href="#">Frequently Asked Questions</a></li>
				  <li><a href="#">Login</a></li>
				  <li><a href="#">Submit a Property</a></li>
				</ul>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
		
		</div><!-- end sidebar -->
		
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