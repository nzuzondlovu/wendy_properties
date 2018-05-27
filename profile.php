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
						<li class="active"><a href="user-profile.html"><i class="fa fa-user icon"></i>Profile</a></li>
						<li><a href="user-my-properties.html"><i class="fa fa-home icon"></i>My Properties</a></li>
						<li><a href="user-favorite-properties.html"><i class="fa fa-heart icon"></i>Favorited Properties</a></li>
						<li><a href="user-submit-property.html"><i class="fa fa-plus icon"></i>Submit Property</a></li>
						<li><a href="#"><i class="fa fa-reply icon"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9">

			<form>
				<div class="row">
					<div class="col-lg-3">
						<div class="edit-avatar">
							<img class="profile-avatar" src="images/agent-img3.jpg" alt="" />
							<a href="#" class="button small">Change Avatar</a>
						</div>
					</div>
					<div class="col-lg-9">
						
						<div class="form-block">
							<label>Full Name</label>
							<input class="border" type="text" name="name" value="John Doe" />
						</div>
						<div class="form-block">
							<label>Email</label>
							<input class="border" type="text" name="email" value="jdoe@gmail.com" />
						</div>
						<div class="form-block">
							<label>Phone</label>
							<input class="border" type="text" name="phone" value="443-123-2322" />
						</div>
					</div>
				</div><!-- end row -->
							
				<div class="form-block">
					<label>Bio</label>
					<textarea class="border" name="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.Phasellus mollis imperdiet placerat</textarea>
				</div>	
				
				<div class="row">
					<div class="col-lg-6">
						<h4>Social Profiles</h4>
						<div class="divider"></div>
						<div class="form-block">
							<label>Facebook</label>
							<input class="border" type="text" name="fb" value="facebook.com/johndoe" />
						</div>
						
						<div class="form-block">
							<label>Twitter</label>
							<input class="border" type="text" name="twitter" value="twitter.com/johndoe" />
						</div>
						
						<div class="form-block">
							<label>Linkedin</label>
							<input class="border" type="text" name="linkedin" value="linkedin.com/johndoe" />
						</div>
					</div>
					<div class="col-lg-6">
						<h4>Change Password</h4>
						<div class="divider"></div>
						<div class="form-block">
							<label>Current Password</label>
							<input class="border" type="text" name="current_pass" />
						</div>
						
						<div class="form-block">
							<label>New Password</label>
							<input class="border" type="text" name="new_pass" />
						</div>
						
						<div class="form-block">
							<label>Confirm New Password</label>
							<input class="border" type="text" name="new_pass_confirm" />
						</div>
					</div>
				</div><!-- end row -->
				
				<div class="form-block">
					<button type="submit" class="button button-icon"><i class="fa fa-check"></i>Save Changes</button>
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