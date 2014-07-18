<?php
if (isset($_POST['url'])) 
{
    switch ($_POST['url']) 
	{
        case 'hyper':
            display();
            break;
        //case 'img':
          //  select();
           // break;
    }
}
function display()
{
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
}
?>