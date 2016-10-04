<?php 

/**
 * SLC WEB 	MÜHENDİSLİĞİ SİTE ANALİZ BOTU
 *
 * 
 * @author Oguzcan Demircan
 **/

echo "</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>";

/*** Fonksiyonlar ***/
ini_set('max_execution_time', 250);

function img_boyut($file)
{
$ch = curl_init($file);
$useragent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14912/870; U; id) Presto/2.4.15";
curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
   curl_setopt($ch, CURLOPT_NOBODY, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, true);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   $veri = curl_exec($ch);
   curl_close($ch);

   $toplam_boyut=0;
   
   if (preg_match('/Content-Length: (\d+)/', $veri, $ddd))
   {
       $toplam_boyut = (int)$ddd[1];
       
   }
   return $toplam_boyut;

}


function donustur($bytes)
    {
      
        $kb=$bytes/1024;
       // $mb=$kb/1024;
        return round($kb,2)."KB";
}

function ara($bas, $son, $icerik)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $icerik, $m);
    return @$m[1];
}


header("Content-Type: text/html; charset=utf-8");

if ($_GET)
{
	if ($_GET['ara']=="" || !isset($_GET['ara']))
	{
		echo "<script>alert('Lütfen aramak istediğiniz kelimeyi girin')</script>";	
	}
	else
	{

/****** Google Curl Arama ******/
$kelime=str_replace(" ","+",$_GET['ara']);

$useragent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14912/870; U; id) Presto/2.4.15";
$ch = curl_init ("");
curl_setopt ($ch, CURLOPT_URL, "http://www.google.com/search?hl=tr&tbo=d&site=&source=hp&q=".$kelime);
curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$cıktı = curl_exec ($ch);
curl_close($ch);


$sonuc = ara('<div style="clear:both">','</div>', $cıktı);


$deneme=(explode('<a href="/url?q=',$sonuc[0]));

$d2=explode('/', $deneme[1]);
$site=$d2[2];
$site;

//echo "</br></br>Site adresi = ".
	$site_www=substr($site,4,strlen($site));

$bulunan_site=file_get_contents("http://".$site);

////////////////////////////////////////////////////////////

$link = ara('<a href="','"',$bulunan_site);
//print_r(count($link));

//$resim=ara('<img src="','"',$bulunan_site);

$resim=ara('<img ','>',$bulunan_site);

//print_r($resim);

//$resim3=
//$resim2 = ara('src="','"',$resim3);
//echo "</br></br></br></br></br></br></br></br></br></br>=================";
//print_r($resim2);
//*************************************************************/

$toplam=0;

	
for ($i=5; $i <count($resim); $i++)
{ 	
	 $aa=$resim[$i];
	$resim[$i]=str_replace("https://","http://",$resim[$i]);
	
	 if ($aa[0]=="/" && $aa[1]!=="/") 
	{
		
		$aaa=$site.$aa;
		//echo $aaa."</br>";
		$resim[$i]=$aaa;
	}
	else
	{	
		

		$x=substr($resim[$i],0,strlen($site_www));
		
		
 		if ($x!=$site_www and substr($resim[$i],0,7)!="http://" and substr($resim[$i],0,1)!="//")
		{	
			//echo "</br></br> ==  site www :: ".
			$resim[$i]=$site_www."/".$resim[$i];
		
		}
	}
		
	
	//echo  "</br> Resim  ===".$resim[$i]." ==</br>";
	$toplam+=(int)img_boyut($resim[$i]);

}//for

	//echo "</br>".img_boyut("http://slc.com.tr/images/client/falmec.png");

//*************************************************************/
 
//***** Yayınlama *******//

 	
	echo '<div class="panel panel-primary slc-sonuc">';
    echo '<div class="panel-heading beyaz">';
    echo '<h3 class="panel-title bold" id="panel-başlığı">'.$site;
    echo '</h3>';
    echo '</div>';
    echo '<div class="panel-body">';
    echo '<div class="alert alert-info" role="alert">';

    echo "Toplam Resim Sayısı : ".count($resim);
	echo "</br> Toplam Link Sayısı 	: ".count($link);
	echo "</br> Toplam Resim Boyutu : ".donustur($toplam);
	
    echo '</div>';
    echo '</div>';
    echo '</div>';

   
	echo "<div class='site'>";
	//print_r($bulunan_site);
	echo "</div>";

}//else


}///
/***************************************************************/
?>

<!-- Html -->
	
<head>
<meta charset="UTF-8"/>
</head>
	<div class="panel panel-primary slc-form">
		<div class="panel-heading">
			<h3 class="panel-title" id="panel-başlığı">SLC Web Mühendisliği Site Analiz Aracı</h3>
		</div>
		<div class="panel-body">
    		<div class="Form Grup">
				<form>
					</br>
					<input class="form-control" type="text" name="ara" placeholder="Aramak İstediğiniz Siteyi Yazın" /></br>
					<input class="btn btn-primary pull-right" type="submit" name="gonder" value="gonder" />
				</form>
			</div>
		</div>
	</div>


<!-- Css -->
<style type="text/css">
	
	.slc-sonuc
	{
		width: 60%;
		top: 20px;
		left: 50px;
		position: absolute;
		z-index: 999999999;
		text-align: center;
	
	}
	.slc-form
	{
		width: 30%!important;
		position: absolute;
		z-index: 999999999;
		top: 20px;
		right: 50px;
		text-align: center;
	}
	.panel-heading
	{
		padding: 15px!important;
	}
	.beyaz
	{
		color:#fff!important;
		font-weight: bold;
		text-align: center;
	}

</style>

<!-- BootStrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


                        


                        