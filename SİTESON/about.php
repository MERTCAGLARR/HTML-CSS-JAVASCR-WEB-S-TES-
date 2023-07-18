<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hakkımızda</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font  linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!--  css  linki  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

     <img src="images/Logom.png" width="200" height="100"/>

      <nav class="navbar">
         <a href="index.html">Anasayfa</a>
         <a href="about.php">Hakkımızda</a>
         <a href="contact.php">İletişim</a>
         
      </nav>

      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

     <div class="profile">
         <div class="flex">
            <a href="login.php" class="btn">Giriş Yap</a>
            <a href="uyeol.php" class="btn">Üye Ol</a>
           
         </div>
      </div>

   </section>

</header>

<div class="heading">
   <h3>Hakkımızda</h3>
   <p><a href="home.html">Anasayfa </a> <span> / Hakkımızda</span></p>
</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>Neden Bizi seçmelisiniz ?</h3>
         <p>Kişiye özel yetenek sınavı ile hangi alanda daha başarılı olduğunu tespit edip kişiye özel eğitim yapıyoruz.Bunun yanın da kişi özel ders veya sınıf dersi gibi dersler yaparak farklı görüş ve yorumlarla bilgilerine bilgi katabilirler.Biz her zaman sizin yanınızda olacağız buğün yarın ve daima Ulu Önder Mustafa Kemal ATATÜR'ün dediği gibi "Geleceğin güvencesi sağlam temellere dayalı bir eğitime, eğitim ise öğretmene dayalıdır."</p>
        
      </div>

   </div>

</section>

<section class="steps">

   <div class="box-container">
      

      <div class="box">
         <img src="images/resim1.png" alt="">
         <h3>Kişiye özel yetenek sınavı</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/resim2.png" alt="">
         <h3>Kolay öğrenme odaklı eğitim</h3>
      </div>

      <div class="box">
         <img src="images/resim3.png" alt="">
         <h3>Kişiye Özel Eğitim</h3>
      </div>

   </div>

</section>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
            spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
   },
   breakpoints: {
      550: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>