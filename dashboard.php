<?php
//include fuctions script
include 'functions.php';

//check if user logged in, chcek if session user id is set
if(isset($_SESSION['user_id']) == '' ) {
	$_SESSION['failure'] = 'Please login to view page.';
	header("location:login.php");
}

//check if the delete variable is set, delete if set
if(isset($_GET['del']) && $_GET['del'] != '') {
	$del = mysqli_real_escape_string($con, strip_tags(trim($_GET['del'])));
	$sql = "DELETE FROM tbl_prop WHERE id='".$del."'";
	mysqli_query($con, $sql);
	$_SESSION['success'] = 'Property deleted Successfully.';
}


?>

<?php 
include 'header.php';
?>

<section class="subheader">
	<div class="container">
		<h1>Properties</h1>
		<div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Properties</a></div>
		<div class="clear"></div>
	</div>
</section>

<section class="module my-properties">
	<div class="container">

		<div class="row">
			<?php include 'links.php'; ?>
			<div class="col-lg-9 col-md-9">
				<!-- Display all errors and successes-->
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
				<?php

				//sql statement to select all properties
				$sql = "SELECT * FROM tbl_prop";
				$res = mysqli_query($con, $sql);

				if (mysqli_num_rows($res) > 0) {

					//if the above is true display the following table
					echo '
					<table class="my-properties-list" id="dataTable">
					<tr>
					<th>Image</th>
					<th>Property</th>
					<th>Post Status</th>
					<th>Date Created</th>
					<th>Actions</th>
					</tr>';
					while ($row = mysqli_fetch_assoc($res)) {

						//per row display the following information while data exist
						echo '
						<tr>
						<td class="property-img"><a href="property.php/?id='.$row['id'].'"><img src="'.$row['image'].'" alt="" /></a></td>
						<td class="property-title">
						<a href="property.php/?id='.$row['id'].'">'.$row['title'].'</a><br/>
						<p class="property-address"><i class="fa fa-map-marker icon"></i>'.$row['address'].'</p>
						<p><strong>R'.$row['price'].'</strong></p></td>
						<td class="property-post-status"><span class="button small alt">'.$row['status'].'</span></td>
						<td>'.$row['date'].'</td>
						<td class="property-actions">
						<a href="property.php/?id='.$row['id'].'"><i class="fa fa-eye icon"></i>View</a>
						<a href="#"><i class="fa fa-pencil icon"></i>Edit</a>
						<a href="?del='.$row['id'].'"><i class="fa fa-close icon"></i>Delete</a>
						</td>
						</tr>';
						}echo '
						</table>';
					} else {

						//if there is no data display error information
						echo '<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>No Properties found.</strong>
						</div>';
					}

					?>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>

	<?php 
	include 'footer.php';
	?>
	<!--connect table to datatables plugin-->
	<script>
		$(document).ready(function(){
			$('#dataTable').DataTable();
		});
	</script>