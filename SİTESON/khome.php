
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
   
<?php 

            include("baglanti.php");
            session_start();


            //tabloların verileri
            if ($_SESSION["id"]>1) {
echo '


<header class="header">

   <section class="flex">

      <a href="khome.php" class="logo"><img src="images/Logom.png" width="200" height="100"/></a>

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



';} 
?>


</body>
</html>


