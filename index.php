<?php
if(empty($_GET['q']))
{
}
else
{
	$var = $_GET['q'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>SkyScrapper</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="css/scrolling-nav.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon" href="img/fav.ico" />
<!-- Growl -->
<link href="growl/jquery.growl.css" rel="stylesheet" type="text/css" />
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#page-top">SkyScrapper <span class="label label-success">New v2.1</span></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li class="page-scroll"> <a href="#about">About</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>
<section id="intro" class="intro-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>SkyScrapper</h1>
        <p><strong>SkyScrapper</strong> is a scrapping and data extraction tool designed to extract data from HTML Applications. This is a semi-automatic data extraction and mining tool for extracting user specific data from various web applications. User specific data can be hyperlinks, images, scripts, documents, raw text or DOM Elements. Regular expression based crawling and scrapping is also supported. Enter your URL below to start fetching data.</p>
      </div>
      <div class="page-scroll">
        <form action="scrape_home.php" method="POST">
          <div class="input-group input-group-lg col-lg-6 col-lg-offset-3"> 
          <span class="input-group-addon "><span class="glyphicon glyphicon-globe"></span></span>
            <input name="url" type="text" required class="form-control" id="url" placeholder="http://www.something.com" pattern="((mailto\:|(news|(ht|f)tp(s?))\://){1}\S+)">
            
            <span class="input-group-btn">
            <input type="submit" name="scrape" class="btn btn-warning" value="Scrape!">
            </span> 
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Core JavaScript Files --> 
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.easing.min.js"></script> 
<!-- Growl -->
<script src="growl/jquery.growl.js" type="text/javascript"></script>
<!-- Custom Theme JavaScript --> 
<script src="js/scrolling-nav.js"></script>
<?php
if(empty($_GET['q']))
{
echo "<script type=\"text/javascript\">
$( document ).ready(function() {
  $.growl.notice({ title: \"Hello\", message: \"Welcome to SkyScrapper!. Happy Scrapping....:)\" });
  });
</script>";
}
?>
</body>
</html>
