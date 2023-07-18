

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Kullanıclar</title>
  </head>
  <body>
    
    <div class="container">
    <div class="row justify-content-center">
    <div class="col">
     <table class="table table-bordered table-striped table-dark">
  <h1>Kullanıcılar</h1>
    <tr>
    <td>Kullanıcı adı</td>
    <td>Parola</td>
    <td>Telefon</td>
    <td>Kayıt Tarihi</td>
    
    
  </tr>
  <button><a href ='panel.php'>Panel Anasayfa</a></button></br>
  <button><a href ='cikis.php'>Çıkış Yap</a></button>
       
<?php 


  include("baglanti2.php");

$sec="Select * From uyeler";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
{
    while ($cek=$sonuc->fetch_assoc()) 
    {
      echo "
 
   <tr>
    <td>".$cek['username']."</td>
    <td>".$cek['password']."</td>
    <td>".$cek['telefon']."</td>
    <td>".$cek['k_tarih']."</td>
  

  </tr>

      ";
    }
}

else
{
   echo"Veritabanında Kayıtlı Hiçbir veri Bulunmadı.";
}

?>
</table>
</div>
</html>
</body>


















