<?php 
//include functions script for db connection
include 'functions.php';

//Get id from the url and sanitize it then run sql statement
$id = mysqli_real_escape_string($con, strip_tags(trim($_GET["id"])));
$sql = "SELECT * FROM tbl_user WHERE id=".$id."";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) {
	
	//Fetch data from the database
	$row = mysqli_fetch_assoc($res);

} else {
	//If the requested agent does not exist, return to the agents page
	header('Location: agents.php');
}

include 'header.php';
?>


<section class="subheader">
	<div class="container">
		<h1>Agent</h1>
		<div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> Agents <i class="fa fa-angle-right"></i> <a href="#" class="current"><?php echo $row['fname'].' '.$row['lname']; ?></a></div>
		<div class="clear"></div>
	</div>
</section>

<section class="module">
	<div class="container">

		<div class="agent agent-single">
			<a href="#" class="agent-img">
				<div class="img-fade"></div>
				<img class="hex" src="images/hexagon.png" alt="" />
				<img src="<?php echo $row['image']; ?>" alt="" />
			</a>
			<div class="agent-content">
				<div class="agent-details">
					<!--Display the agents details using the row array-->
					<h4><a href="#"><?php echo $row['fname'].' '.$row['lname']; ?></a></h4>
					<p><i class="fa fa-tag icon"></i>Title: <span>Selling Agent</span></p>
					<p><i class="fa fa-envelope icon"></i>Email: <span><?php echo $row['email']; ?></span></p>
					<p><i class="fa fa-mobile icon"></i>Mobile: <span><?php echo $row['phone']; ?></span></p>
				</div>
				<div class="center">
					<ul class="social-icons circle">
						<li><a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div><br/>
				<div class="button alt button-icon"><i class="fa fa-home"></i>24 Assigned Properties</div>
			</div>
			<div class="agent-form">
				<h4>Contact Agent</h4>
				<form>
					<div class="form-block">
						<input type="text" name="name" placeholder="Name" />
					</div>
					<div class="form-block">
						<input type="text" name="email" placeholder="Email" />
					</div>
					<div class="form-block">
						<textarea name="message" placeholder="Message..."></textarea>
					</div>
					<div class="form-block">
						<input type="submit" value="Send" />
					</div>
				</form>
			</div>
			<div class="clear"></div>
		</div>

		<div class="row">
			
			<div class="col-lg-9 col-md-9">

				<div class="widget property-single-item agent-description content">
					<h4>
						<span>Biography</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
						<span class="divider-fade"></span>
					</h4>
					<p><?php echo $row['bio']; ?></p>

					<div class="tabs">
						<ul>
							<li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Additional Details</a></li>
							<li><a href="#tabs-2"><i class="fa fa-files-o icon"></i>Attachments</a></li>
						</ul>
						<div id="tabs-1" class="ui-tabs-hide">
							<ul class="additional-details-list">
								<li>Agent Since: <span><?php echo $row['date']; ?></span></li>
								<li>Last Sold Property: <span>1 month ago</span></li>
								<li>Properties Sold: <span>24</span></li>
								<li>Properties Rented: <span>15</span></li>
								<li>Average Price: <span>$250,000</span></li>
								<li>Website: <span><a href="#">www.sparker.com</a></span></li>
							</ul>
						</div>
						<div id="tabs-2" class="ui-tabs-hide">
							<a href="#"><i class="fa fa-file-o icon"></i> Resume</a><br/><br/>
							<a href="#"><i class="fa fa-file-o icon"></i> Brochure</a><br/><br/>
						</div>
					</div>
				</div><!-- end description -->

				<div class="widget property-single-item agent-properties">
					<h4>
						<span>Assigned Properties</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
						<span class="divider-fade"></span>
					</h4>

					<div class="row">
						<?php

						//Select property associated to the client from the property table
						$sql = "SELECT * FROM `tbl_prop` WHERE `agent`='".$id."'";
						$res = mysqli_query($con, $sql);

						//if there are properties run following code
						if (mysqli_num_rows($res) > 0) {

							//While there are properties display them
							while ($row = mysqli_fetch_assoc($res)) {

								echo '
								<div class="col-lg-4 col-md-4">
								<div class="property shadow-hover">
								<a href="#" class="property-img">
								<div class="img-fade"></div>
								<div class="property-tag button alt featured">Featured</div>
								<div class="property-tag button status">For Sale</div>
								<div class="property-price">$150,000</div>
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
							//else if there is no data, display alert
							echo '
							<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>No properties found.</strong>
							</div>';
						}
						?> 

					</div><!-- end row -->
				</div><!-- end agent properties -->
			</div><!-- end col -->			
			<div class="col-lg-3 col-md-3">
				<?php include 'sidebar.php'; ?>				
			</div><!-- end col -->			
		</div><!-- end row -->
	</div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>