<div class="widget widget-sidebar recent-properties">
  <h4><span>Quick Links</span> <img src="images/divider-half.png" alt="" /></h4>
  <div class="widget-content box">
    <ul class="bullet-list">
      <li><a href="list.php">Featured Properties</a></li>
      <li><a href="agents.php">Featured Agents</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="addproperty.php">Submit a Property</a></li>
    </ul>
  </div><!-- end widget content -->
</div><!-- end widget -->

<div class="widget widget-sidebar recent-properties">
  <h4><span>Recent Properties</span> <img src="images/divider-half.png" alt="" /></h4>
  <div class="widget-content">
    <?php
    $sql = "SELECT * FROM tbl_prop LIMIT 3";
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_assoc($res)) {

        echo '
        <div class="recent-property">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4"><a href="property.php?id='.$row['id'].'"><img src="'.$row['image'].'" alt="" /></a></div>
        <div class="col-lg-8 col-md-8 col-sm-8">
        <h5><a href="property.php?id='.$row['id'].'">'.$row['title'].'</a></h5>
        <p><strong>R'.$row['price'].'</strong></p>
        </div>
        </div>
        </div>';
      }
    } else {
      echo '
      <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>No features found.</strong>
      </div>';
    }
    ?> 
  </div><!-- end widget content -->
</div><!-- end widget -->