<?php
//require_once("fungsi.php");
//require_once("config.php");
error_reporting(0);
ini_set("display_errors", 0);
date_default_timezone_set('America/New_York');
$servername = 'http://'.$_SERVER['HTTP_HOST'];
$direktori = 'sitemap-folder';

$handle = opendir($direktori);

while (false !== ($entry = readdir($handle))) {
	if ($entry != "." && $entry != "..") {		
		$data .= $entry."\n";		
		
	}	
}
closedir($handle);

$data = trim($data);
if ($data != "") {	
$data = explode ("\n", $data);

sort($data, SORT_NATURAL | SORT_FLAG_CASE);
//echo $data[0];
}


header('Content-Type: text/xml');

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
   echo "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
   
   foreach ($data as $judul) {
   echo "<sitemap>\n";
      echo "<loc>".$servername."/sitemap/".str_replace(".txt", "", $judul).".xml</loc>\n";      
   echo "</sitemap>\n";
   }
   echo "</sitemapindex>";


?>