<?php  
ob_start();
?>
<?php
	include("baglanti2.php");
	$id = $_GET['id'];

$sil = mysql_query("delete from kullanicilar where ad='$id'");

if($sil==true){
echo "silindi";
header("refresh:2; url=liste.php");//başarılı olursa listeleme sayfasına yönleniyor
}
else
echo "hata oldu";
?> 