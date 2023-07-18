<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>İletişim</title>

   <!-- font linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- css  linki  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   




<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="contact.php" method="post"> 
         <h3>İletişim Formu</h3>
         <input type="text" name="isim" required placeholder="Ad Soyad" maxlength="50" class="box">
         <input type="number" name="tel" required placeholder="Telefon numarası" max="9999999999" min="0" class="box" onkeypress="if(this.value.length == 10) return false;">
         <input type="email" name="mail" required placeholder="Mail adresi" maxlength="50" class="box">
         <input type="text" name="konu" required placeholder="Konu başlığı." maxlength="50" class="box">
         <textarea name="mesaj" placeholder="Mesajınızı giriniz" required class="box" cols="30" rows="10" maxlength="500"></textarea>
         <input type="submit" value="Gönder" class="btn" name="send">
            
      </form>

   </div>

</section>





<?php
include("baglanti2.php");


if(isset($_POST["isim"], $_POST["tel"] , $_POST["mail"] , $_POST["konu"] , $_POST["mesaj"] ))
{
   $adsoyad=$_POST["isim"];
   $telefon=$_POST["tel"];
   $email=$_POST["mail"];
   $konu=$_POST["konu"];
   $mesaj=$_POST["mesaj"];

   $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES 
   ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
if ($baglan->query($ekle)==True) 
{
   

   echo "<script>alert('Mesajınız Başarı ile Gönderildi.')</script>";
      }
}

   ?>



<script src="js/script.js"></script>

</body>
</html>

