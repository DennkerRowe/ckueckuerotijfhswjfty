<?php
header("Content-Type: image/jpg");
$file = $_GET['file'];
$url =  "https://ts2.mm.bing.net/th?q='.$file.'.html";
readfile($url);
?>
