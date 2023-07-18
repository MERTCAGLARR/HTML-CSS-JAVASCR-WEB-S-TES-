

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Sayfası</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Css linki  -->
   <link rel="stylesheet" href="css/style.css">
 <h1> Admin Paneline Hoşgeldiniz.</h1>
</head>
<body>
    
<header class="header">

   <section class="flex">
    

      <a href="home.php" class="logo"><img src="images/Logo1.png"width="200" height="100"/></a>

      <nav class="navbar">
         
      <a href="home.php">Anasayfa</a>
      <a href="kullanicilar.php">Kullanıcılar</a>
      <a href="iletisim.php">İletişim</a>
      <a href="Sikayeta.php">Şikayet</a>
      <a href="randevua.php">Ders Randevusu</a>


        
      </nav>

      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      
        <div class="profile">
         <p class="name"></p>
         <div class="flex">
            <a href="panelgiris.php" class="btn">Panel Giriş</a>
            <a href="cikis.php" class="btn">Çıkış Yap</a>
         </div>
      </div>

   </section>

</header>

</div>
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


<?php
include("baglanti.php");





   ?>





