<?php
error_reporting(0);
ini_set("display_errors", 0);
$domen 			= $_SERVER['HTTP_HOST'];
function cutjudul($judul, $wordsreturned)
{
  $retval = $judul;
  $judul = preg_replace('/(?<=\S,)(?=\S)/', ' ', $judul);
  $judul = str_replace("\n", " ", $judul);
  $array = explode(" ", $judul);
  if (count($array)<=$wordsreturned)
  {
    $retval = $judul;
  }
  else
  {
    array_splice($array, $wordsreturned);
    $retval = implode(" ", $array)." ...";
  }
  return $retval;
}
function sanitize_title($text) {
	$text = preg_replace('~[^\pL\d]+~u', '-', $text);
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	$text = preg_replace('~[^-\w]+~', '', $text);
	$text = trim($text, '-');
	$text = preg_replace('~-+~', '-', $text);
	$text = strtolower($text);
	if (empty($text)) {
	return 'n-a';
	}
	return $text;
}
function homefungsi() {
	if (file_exists('oda.txt')) {
		$myfile = fopen("oda.txt", "r") or die("Unable to open file!");
		while( $i < 15) {
			$seek = rand(0, filesize("oda.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$kiwot = trim(preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $kiwot), ' ');
				$url = str_replace (' ','-',$kiwot);
				$url = '/promo/'.$url.'';
                                $judul = preg_replace("/^(\w+\s)/", "", $kiwot);
				$images = preg_replace('/[0-9]+/', '', $judul);
				$post	= rand(0,15);
                                $judulnya = cutjudul($judul, 4);
                   echo '
			  
			
			  
<article class="pexcerpt'.$post.' post excerpt ">
																		<a href="'.$url.'" title="'.ucwords($judulnya).'" alt="'.ucwords($judulnya).'"rel="nofollow" id="featured-thumbnail">
								<div class="featured-thumbnail">
					<img src="/'.sanitize_title($images).'.jpg"onerror="this.src=\'/hotels.png\'" alt="'.ucwords($judulnya).'" title="'.ucwords($judulnya).'"/>
					</div>
								<div class="featured-cat"><span class="thetime">'.rand(500,5000).'  views</span></div></a>
																<header>						
						<h2 class="title">
							<a href="'.$url.'" title="'.ucwords($judulnya).'" rel="bookmark">'.ucwords($judulnya).'</a>
						</h2>												
					</header><!--.header-->				
				</article>
			  ';
				}
			$i++;
		}

		fclose($myfile);
	}
}
function sidebar() {
	if (file_exists('oda.txt')) {
		$myfile = fopen("oda.txt", "r") or die("Unable to open file!");
		while( $i < 9) {
			$seek = rand(0, filesize("oda.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				$kiwot = trim(preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $kiwot), ' ');
				$url = str_replace (' ','-',$kiwot);
				$url = '/promo/'.$url.'';
                                $judul = preg_replace("/^(\w+\s)/", "", $kiwot);
				$images = preg_replace('/[0-9]+/', '', $judul);
				$post	= rand(0,18);
                   echo '<li><a href="'.$url.'">	   
	   <img src="/'.sanitize_title($images).'.jpg"onerror="this.src=\'/hotels.png\'" alt="'.ucwords($judul).'" alt="'.ucwords($judul).'" title="'.ucwords($judul).'" class="wp-post-image" />
   
					  
        '.ucwords($judul).'</a>
		<div class="sidebartextviews">&#9734; '.rand(1000,5000).'  views</div></a>
		</li>

			  ';
				}
			$i++;
		}

		fclose($myfile);
	}
}

;?>
<!DOCTYPE html>
<html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<meta charset="UTF-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
<title>Cheap Hotels Booking Deals</title>
		<link rel="icon" href="/hotels.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
	

	<meta name="description" content="White Wallpaper Wordpress Themes" />
	<meta property="og:type" content="blog" />
	<meta property="og:title" content="NicheWall Themes" />
	<meta property="og:description" content="Cheap Hotels Booking Deals Get Big Promo Discount Hotels Deals" />
	<meta property="og:url" content="/" />
	<meta property="og:site_name" content="Cheap Hotels Booking Deals" />
	<meta name="twitter:card" content="summary" />
<!-- /SEO Ultimate -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="NicheWall Themes &raquo; Feed" href="/feed/" />
<link rel='stylesheet' id='stylesheet-css'  href='/home/style.css?ver=4.7.12' type='text/css' media='all' />
<style id='stylesheet-inline-css' type='text/css'>

		
		input#author:focus, input#email:focus, input#url:focus, #commentform textarea:focus, .widget .wpt_widget_content #tags-tab-content ul li a { border-color:#7b011b;}
		.widget h3, .frontTitle, .footer-navigation ul, .article, .description_images_bottom, .footer-navigation a, .sidebarpostviews,.dashed,.dashedpost,.dashedattach, .dashedsocial, .total-comments, #respond h4 { border-color:#7b011b;}
		#logo a, a:hover, .menu .current-menu-item > a, .menu .current-menu-item, .current-menu-ancestor > a.sf-with-ul, .current-menu-ancestor, footer .textwidget a, .single_post a, #commentform a, .copyrights a:hover, a, footer .widget li a:hover, .menu > li:hover > a, .single_post .post-info a, .post-info a, .readMore a, .reply a, .fn a, .carousel a:hover, .single_post .related-posts a:hover, .textwidget a, footer .textwidget a, .sidebar.walleft1 a:hover, .sidebar.walleft2 a:hover, .smallbutton a:hover, .related-posts2 li a:hover, .featured-cat,.featured-cat-result,.infoviews { color:#7b011b; }	
		.nav-previous a, .nav-next a, .header-button, .sub-menu, #commentform input#submit, .tagcloud a:hover, #tabber ul.tabs li a.selected, .wall-subscribe input[type='submit'],.pagination a, .widget .wpt_widget_content #tags-tab-content ul li a, .latestPost-review-wrapper, .sidebarmenunavigation a { background-color:#7b011b; color: #fff; }
		
			
</style>
<link rel='stylesheet' id='GoogleFonts-css'  href='//fonts.googleapis.com/css?family=Droid+Sans%3A400%2C700&#038;ver=4.7.12' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='/home/responsive.css?ver=4.7.12' type='text/css' media='all' />
<link rel='stylesheet' id='white-css'  href='/home/white.css?ver=4.7.12' type='text/css' media='all' />
<meta name="generator" content="WordPress 4.7.12" />
	<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>
</head>
<body id ="blog" class="home blog main">
<div class="main-container">
<div id="page" class="home-page">
<div class="content">
		<div class="article">
		    						<header class="main-header">
			<div id="header">					
					
														<h1 id="logo" class="logo-image">
									<a href="/"><img src="/home/hotelslogo.png" alt="Cheap Hotels Deals"></a>
								</h1><!-- END #logo -->
														</div>
		</header>
	
				
																		<div class="homead">
										
									</div><div class="dashedpost"></div>
	<center>
<div id="adgshp-1433416931"></div>
<script type="text/javascript" src="//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"></script><script type="text/javascript">
var stg = new Object(); stg.crt="63781515483715";stg.version="1.04"; stg.id=stg.name="adgshp-1433416931"; stg.width="480px"; stg.height="620px";stg.ReferenceKey="cUMJ9M6V6MRuvS5qXk+o9w=="; stg.Layout="SquareCalendar"; stg.Language="en-us";stg.Cid="1812144"; stg.DestinationName="";stg.OverideConf=false; new AgdSherpa(stg).initialize();
</script></center>
<br>
<br>								
							<?php homefungsi();?>
<div class="homead">
</div>
						<div class="dashedpost"></div>
						</div>
		<!-- Start Sidebar Logos -->
<aside class="sidebar walleft1">
		    </aside>
<!-- End Sidebar Logos -->
		
<aside class="sidebar walleft1">
		
<div id="sidebars" class="sidebar">
<div class="sidebarpostviews"<h3>Best Hotels Deals</h3></div>
<div class="sidebar_list">
		
       <ul class="popular-posts">
<?php sidebar();?>
		<div style="clear: both"></div>
</div></div>	</aside>					</div><!--.content-->
	</div><!--#page-->
<footer>
		
</footer><!--footer-->
<div class="copyrights"><!--footer code-->
<!--start copyrights-->
	<div class="footer-navigation">
					<ul id="menu-bottom" class=""><li id="menu-item-492" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-492"><a href="/">Home</a></li>
<li id="menu-item-493" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-493"><a href="/about-us.html">ABOUT US</a></li>
<li id="menu-item-497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-497"><a href="/contact.php">CONTACT US</a></li>
</ul>					</div>
<div class="row" id="copyright-note">
	<div class="copyright-left-text">  by <a href="/"> Best Hotels Booking Site</a></div>
	<div class="copyright-text">Copyright &copy; 2019 <a href="/" title="Cheap Hotels Booking Deals" rel="nofollow">Cheap Hotels Booking Deals</a></div>
	</div>

<!--end copyrights-->
</div>
<div id="su-footer-links" style="text-align: center;"></div>
</div><!--.main-container-->
</body>
</html>