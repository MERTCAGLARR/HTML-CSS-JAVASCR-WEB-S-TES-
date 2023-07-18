 
<?php
 
 include "baglan.php";
  
  
 $sql ="SELECT * FROM uyeler";
 $sorgu = $baglan->prepare($sql);
 $sorgu->execute();
  
//ad güncelleme
$db = @new mysqli("localhost", "root", "", "yetenek");
if ($db->connect_errno) {
    die('Bağlantı hatası:' . $db->connect_error);
}
$db->set_charset('utf8');

if (isset($_POST['btn_gnclAd'])) {
  $id = $_POST['btn_gnclAd'];
  $name=$_POST['txt_gncl'];
  $query = "UPDATE uyeler SET username = '$name' WHERE id = '$id'";

  // Sorguyu çalıştırma
  if ($db->query($query)) {
    echo "Kullanıcı başarıyla güncellendi.";
  } else {
    echo "Kullanıcı güncellenirken bir hata oluştu: " . $db->error;
  }
}



//silme
if (isset($_POST['btn_sil'])) {
  $sil = $_POST['btn_sil'];

  $query = "DELETE FROM uyeler WHERE id = '$sil'";

  // Sorguyu çalıştırma
  if ($db->query($query)) {
    echo "Kullanıcı başarıyla silindi.";
  } else {
    echo "Kullanıcı silinirken bir hata oluştu: " . $db->error;
  }
}

 ?>
 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mert</title>
     <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 </head>
 <body>
     
     <header>
         <div class="container">
             <div class="row">
                
             </div>
             <div class="row">
                 <div class="col">
                     
                 </div>
             </div>
         </div>
     
     </header>
     <main>
         <div class="container">
             <div class="row mt-4">
                 <div class="col">
                    <form method="POST" action="index.php">
                     <table class="table table-hover table-dark table-striped">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>USERNAME</th>
                                 <th>PASSWORD</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                             <tr>
                                 <td>
                                    <?=$satir['id']?>
                                </td>
                                 <td><?=$satir['username']?></td>
                                 <td><?=$satir['password']?></td>
                                 <td>
                                     <div class="btn-group">
                                         <button type="submit" name="btn_sil" class="btn btn-danger" value="<?=$satir['id']?>">Kaldır</button>
                                         <input type="text" name="txt_gncl">
                                         <button type="submit" name="btn_gnclAd" class="btn btn-primary" value="<?=$satir['id']?>" >Adı Güncelle</button>
                                     </div>
                                 </td>
                             </tr>
                         <?php } ?>
                         </tbody>
                     </table>
                 </form>
                 </div>
             </div>
         </div>
     
     </main>



     <footer></footer>
 </body>
 </html>