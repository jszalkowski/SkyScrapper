<?php
$url=$_POST['link'];
$html = file_get_html($url);
foreach($html->find('a') as $e)
?>