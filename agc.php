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
$txt = text_lang();
$cano = $domain.'/'.$single.'/'.$asin.'-'.sanitize_title2($judul).'';

?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Get Hotels Deal | Promo [<?php echo spinText("{45%|55%|65%|40%|62%|58%|72%|50%|60%|70%|78%|75%|80%|85%|90%}");?> Off] <?php echo $judul; ?> <?php echo spinText("{#|@|€|®|?|?|?|?|?}");?> Paradise Hotel Near Me <?php echo spinText("{#|@|€|®|?|?|?|?|?}");?> <?php echo strtoupper( $domains ); ?></title>
       
        <meta property="og:title" content="Hotels Deal | Promo [<?php echo spinText("{45%|55%|65%|40%|62%|58%|72%|50%|60%|70%|78%|75%|80%|85%|90%}");?> Off] <?php echo $judul; ?> <?php echo spinText("{#|@|€|®|?|?|?|?|?}");?> Paradise Hotel Near Me <?php echo spinText("{#|@|€|®|?|?|?|?|?}");?> <?php echo strtoupper( $domains ); ?>">
        <link rel="canonical" href="<?php echo $cano; ?>" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <link rel="shortcut icon" type="image/x-icon" href="/ebook.ico">
        <style>.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5{position:relative;min-height:1px;padding-right:10px;padding-left:10px}.col-xs-5{width:20%;float:left}@media (min-width: 768px){.col-sm-5{width:20%;float:left}}@media (min-width: 992px){.col-md-5{width:20%;float:left}}@media (min-width: 1200px){.col-lg-5{width:20%;float:left}}.thumbnail{text-align:center;padding:10px}.thumbnail img{max-width: 100%;height:auto}.header{border-bottom:1px solid #ddd;margin-bottom:15px;padding-bottom:15px}.download{overflow:hidden;text-align:center}.download h3{display:inline-block;padding:0 15px;position:relative}.download h3:after,.download h3:before{background:#ddd;content:"";display:block;height:1px;position:absolute;top:50%;width:400%}.download h3:before{right:100%}.download h3:after{left:100%}.btn-group{margin-bottom: 15px}.footer{background:#f8f8f8;border-top:1px solid #e7e7e7;margin-top:15px;padding:15px;}</style>
    </head>
    <body>
        <?php include('header.php'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel-heading" style="padding: 5px;">
                        <ol class="breadcrumb">
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/"><span itemprop="title">Home page</span></a></li>
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/<?php echo $single."/".$asin."-".sanitize_title2($judul).""; ?>"><span itemprop="title"><?php echo $judul; ?></span></a></li>
                        </ol>
                    </div>
                    <div class="content">
                        <div class="header">
                            <h1><?php echo $judul; ?></h1>
                            <span style=color:#666;font-size:small><div itemscope itemtype=http://data-vocabulary.org/Review-aggregate><span itemprop=itemreviewed><?php echo $domains; ?></span> <img itemprop=photo src=""> <span itemprop=rating itemscope itemtype=http://data-vocabulary.org/Rating><span itemprop=average>10</span> out of <span itemprop=best>10</span></span> based on <span itemprop=votes><?php echo number_format(rand( 100, 1000)); ?></span> ratings. <span itemprop=count><?php echo number_format(rand( 1000, 5000)); ?></span> user reviews.</div></span>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="thumbnail"><img src="/hotels.png"width="235" height="304"/><div class="caption"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $judul; ?> </div></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p><strong><?php echo $judul; ?></strong></p>
                                
                
                                <ul>
                                    <li><?php echo $judul; ?> Promo</li>
                                    <li><?php echo $judul; ?> Discount</li>
                                    <li><?php echo $judul; ?> Booking</li>
									<li><?php echo $judul; ?> Promo 2019</li>
									<li><?php echo $judul; ?> Cheap Price</li>
									<li><?php echo $judul; ?> Booking Sites</li>
									<li><?php echo $judul; ?> Booking Sites Online</li>
									<li><?php echo $judul; ?> Tonight Deals</li>
									<li><?php echo $judul; ?> Tonight Discount</li>
									<li><?php echo $judul; ?> Tonight Promo</li>
                                </ul>
                                	
                                	
                                                       <h3>Map and Address <?php echo $judul; ?></h3>         	
 <?php
function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}
?>
<?php
echo '';
  $firstx = ($nav - 1) * 10;
  $firstx = $firstx + 1; 
  $urlrss    = 'http://www.bing.com/search?q=address+'.urlencode(limit_words($judul,5)).'&count=10&first='.$firstx.'&format=rss';
  $feedbing  = simplexml_load_string(Copasan($urlrss));
   foreach ($feedbing->channel->item as $itembing):
       $titled	= $itembing->title;
       $tit	= $itembing->title;
$titled		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','WikipÃ©dia','YouTube','Amazon'),' ',$titled);
       $url = sanitize_title($titled);
       $desced	= $itembing->description;
$desced		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','WikipÃ©dia','YouTube','Amazon'),' ',$desced);
       $pubded	= $itembing->pubDate; 
  echo  ''.$titled.' '.$desced.'<br>';
endforeach;
	?>
	
<h3>Get Booking Promo <?php echo spinText("{45%|55%|65%|40%|62%|58%|72%|50%|60%|70%|78%|75%|80%|85%|90%}");?> Off <?php echo $judul; ?></h3><br>
<?php
echo '';
  $firstx = ($nav - 1) * 10;
  $firstx = $firstx + 1; 
  $urlrss    = 'http://www.bing.com/search?q=Booking+'.urlencode(limit_words($judul,5)).'&count=10&first='.$firstx.'&format=rss';
  $feedbing  = simplexml_load_string(Copasan($urlrss));
   foreach ($feedbing->channel->item as $itembing):
       $titled	= $itembing->title;
       $tit	= $itembing->title;
$titled		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','WikipÃ©dia','YouTube','Amazon'),' ',$titled);
       $url = sanitize_title($titled);
       $desced	= $itembing->description;
$desced		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','WikipÃ©dia','YouTube','Amazon'),' ',$desced);
       $pubded	= $itembing->pubDate; 
  echo  ''.$titled.' '.$desced.'<br>';
endforeach;
	?>
<h3>Related Hotels <?php echo $judul; ?></h3><br>
 <?php agclist();?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Recent Download</li>
                        
                        
                            <?php agclist();?>
							<?php agclist();?>
							<?php agclist();?>
                        

                    </ul>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>