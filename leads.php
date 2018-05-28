<?php
//include functions script
include 'functions.php';

//if not logged in redirect to login page
if(isset($_SESSION['user_id']) == '' ) {
	$_SESSION['failure'] = 'Please login to view page.';
	header("location:login.php");
}


//if del variable set, delete item
if(isset($_GET['del']) && $_GET['del'] != '') {
	$del = mysqli_real_escape_string($con, strip_tags(trim($_GET['del'])));
	$sql = "DELETE FROM tbl_lead WHERE id='".$del."'";
	mysqli_query($con, $sql);
	$_SESSION['success'] = 'Lead deleted Successfully.';
}

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
			<?php include 'links.php'; ?>
			<div class="col-lg-9 col-md-9">
				<?php

				//select all from the leads table
				$sql = "SELECT * FROM tbl_lead";
				$res = mysqli_query($con, $sql);

				if (mysqli_num_rows($res) > 0) {

					//if data exists display the table header
					echo '
					<table id="dataTable" class="my-properties-list favorite-properties-list">
					<tr>
					<th>Image</th>
					<th>Property</th>
					<th>User</th>
					<th>Message</th>
					<th>Actions</th>
					</tr>';
					while ($row = mysqli_fetch_assoc($res)) {

						//while there is data run the while loop

						//use the property id to display the property from the property table
						$sql1 = "SELECT * FROM tbl_prop WHERE id=".$row['prop_id']."";
						$res1 = mysqli_query($con, $sql1);
						$row1 = mysqli_fetch_assoc($res1);


						echo '
						<tr>
						<td class="property-img"><a href="property.php?id='.$row1['id'].'"><img src="'.$row1['image'].'" alt="" /></a></td>
						<td class="">
						<a href="property.php?id='.$row1['id'].'">'.$row1['title'].'</a><br/>
						<p class="property-address"><i class="fa fa-map-marker icon"></i>'.$row1['address'].'</p>
						<p><strong>R'.$row1['price'].'</strong></p>
						</td>
						<td class="">
						Name : '.$row['fname'].'<br/>
						Surname: '.$row['lname'].'
						</td>
						<td class="">
						<p>'.$row['message'].'</p>
						</td>
						<td class="">
						<a href="property.php?id='.$row1['id'].'"><i class="fa fa-eye icon"></i>View</a>
						<a href="?del='.$row1['id'].'"><i class="fa fa-close icon"></i>Delete</a>
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
		</div>
	</div><!-- end container -->
</section>

<?php 
include 'footer.php';
?>
<!--include datatables plugin-->
<script>
	$(document).ready(function(){
		$('#dataTable').DataTable();
	});
</script>