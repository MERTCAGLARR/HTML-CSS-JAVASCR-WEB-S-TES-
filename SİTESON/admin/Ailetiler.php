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
   

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>


<section class="home">

   <center>
   <table class="table table-hover table-dark table-striped">
<?php
include("baglanti2.php");

        $bul="select * from iletisim";
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

     $sil="delete from iletisim where id='$id'";
     $calistir=mysqli_query($baglanti,$sil);

     mysqli_close($baglanti);
    header("location:Ailetiler.php");
   }

?>
</table>







<form id="form1" method="POST" action="Ailetiler.php">
   <input type="text"name="txt_id" class="form-control" placeholder="kullanıcı ID"/>
   <button type="submit" name="btn_sil" class="btn btn-primary">sil</button> 

</form>
</center>
</section>











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