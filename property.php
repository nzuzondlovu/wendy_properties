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

if (isset($_POST['submit'])) {
	
	$id = mysqli_real_escape_string($con, strip_tags(trim($_GET["id"])));
	$fname = mysqli_real_escape_string($con, strip_tags(trim($_POST["fname"])));
	$lname = mysqli_real_escape_string($con, strip_tags(trim($_POST["lname"])));
	$email = mysqli_real_escape_string($con, strip_tags(trim($_POST["email"])));
	$message = mysqli_real_escape_string($con, strip_tags(trim($_POST["messsage"])));

	if ($id != '' && $fname != '' && $lname != '' && $email != '' && $message != '') {
		
		$sql = "INSERT INTO tbl_lead(fname, lname, email, message, prop_id) VALUES ('".$fname."', '".$lname."', '".$email."', '".$message."', '".$id."')";
		mysqli_query($con, $sql);
		$_SESSION['success'] = 'Message sent successfully to agent.';

	} else {
		$_SESSION['failure'] = 'Please fill in all fields';
	}
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
					<?php

					$sql = "SELECT * FROM tbl_user WHERE id='".$row['agent']."'";
					$res = mysqli_query($con, $sql);

					if (isset($id) && $id != '' && mysqli_num_rows($res) > 0) {

						$row = mysqli_fetch_assoc($res);

					}
					?>
					<div class="agent">
						<a href="#" class="agent-img">
							<div class="img-fade"></div>
							<div class="button alt agent-tag">68 Properties</div>
							<img src="<?php echo $row['image']; ?>" alt="" />
						</a>
						<div class="agent-content">
							<a href="#" class="button button-icon small right"><i class="fa fa-angle-right"></i>Contact Agent</a>
							<a href="#" class="button button-icon small grey right"><i class="fa fa-angle-right"></i>Agent Details</a>
							<div class="agent-details">
								<h4><a href="#"><?php echo $row['fname'].' '.$row['lname']; ?></a></h4>
								<p><i class="fa fa-tag icon"></i><?php echo $row['id']; ?></p>
								<p><i class="fa fa-envelope icon"></i><?php echo $row['email']; ?></p>
								<p><i class="fa fa-phone icon"></i><?php echo $row['phone']; ?></p>
							</div>
							<ul class="social-icons">
								<li><a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
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
						<?php

						$sql = "SELECT * FROM tbl_prop WHERE agent='".$row['id']."' LIMIT 2";
						$res = mysqli_query($con, $sql);

						if (isset($id) && $id != '' && mysqli_num_rows($res) > 0) {

							while ($row = mysqli_fetch_assoc($res)) {

								echo '
								<div class="col-lg-6 col-md-6">
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
								<h4><a href="#">'.$row['title'].'</a></h4>
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
				</div><!-- end related properties -->

			</div><!-- end col -->

			<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">

				<div class="widget widget-sidebar advanced-search">
					<h4><span>Contact Agent</span> <img src="images/divider-half-white.png" alt="" /></h4>
					<div class="widget-content box">
						<form method="post">
							<div class="form-block border">
								<label for="property-location">First Name</label>
								<input type="text" name="fname" class="border" placeholder="First Name" />
							</div>

							<div class="form-block border">
								<label for="property-status">Last Name</label>
								<input type="text" name="lname" class="border" placeholder="Last Name" />
							</div>

							<div class="form-block border">
								<label for="property-type">Email</label>
								<input type="email" name="email" class="border" placeholder="Email" />
							</div>

							<div class="form-block">
								<label>Messsage</label>
								<textarea name="messsage" class="border"></textarea>
							</div>

							<div class="form-block">
								<button class="btn btn-primary" type="submit" name="submit">Submit Message</button>
							</div>
						</form>
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