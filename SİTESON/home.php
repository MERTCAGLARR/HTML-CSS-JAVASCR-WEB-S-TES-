
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

      <a href="home.php" class="logo"><img src="images/Logom.png" width="200" height="100"/></a>

      <nav class="navbar">
         
         <a href="home.php">Anasayfa</a>
         <a href="about.php">Hakkımızda</a>
         <a href="contact.php">İletişim</a>
      </nav>

      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <p class="name"></p>
         <div class="flex">
            <a href="login.php" class="btn">Giriş Yap</a>
            <a href="uyeol.php" class="btn">Üye Ol</a>
           
         </div>
      </div>

   </section>

</header>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <h3>Başlangıç Paketi</h3>
               <h2>Bu pakette başlangıç düzeyden başlayarak ileri seviye eğitiminiz için püf noktalra değiniyoruz ayrıca video tasarım konusunda nereler de ne gibi işler yapılır neler yapılır gibi yönlerdirmelerimiz de mevcut..</h2>
               <a href="about.php" class="btn">Daha Fazlası</a>
            </div>
            <div class="image">
               <img src="images/ilkderece.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <h3>İleri Seviye Eğitim</h3>
               <h2>Bu pakette ileri seviye eğitimizin yanı sıra sizinle beraber sorularınıza ve takıldığınız noklara değinerek gelişim sürecinizin ve en etkin yolları soru cevap yolları ile beraber buluyoruz bunun sayesinde yönetimi ezberlemek yerine yöntemi öğreniyorsunuz buda size en büyük etkenlerden biri olan profesyonelliği sağlıyor bunun yanı sıra sizinle beraber iş yönlendirmesi ve video içerik önerileri yapıyoruz..</h2>
               <a href="about.php" class="btn">Daha Fazlası</a>
            </div>
            <div class="image">
               <img src="images/ortaderece.png" alt="">
            </div>
         </div>

         

      </div>

      <div class="swiper-pagination"></div>

   </div>


</section>


</footer>
<div class="main">
  <h1>Neden Biz ??</h1>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/home1.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Tecrübeli Eğitmenlik</h2>
          <p class="card_text">bizlerden destek ve eğitim alarak daha....</p>
          <button class="btn card_btn">Daha Fazla</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/resim4.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Özel Yetenek Sınavı</h2>
          <p class="card_text">Kişinin yetenek özelliklerine göre sınav</p>
          <button class="btn card_btn">Daha Fazla</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="images/home2.png"></div>
        <div class="card_content">
          <h2 class="card_title">Modern Eğitim Sistemi</h2>
          <p class="card_text">Eğitim sistemimiz en yetkin ve kişiye uyumlu olarak öğrenciyle beraber tasarlanır..</p>
          <button class="btn card_btn">Daha Fazla</button>
        </div>
      </div>
    </li>
  </ul>
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

</body>
</html>


