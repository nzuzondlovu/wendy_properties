<?php 
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
          <p>hello@homely.com</p>
          <p>support@homely.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Call Us</h4>
          <p>General: 123 456 5665</p>
          <p>Support: (+200) 123 456 5665</p>
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
          <p><b>Fill out the form below.</b> Morbi accumsan ipsum velit Nam nec tellus a odio tincidunt auctor a ornare odio sedlon maurisvitae erat consequat auctor</p>
          
		  <form method="post" id="contact-us">
		  
					  
            <div class="form-block">
              <label>
				Name *
							</label>
              <input class="requiredField" type="text" placeholder="Your Name" name="name" value="" />
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
              <input type="submit" value="Submit" />
			  <input type="hidden" name="submitted" id="submitted" value="true" />
            </div>
          </form>
        </div>

        <div class="divider"></div><br/>
        <h4>Still need help?</h4>
        <p>If you still have questions, try visiting our <a href="#"><b>FAQ</b></a> page to assit you. Morbi accumsan ipsum velit Nam nec tellus a odio tincidunt auctor a ornare odio sedlon maurisvitae erat consequat auctor</p>

      </div>

      <div class="col-lg-4 col-md-4 sidebar">

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

      </div>

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