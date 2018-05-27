<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $sitename; ?> | A real estate theme</title>

  <!-- CSS file links -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href="assets/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
  <link href="assets/slick-1.6.0/slick.css" rel="stylesheet">
  <link href="assets/chosen-1.6.2/chosen.min.css" rel="stylesheet">
  <link href="css/nouislider.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header class="header-default">

      <div class="top-bar">
        <div class="container">
          <div class="top-bar-left left">
            <ul class="top-bar-item right social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <div class="clear"></div>
          </div>
          <div class="top-bar-right right">
            <?php
            //Check if user logged in, display logout
            if (isset($_SESSION['user_id'])) {
              echo '
              <a href="logout.php" class="top-bar-item"><i class="fa fa-sign-out icon"></i>Log Out</a>';
            } else {
              //Display login or register link
              echo '
              <a href="login.php" class="top-bar-item"><i class="fa fa-sign-in icon"></i>Login</a>
              <a href="register.php" class="top-bar-item"><i class="fa fa-user-plus icon"></i>Register</a>';
            }
            ?>          
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>

      <div class="container">

        <!-- navbar header -->
        <div class="navbar-header">

          <div class="header-details">
            <div class="header-item header-search left">
              <table>
                <tr>
                  <td><i class="fa fa-search"></i></td>
                  <td class="header-item-text">
                    <form method="post" action="list.php" class="search-form">
                      <input name="phrase" type="text" placeholder="Search..." />
                      <button name="submit_header" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </td>
                </tr>
              </table>
            </div>
            <div class="header-item header-phone left">
              <table>
                <tr>
                  <td><i class="fa fa-phone"></i></td>
                  <td class="header-item-text">
                    Call us anytime<br/>
                    <span>(+27) 123 456 5665</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="header-item header-phone left">
              <table>
                <tr>
                  <td><i class="fa fa-envelope"></i></td>
                  <td class="header-item-text">
                    Drop us a line<br/>
                    <span>hello@<?php echo $siteaddress; ?></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="clear"></div>
          </div>

          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Wendy" /></a>

          <!-- nav toggle -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>

        <!-- main menu -->
        <div class="navbar-collapse collapse">
          <div class="main-menu-wrap">
            <div class="container-fixed">
              <?php
              //Check if user logged in, display logout
              if (isset($_SESSION['user_id'])) {
              //Display add property link
                echo '
                <div class="member-actions right">
                <a href="addproperty.php" class="button small alt button-icon"><i class="fa fa-plus"></i>Submit Property</a>
                </div>';
              } 
              ?>
              <ul class="nav navbar-nav right">
                <li><a href="index.php">Home</a></li>
                <li><a href="list.php">Properties</a></li>
                <li><a href="agents.php">Agents</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <div class="clear"></div>

            </div>

          </div><!-- end main menu wrap -->
        </div><!-- end navbar collaspe -->

      </div><!-- end container -->
    </header>