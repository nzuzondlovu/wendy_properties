<?php 
include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Agent Listing Grid</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Agents</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="property-listing-header">
		<span class="property-count left">8 agents found</span>
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
	</div><!-- end row -->
	
	<div class="row">
		<div class="col-lg-3 col-md-3">
          <div class="agent shadow-hover">
            <a href="#" class="agent-img">
              <div class="img-fade"></div>
              <div class="button alt agent-tag">24 Properties</div>
              <img src="images/agent-img3.jpg" alt="" />
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
              <img src="images/agent-img4.jpg" alt="" />
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
              <img src="images/agent-img2.jpg" alt="" />
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
              <img src="images/agent-img1.jpg" alt="" />
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