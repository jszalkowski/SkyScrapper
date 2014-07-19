<?php
include('functions/simple_html_dom.php');
//$url=$_GET['url'];passed in url
//$url=$_POST['url'];passed from form
if(empty($_GET['url'])) //if from form and not through url
{
	$url=$_POST['url']; //url= form value
}
else
{
	$url=$_GET['url']; //url= url passed value
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
        <li class="page-scroll"> <a href="index.php?q=true"><span class="label label-default">Go back</span></a> </li>
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
        <?php 
if (@file_get_contents($url))
{
	 $var= "<span class=\"label label-success\">Found '$url'!</span>";
}
else 
{
	$var= "<span class=\"label label-danger\">Can't find '$url'.</span>";
}
?>
        <p>
        <h4 class="pull-left">The root URL you entered is : <span class="label label-info"><?php echo $url ;?></span> <?php echo $var;?> </h4>
        </p>
        
      </div>
      <div class="col-lg-12">
       <br>
      <div class="btn-group">
  <button id="button" type="submit" name="hyper" class="btn btn-default">
  <span class="glyphicon glyphicon-globe"></span> Get Hyperlinks</button>
  
  <button id="button" type="submit" name="image" class="btn btn-default">
  <span class="glyphicon glyphicon-picture"></span> Get Images</button>
  
  <button id="button" type="button" name="custom" class="btn btn-default">
  <span class="glyphicon glyphicon-edit"></span> Get Custom Elements</button>
  
</div><hr>
        <style>
	  .limit{
		width: 500px;
		font-weight: 300;
		white-space: nowrap;
		overflow: hidden!important;
		text-overflow: ellipsis;
		text-align:left;
	  }
	  </style>
        <p>
        <?php
        if (@file_get_contents($url))
	{
		echo "<h4 class=\"pull-left\">The following hyperlinks were found !</h4></p><br />";
		$html = file_get_html($url);
		echo "<br>";
		echo "<table class=\"table table-hover\">";
		echo "<tbody>";
		/*foreach($html->find('a') as $e) 
		echo "<tr style=\"text-align:left\"><td><strong>".$e->plaintext."</strong>
		</td><td><a href=".$e->href."><div class=\"limit\" >".$e->href."</div>
		</a></td><td><form action=\"scrape_home.php\" method=\"POST\">
		<input type=\"textfield\" style=\"display:none;\" value=".$e->href." name=\"url\">
		<button type=\"submit\" class=\"btn btn-warning btn-xs\">
		<span class=\"glyphicon glyphicon-share\"></span> Open in new window</button>
		</form></td></tr>";*/
		foreach($html->find('a') as $e) 
		echo "<tr style=\"text-align:left\"><td><strong>".$e->plaintext."</strong>
		</td><td><a href=".$e->href."><div class=\"limit\" >".$e->href."</div>
		</a></td><td>
		<a type=\"button\" class=\"btn btn-warning btn-xs\" href=\"scrape_home.php?url=".$e->href."\" target=\"_blank\">
		<span class=\"glyphicon glyphicon-share\"></span> Open in new window</a>
		</td></tr>";
		echo "</tbody>";
		echo "</table>";	 
	}
	else
	{
		echo"<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
		<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
		<strong>Oops!</strong> Better check the URL, its not looking too good.
		</div>";
	}
	?>
      </div>
    </div>
  </div>
</section>
<!-- Core JavaScript Files --> 
<script src="js/jquery-1.10.2.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.easing.min.js"></script> 

<!-- Custom Theme JavaScript --> 
<script src="js/scrolling-nav.js"></script>
</body>
</html>
