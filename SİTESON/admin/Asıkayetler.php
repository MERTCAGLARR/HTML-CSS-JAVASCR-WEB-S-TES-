<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Anasayfa</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Css linki  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="admin.php" class="logo"><img src="images/Logom.png" width="200" height="100"/></a>

      <nav class="navbar">
         
         <a href="Arandevu.php">DERS RANDEVULAR</a>
         <a href="Asıkayetler.php">ŞİKAYETLER</a>
         <a href="Ailetiler.php">İLETİLER</a>
         <a href="Aduyurular.php">DUYURULAR</a>
         <a href="Auyeler.php">ÜYELER</a>

      </nav>

      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name"></p>
         <div class="flex">
            <a href="cikis2.php" class="btn">Çıkış Yap</a>
            
         </div>
      </div>

   </section>

</header> 

<section class="home">

   <center>
   <table style=" border: 10px solid black;background-color: red; border-radius: 10px; width:100%; height: 100%;">
<?php
include("baglanti2.php");

        $bul="select * from şikayet";
        $kayit_kullanici=$db->query($bul);
        
        if ($kayit_kullanici->num_rows) {
          //kullanıcı tablosunu dolduruyor
          while ($satir=$kayit_kullanici->fetch_assoc()) {
            echo '<tr><h1><td>ID</td>
            <td>KULLANICI</td>
            <td>TELEFON</td>
            <td>EMAİL</td>
            <td>KONU</td> 
            <td>MESAJ</td></h1></tr>';
            echo '<tr>';
            echo '<td><h3>'. $satir["id"].'</td><td>'.$satir["adsoyad"].'</td><td>'.$satir["telefon"].'</td><td>'.$satir["email"].'</td><td>'.$satir["konu"].'</td><td>' .$satir["mesaj"].'</h3></td>';
            echo '</tr>';

          }
        }
        $satir=$kayit_kullanici->fetch_assoc();


 if (isset($_POST["btn_sil"]) ) 
   { 
      $id=$_POST["txt_id"];

     $sil="delete from şikayet where id='$id'";
     $calistir=mysqli_query($db,$sil);

     mysqli_close($db);
    header("location:Asikayetler.php");
   }

?>
</table>
</center>
<form id="form1" method="POST" action="Asıkayetler.php">
   <input type="text"name="txt_id" class="form-control" placeholder="kullanıcı ID"/>
   <button type="submit" name="btn_sil" class="btn">sil</button> 

   


</section>


</footer>






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>


</body>
</html>