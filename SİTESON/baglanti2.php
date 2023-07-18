<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="yetenek";


$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);



if (!$baglan) 
{
      die("Veritabanı  bağlantı işlemi başarısız".mysql_connect_error());	
}
	?>