<meta charset="UTF-8"/>

<div class="form">
	
<form>
<h4>ARA</h4>
	<input type="text" name="ara" />
	<input type="submit" name="gonder" value="gonder" />
</form>

</div>
<?php 
header("Content-Type: text/html; charset=utf-8");
if ($_GET)
{
	if ($_GET['ara']=="" || !isset($_GET['ara']))
	{
		echo "<script>alert('Lütfen aramak istediğiniz kelimeyi girin')</script>";	
	}
	else
	{
$kelime=str_replace(" ","+",$_GET['ara']);
$useragent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14912/870; U; id) Presto/2.4.15";
$ch = curl_init ("");
curl_setopt ($ch, CURLOPT_URL, "http://www.google.com/search?hl=tr&tbo=d&site=&source=hp&q=".$kelime);
curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$cıktı = curl_exec ($ch);
curl_close($ch);
//print_r($cıktı);
function ara($bas, $son, $icerik)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $icerik, $m);
    return @$m[1];
}
$sonuc = ara('<div style="clear:both">','</div>', $cıktı);
//print_r($sonuc);
$deneme=(explode('<a href="/url?q=',$sonuc[0]));
$d2=explode('/', $deneme[1]);
$site=$d2[2];
//$str_sonuc=strip_tags($sonuc[2]);
$bulunan_site=file_get_contents("http://".$site);
////////////////////////////////////////////////////////////
$link = explode('<a href="',$bulunan_site);
//print_r(count($link));
$resim=ara('<img src="','"',$bulunan_site);
//print_r($resim);
/*
for ($x=3; $x <count($resim); $x++)
{ 	
	
	echo "</br>";
	  $https=str_replace('https://',' ',$resim[$x]);
	 //echo "</br>";echo "</br>";echo "</br>";
	   $http=str_replace('http://',' ',$https); 
	
	
	if ($http[0]=="/" && $http[1]!=="/") {
		$http="http://".$site.$http;
		
		
		
	}
	echo curl_img_size($http);
}//for*/
//echo "</br></br>";
//echo curl_img_size($resim[$i]);
//*************************************************************/

//Sorunlu bölge
for ($i=0; $i <count($resim); $i++)
{ 	$aa=$resim[$i];
	if ($aa[0]=="/" && $aa[1]!=="/") {
		$aaa=$site.$aa;
		//echo $aaa."</br>";
		$resim[$i]=$aaa;
	}
		echo curl_img_size($resim[$i]); // 0 döndürüyor
}//for

/*
for ($x=2; $x <4 ; $x++) { 
	
	$bb=$resim[$x];

	$bb2=str_replace("https://",' ',$bb);

	echo "</br>";
	echo $bb2;
	echo "</br>";
	echo curl_img_size($bb2);
}
*/
//print_r($resim[1]);

//*************************************************************/
//Yayınlama
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';  
echo "<h3 class='h3-site'>".$site;
echo "</br> Toplam Resim Sayısı : ".count($resim);
echo "</br> Toplam Link Sayısı : ".count($link);
echo "</h3>";
echo "<div class='site'>";
$temiz=$bulunan_site; 
//print_r($temiz);
echo "</div>";
}//else
}///
?>

<style type="text/css">
	.form{
		position: absolute;
		z-index: 999999999;
		top: 0px;
		right:0px;
		background:#337ab7;
		border-radius: 10px;
		padding: 20px;
		color: #fff;
		text-align: center;
		font-family: arial;
		font-size: 20px;
	}
	.h3-site
	{
		position: absolute;
		z-index: 999999999;
		top: 0px;
		left: calc(50% - 250px);
		width: 500px;
		height: auto;
		background:#337ab7;
		padding: 10px;
		text-align: center;
		border-radius: 10px;
		color: #fff;
		font-family: arial;
		font-size: 20px;
	}
</style>
<!--
//print_r(getimagesize("https://img-s1.onedio.com/id-57ee3c7e596dff604e4b1694/rev-0/w-460/h-290/f-jpg/s-2c4e0d1ecf3a140cf40c4db624e0db59e8562a4e.jpg"));
/*
$thefile = filesize('index.php'); 
$dosya=file_get_contents("https://img-s1.onedio.com/id-575d0b418d8892fb48cd5c10/rev-0/w-190/h-110/f-jpg/s-a44968c4ea04c7277a1f448ba4da75929bf364e9.jpg");
echo $dosya;
*/
-->

<?php
function curl_img_size($file)
{
$ch = curl_init($file);
   curl_setopt($ch, CURLOPT_NOBODY, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, true);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   $data = curl_exec($ch);
   curl_close($ch);
   $contentLength=0;
   if (preg_match('/Content-Length: (\d+)/', $data, $matches))
   {
       $contentLength = (int)$matches[1];
       /*
  		 function format_size($size)
		{
     			 $sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
      			if ($size == 0) { return('n/a'); } else {
      			return (round($size/pow(1024, ($i = floor(log($size, 1024)))), 2)); }
		}
		$contentLength=format_size($contentLength);
		*/
   }
   return $contentLength;
}

//echo curl_img_size("img-s2.onedio.com/id-57ee706ccda9156516456b87/rev-0/w-310/h-155/f-jpg/s-74402397b5952c3895214c5c5fb80c9ee42787e0.jpg");

?>