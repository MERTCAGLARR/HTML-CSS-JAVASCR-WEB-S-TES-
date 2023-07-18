<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Şikayet</title>

   <!-- font linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- css  linki  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <img src="images/Logom.png" width="200" height="100"/>

      <nav class="navbar">
        
         <a href="khome.php">Anasayfa</a>
         <a href="Sikayet.php">Şikayet</a>
         <a href="randevu.php">Ders Randevusu</a>
      </nav>

      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

     <div class="profile">
         <p class="name"></p>
         <div class="flex">
            <a href="index.php" class="btn">Çıkış Yap</a>
            
         </div>
      </div>


   </section>
  
</header>



<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="Sikayet.php" method="post"> 
         <h3>Şikayet Formu</h3>
         <input type="text" name="isim" required placeholder="Ad Soyad" maxlength="50" class="box">
         <input type="number" name="tel" required placeholder="Telefon numarası" max="9999999999" min="0" class="box" onkeypress="if(this.value.length == 10) return false;">
         <input type="email" name="mail" required placeholder="Mail adresi" maxlength="50" class="box">
         <input type="text" name="konu" required placeholder="Konu" maxlength="50" class="box">
         <textarea name="mesaj" placeholder="Mesajınızı giriniz" required class="box" cols="30" rows="10" maxlength="500"></textarea>
         <button type="submit" value="Gönder" class="btn" name="send">
      </form>

   </div>

</section>
<script src="js/script.js"></script>

<?php
include("baglanti.php");


if(isset($_POST["send"] ))
{
   $adsoyad=$_POST["isim"];
   $telefon=$_POST["tel"];
   $email=$_POST["mail"];
   $konu=$_POST["konu"];
   $mesaj=$_POST["mesaj"];



$kaydet="INSERT INTO şikayet (adsoyad,telefon,email,konu,mesaj,k_tarih) VALUES ('$adsoyad','$telefon','$email','$konu','$mesaj','$k_tarih')";
     $calistir=mysqli_query($baglanti,$kaydet);
     echo "<script>alert('Mesajınız Başarı ile Gönderildi.')</script>";

  }


      

   ?>



</body>
</html>
