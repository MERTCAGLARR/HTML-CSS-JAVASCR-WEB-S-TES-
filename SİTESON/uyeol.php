<?php

include("baglanti2.php");


if(isset($_POST["kaydet"]))
{
   $kullaniciadi=$_POST["username"];
   $parola=$_POST["password"];
   $telefon=$_POST["tel"];
   $tarih=date("Y/m/d");

   $ekle="INSERT INTO uyeler (username, password, telefon, k_tarih) VALUES ('".$kullaniciadi."','".$parola."','".$telefon."','".$tarih."')";
if ($baglan->query($ekle)==True) 
{
   

   echo "<script>alert('Kayıt başarılı.')</script>";
      }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Üye Ol</title>

   <!-- font  linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!--  css linki  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
   


<section class="form-container">

   <form action="uyeol.php" method="POST">
      <h3>Üye Ol</h3>
      <input type="text" required maxlength="50" name="username" placeholder="Kullancı Adınızı ve Soyadınızı Giriniz" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" required maxlength="20" name="password" placeholder="Şifrenizi Giriniz" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="telefon" required maxlength="20" name="tel" placeholder="Telefon Numarası Giriniz" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Üye ol" class="btn" name="kaydet">
   </form>

</section>

<script src="js/script.js"></script>

</body>
</html>

