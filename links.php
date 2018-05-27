<div class="col-lg-3 col-md-3 sidebar-left">
	<div class="widget member-card">
		<div class="member-card-header">
			<a href="#" class="member-card-avatar"><img src="images/agent-img3.jpg" alt="" /></a>
			<h3><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></h3>
			<p><i class="fa fa-envelope icon"></i><?php echo $_SESSION['email']; ?></p>
		</div>
		<div class="member-card-content">
			<img class="hex" src="images/hexagon.png" alt="" />
			<ul>
				<li><a href="profile.php"><i class="fa fa-user icon"></i>Profile</a></li>
				<li class="active"><a href="dashboard.php"><i class="fa fa-home icon"></i>My Properties</a></li>
				<li><a href="leads.php"><i class="fa fa-heart icon"></i>Favorited Properties</a></li>
				<li><a href="addproperty.php"><i class="fa fa-plus icon"></i>Submit Property</a></li>
				<li><a href="addagent.php"><i class="fa fa-group icon"></i>Submit Agent</a></li>
				<li><a href="logout.php"><i class="fa fa-reply icon"></i>Logout</a></li>
			</ul>
		</div>
	</div>
</div>