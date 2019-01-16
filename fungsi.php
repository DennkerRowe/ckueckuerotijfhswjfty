<?php
function acak_asin($data) {
	$akun = explode('||', $data);
	$terpilih = array_rand($akun, 1);
	$pecah = explode('|', $akun[$terpilih]);
	$apinya = array(
			'tag' => $pecah[0],
			'api' => $pecah[1],
			'secretkey' => $pecah[2]);
	return $apinya;
}
function acak($data) {
	$pecah = explode('|', $data);
	if($pecah > 1) {
		$keyword = array_rand($pecah, 1);
		return $pecah[$keyword];
	}
	else {
		return $pecah[0];
	}
}
function sanitize_title2($target) {
	$ganti = array('&','&amp;');
	$ganti2 = array('_','-',':','!',',','<','>','(',')','[',']','|','/','\\','#');
	$target = str_replace($ganti, 'and', $target);
	$target = str_replace($ganti2, '-', $target);
	return sanitize_title($target);
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
function ambil_asin($link) {
	$link = ambil_kw($link);
	$pecah = explode('-', $link);
	$asin = $pecah[0];
	return $asin;
}
function ambil_kw($link) {
	$pecah = explode('/', $link);
	$kata = $pecah[2];
	return $kata;
}
function BingText($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
function spinText($text){
    $test = preg_match_all("#\{(.*?)\}#", $text, $out);

    if (!$test) return $text;

    $toFind = Array();
    $toReplace = Array();

    foreach($out[0] AS $id => $match){
    $choices = explode("|", $out[1][$id]);
    $toFind[]=$match;
    $toReplace[]=trim($choices[rand(0, count($choices)-1)]);
    }

    return str_replace($toFind, $toReplace, $text);
}  
function agclist() {
	if (file_exists('oda.txt')) {
		$myfile = fopen("oda.txt", "r") or die("Unable to open file!");
		echo '<ul>';
		while( $i < 10) {
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
				echo '<li><a href="'.$url.'" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		echo '</ul>';
		fclose($myfile);
	}
}


function randomKeywords(){
$alltxt= glob("city/*.txt");
shuffle($alltxt);
$thistxt= $alltxt[0];

$allarray= file_get_contents($thistxt);
$allarray= array_filter(explode("\n", $allarray));
shuffle($allarray);
$data= array_slice($allarray,0,18);
$content='';
foreach($data as $items){
$items= trim($items);
$slugsq= trim(str_replace('/', '-', $items),'-');
$slugsq= trim(str_replace(' ', '-', $slugsq),'-');
$pathsq= substr(md5($slugsq),0,5);
$content .= '<a href="http://'.$_SERVER['SERVER_NAME'].'/hotel/'.$slugsq.'">'.$items.'</a> , ';
}
return $content;
}

?>