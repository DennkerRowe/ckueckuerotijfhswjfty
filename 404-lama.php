<?php
include('config.php');
$domen 			= $_SERVER['HTTP_HOST'];
include ('fungsi.php');
header('HTTP/1.1 200 OK');
$url = $_SERVER['REQUEST_URI'];
$urlnya = $_SERVER['REQUEST_URI'];
$domains = $_SERVER['HTTP_HOST'];
$url = str_replace('agcmasterclass/', '', $url);
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
$images = preg_replace('/[0-9]+/', '', $judul);
$cano = $domains.'/'.$single.'/'.$asin.'-'.sanitize_title2($judul).'';



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
<title><?php echo $site_name;?></title>
		<link rel="icon" href="/hotels.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
	

	<meta name="description" content="<?php echo $site_desc;?>" />
	<meta property="og:type" content="blog" />
	<meta property="og:title" content="<?php echo $site_name;?>" />
	<meta property="og:description" content="<?php echo $site_desc;?>" />
	<meta property="og:url" content="/" />
	<meta property="og:site_name" content="<?php echo $site_name;?>" />
	<meta name="twitter:card" content="summary" />
<!-- /SEO Ultimate -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Cheap Hotels Booking Deals &raquo; Feed" href="/feed/" />
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
		
		    						<header class="main-header">
			<div id="header">					
					
														<h1 id="logo" class="logo-image">
									<a href="/"><img src="/home/hotelslogo.png" alt="<?php echo $site_name;?>"></a>
								</h1><!-- END #logo -->
														</div>
		</header>
	
		<h1 class='post-title entry-title'>
<?php echo $judul; ?>
</h1>		


                                


                                		
<div>
						
	<div id="adgshp-1990510337"></div>
<script type="text/javascript" src="//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"></script><script type="text/javascript">
var stg = new Object(); stg.crt="59770244910854";stg.version="1.04"; stg.id=stg.name="adgshp-1990510337"; stg.width="900px"; stg.height="335px";stg.ReferenceKey="6BUXMGvTjDhXOarPF84Srw=="; stg.Layout="Oneline"; stg.Language="en-us";stg.Cid="1812144"; stg.DestinationName="";stg.OverideConf=false; new AgdSherpa(stg).initialize();
</script>					
						
<br>
<br>

</div>
<footer>
		
</footer><!--footer-->
<div class="copyrights"><!--footer code-->
<!--start copyrights-->
<br>
<br>
	<div class="footer-navigation">
					<ul id="menu-bottom" class=""><li id="menu-item-492" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-492"><a href="/">Home</a></li>
<li id="menu-item-493" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-493"><a href="/about-us.html">ABOUT US</a></li>
<li id="menu-item-497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-497"><a href="/contact.php">CONTACT US</a></li>
</ul>					</div>
<div class="row" id="copyright-note">
	<div class="copyright-left-text"> Mod by <a href="/"> Cheap Hotels Deals</a></div>
	<div class="copyright-text">Copyright &copy; 2018 <a href="/" title="Cheap Hotels Booking Deals" rel="nofollow">Cheap Hotels Booking Deals</a></div>
	</div>

<!--end copyrights-->
</div>
<div id="su-footer-links" style="text-align: center;"></div>
</div><!--.main-container-->
 <?php include('histats.php'); ?>

</body>
</html>