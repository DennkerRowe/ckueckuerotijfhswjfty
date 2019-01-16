<?php
include('config.php');
include ('fungsi.php');
	header('HTTP/1.1 200 OK');
	$url = $_SERVER['REQUEST_URI'];
	$urlnya = $_SERVER['REQUEST_URI'];
    $domains = $_SERVER['HTTP_HOST'];
	$url = str_replace('aan/', '', $url);
	$asin = ambil_asin($url);
	$asin = strtoupper($asin);
$permalinkx	=	$_SERVER['REQUEST_URI'];
$permalinky	=	explode('?',$permalink);
$permalinky	=	$permalinky[0];
$permalink	=       explode('/',$permalinkx);
$permalinkz     =	$permalink[2];
$permalink	=	$permalink[2];
$permalink	=	explode('?',$permalink);
$permalink	=	$permalink[0];
$titlenya    	= 	str_replace(array('/','-','+','-'),' ',$permalink);
$titlenya = preg_replace("/^(\w+\s)/", "", $titlenya);
$titlenya      =       ucwords(str_replace('-', ' ', $titlenya));
$judul		=	$titlenya;
$ads = 'https://www.agoda.com/partners/partnersearch.aspx?hid='.$asin.'&cid='.$agodaCID.'';
header( "refresh:1;url=$ads" );
?>
<!DOCTYPE html>
<head>
    <title><?php echo $judul; ?></title>
    </head>
    <body>
        <center><img src="/loading.gif"></center>
    </body>
    <?php include('histats.php');?>
</html>
