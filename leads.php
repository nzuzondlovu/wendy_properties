<?php

include 'functions.php';

/*if(isset($_SESSION['user_id']) == '' ) {
	header("location:login.php");
}*/




?>

<?php 
include 'header.php';
?>

<section class="subheader">
	<div class="container">
		<h1>Leads on Properties</h1>
		<div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Leads on Properties</a></div>
		<div class="clear"></div>
	</div>
</section>

<section class="module favorited-properties">
	<div class="container">

		<div class="row">
			<?php include 'links.php'; ?>;
			<div class="col-lg-9 col-md-9">
				<?php

				$sql = "SELECT * FROM tbl_lead";
				$res = mysqli_query($con, $sql);

				if (mysqli_num_rows($res) > 0) {
					echo '
					<table id="dataTable" class="my-properties-list favorite-properties-list">
					<tr>
					<th>Image</th>
					<th>Property</th>
					<th>Actions</th>
					</tr>';
					while ($row = mysqli_fetch_assoc($res)) {

						echo '
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
						</tr>';
						}echo '
						</table>';
					} else {
						echo '<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>No Leads found.</strong>
						</div>';
					}

					?>
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
	<script>
    $(document).ready(function(){
      $('#dataTable').DataTable();
    });
  </script>