<?php
date_default_timezone_set('America/New_York');
function getTanggal($interval) {
$h = rand(0,23);

$m = rand(10,59); 

$s = rand(10,59); 

	
	$tanggal = date("d"); $bulan = date("m"); $tahun = date("Y");
	return mktime($interval,0,$s,$bulan,$tanggal,$tahun);
}

$today = date("D, j M Y H:m:s")." +0000";
$servername = 'https://'.$_SERVER['HTTP_HOST'];





function AgcFeed() {
	if (file_exists('oda.txt')) {
$i=1;
$interval = -1; //interval -5 jam ke belakang

		$myfile = fopen("oda.txt", "r") or die("Unable to open file!");
			
		
		
		while( $i < 10) {
			$seek = rand(0, count("oda.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
                $domain = 'http://'.$_SERVER['HTTP_HOST'];
				$kiwot = trim(preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $kiwot), ' ');
				$url = str_replace (' ','-',$kiwot);
				$url = ''.$url.'';
                $judul = preg_replace("/^(\w+\s)/", "", $kiwot);	
		
		print '<item>
		<title>'.ucwords($judul).'</title>
		<description>'.ucwords($judul).'</description>
		<link>'.$domain.'/promo/'.$url.'</link>
		<pubDate>'.date("Y-m-d\TH:m:s+00:00", getTanggal($interval*$i)).'</pubDate>
		</item>';
		
		
	
			}
			$i++;
		}
		
		fclose($myfile);
}


}
header("Content-Type: application/rss+xml; charset=ISO-8859-1");
print '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"	>

<channel>
	<title>'.$_SERVER['HTTP_HOST'].'</title>
	<atom:link href="'.$servername.'/feed" rel="self" type="application/rss+xml" />
	<link>'.$servername.'</link>
	<description>Trouvez des livres électroniques gratuits au format livres et applications NOOK, vous pouvez télécharger gratuitement les ebooks en formats PDF, ePub et Kindle.</description>
	<lastBuildDate>'.$today.'</lastBuildDate>
	<language>en-US</language>
	<sy:updatePeriod>hourly</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<generator>https://wordpress.org/?v=4.7.3</generator>';
	
	
echo AgcFeed();

print'</channel>
</rss>';

?>
