<?php

include 'functions.php';

if(isset($_SESSION['user_id']) == '' ) {
	$_SESSION['failure'] = 'Please login to view page.';
	header("location:login.php");
}

if (isset($_POST['submit'])) {

	$fname = mysqli_real_escape_string($con, strip_tags(trim($_POST["fname"])));
	$lname = mysqli_real_escape_string($con, strip_tags(trim($_POST["lname"])));
	$email = mysqli_real_escape_string($con, strip_tags(trim($_POST["email"])));
	$pass1 = md5(mysqli_real_escape_string($con, strip_tags(trim($_POST["pass1"]))));
	$pass2 = md5(mysqli_real_escape_string($con, strip_tags(trim($_POST["pass2"]))));
	$pass3 = md5(mysqli_real_escape_string($con, strip_tags(trim($_POST["pass3"]))));
	$phone = mysqli_real_escape_string($con, strip_tags(trim($_POST["phone"])));
	$bio = mysqli_real_escape_string($con, strip_tags(trim($_POST["bio"])));
	$facebook = mysqli_real_escape_string($con, strip_tags(trim($_POST["facebook"])));
	$twitter = mysqli_real_escape_string($con, strip_tags(trim($_POST["twitter"])));
	$linkedin = mysqli_real_escape_string($con, strip_tags(trim($_POST["linkedin"])));

	if ($fname != '' && $lname != '' && $email != '' && $phone != '' && $bio != '' && $facebook != '' && $twitter != '' && $linkedin != '' && $pass1 != '' && $pass2 != '' && $pass3 != '') {

		$sql = "SELECT * FROM tbl_user WHERE email='".$email."' AND password='".$pass1."'";
		$res = mysqli_query($con, $sql);

		if (mysqli_num_rows($res) > 0) {

			if ($pass2 == $pass3) {

				$sql = "UPDATE `tbl_user` SET `fname`='".$fname."', `lname`='".$lname."', `email`='".$email."', `phone`='".$phone."', `bio`='".$bio."', `facebook`='".$facebook."', `twitter`='".$twitter."', `linkedin`='".$linkedin."', `password`='".$pass2."' WHERE id = '".$_SESSION['user_id']."'";
				mysqli_query($con, $sql);
				$_SESSION['success'] = 'Your details have been successfully updated, please log in.';
				header("location:logout.php");

			} else {
				$_SESSION['failure'] = 'Please make sure the passwords match.';
			}
		} else {
			$_SESSION['failure'] = 'Please enter a correct password.';
		}    
	} else {
		$_SESSION['failure'] = 'Please fill in all fields.';
	}
}


?>

<?php 
include 'header.php';
?>


<section class="subheader">
	<div class="container">
		<h1>Profile</h1>
		<div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Profile</a></div>
		<div class="clear"></div>
	</div>
</section>

<section class="module favorited-properties">
	<div class="container">

		<div class="row">
			<?php include 'links.php'; ?>
			<div class="col-lg-9 col-md-9">
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
				<form method="POST">
					<div class="row">
						<div class="col-lg-3">
							<div class="edit-avatar">
								<img class="profile-avatar" src="images/agent-img3.jpg" alt="" />
								<a href="#" class="button small">Change Avatar</a>
							</div>
						</div>
						<div class="col-lg-9">

							<div class="form-block">
								<label>First Name</label>
								<input class="border" type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>" />
							</div>
							<div class="form-block">
								<label>Last Name</label>
								<input class="border" type="text" name="lname" value="<?php echo $_SESSION['fname']; ?>" />
							</div>
							<div class="form-block">
								<label>Email</label>
								<input class="border" type="text" name="email" value="<?php echo $_SESSION['email']; ?>" />
							</div>
							<div class="form-block">
								<label>Phone</label>
								<input class="border" type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" />
							</div>
						</div>
					</div><!-- end row -->

					<div class="form-block">
						<label>Bio</label>
						<textarea class="border" name="bio"><?php echo $_SESSION['bio']; ?></textarea>
					</div>	

					<div class="row">
						<div class="col-lg-6">
							<h4>Social Profiles</h4>
							<div class="divider"></div>
							<div class="form-block">
								<label>Facebook</label>
								<input class="border" type="text" name="facebook" value="<?php echo $_SESSION['facebook']; ?>" />
							</div>

							<div class="form-block">
								<label>Twitter</label>
								<input class="border" type="text" name="twitter" value="<?php echo $_SESSION['twitter']; ?>" />
							</div>

							<div class="form-block">
								<label>Linkedin</label>
								<input class="border" type="text" name="linkedin" value="<?php echo $_SESSION['linkedin']; ?>" />
							</div>
						</div>
						<div class="col-lg-6">
							<h4>Change Password</h4>
							<div class="divider"></div>
							<div class="form-block">
								<label>Current Password</label>
								<input class="border" type="text" name="pass1" />
							</div>

							<div class="form-block">
								<label>New Password</label>
								<input class="border" type="text" name="pass2" />
							</div>

							<div class="form-block">
								<label>Confirm New Password</label>
								<input class="border" type="text" name="pass3" />
							</div>
						</div>
					</div><!-- end row -->

					<div class="form-block">
						<button type="submit" name="submit" class="button button-icon"><i class="fa fa-check"></i>Save Changes</button>
					</div>

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