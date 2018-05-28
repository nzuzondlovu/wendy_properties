<?php
include 'functions.php';

include 'header.php';
?>

<section class="subheader">
  <div class="container">
    <h1>404 Error</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">404 Error</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module page-not-found">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h2>404</h2>
        <h3>Page not found.</h3>
        <p>The page you are looking for was removed or does not exist. Try using the search form below.</p>
        <form class="search-form" action="list.php" method="post">
          <input name="phrase" type="text" placeholder="Search..." />
          <button name="submit_header" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <a href="index.php" class="button button-icon"><i class="fa fa-angle-right"></i>Back to Home</a>
      </div>
    </div><!-- end row -->

  </div>
</section>

<?php
include 'footer.php';
?>