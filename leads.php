<?php 
include 'header.php';
?>


<section class="subheader">
  <div class="container">
    <h1>Favorited Properties</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Favorited Properties</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module favorited-properties">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-3 col-md-3 sidebar-left">
			<div class="widget member-card">
				<div class="member-card-header">
					<a href="#" class="member-card-avatar"><img src="images/agent-img3.jpg" alt="" /></a>
					<h3>John Doe</h3>
					<p><i class="fa fa-envelope icon"></i>jdoe@gmail.com</p>
				</div>
				<div class="member-card-content">
					<img class="hex" src="images/hexagon.png" alt="" />
					<ul>
						<li><a href="user-profile.html"><i class="fa fa-user icon"></i>Profile</a></li>
						<li><a href="user-my-properties.html"><i class="fa fa-home icon"></i>My Properties</a></li>
						<li class="active"><a href="user-favorite-properties.html"><i class="fa fa-heart icon"></i>Favorited Properties</a></li>
						<li><a href="user-submit-property.html"><i class="fa fa-plus icon"></i>Submit Property</a></li>
						<li><a href="#"><i class="fa fa-reply icon"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9">
			<table class="my-properties-list favorite-properties-list">
			  <tr>
				<th>Image</th>
				<th>Property</th>
				<th>Actions</th>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/property-img4.jpg" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/property-img1.jpg" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Ubran Apartment</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$12,000</strong> Per Month</p>
				</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/property-img2.jpg" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/property-img3.jpg" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/property-img4.jpg" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			</table>
			
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