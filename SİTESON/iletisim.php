
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>İletişim</title>
  </head>
  <body>
    
    <div class="container">
    <div class="row justify-content-center">
    <div class="col">
     <table class="table table-bordered table-striped table-dark">
      <h1>İletişim</h1>
      <tr>
       <td>ID</td>
       <td>Ad-Soyad</td>
       <td>Telefon</td>
       <td>E-Posta</td>
       <td>Konu</td>
       <td>Mesaj</td>
       <td>Silme</td>
       <td>Düzeltme</td>
       </tr>
       
<?php


include_once('baglanti.php');
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM kullanicilar");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
                header("location: home.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            header("location: Kullanici home.php");
            die();
        }
    }
}

?>

<button><a href ='panel.php'>Panel Anasayfa</a></button></br>
<button><a href ='cikis.php'>Çıkış Yap</a></button>

<?php



  include("baglanti2.php");


$sec="Select * From iletisim";
$sonuc=$baglan->query($sec);

if (mysqli_num_rows($sonuc)>0){
    while ($satir=mysqli_fetch_assoc($sonuc))
    {
      echo "<td>".$satir["id"]."</td>";
      $id=$satir["id"];
      echo "<td>".$satir["adsoyad"]."</td>";
      echo "<td>".$satir["telefon"]."</td>";
      echo "<td>".$satir["email"]."</td>";
      echo "<td>".$satir["konu"]."</td>";
      echo "<td>".$satir["mesaj"]."</td>";
      echo "<td><a href='silme.php?sil_id=".$id."'>Silme</a></td>";
      echo "<td><a href='w10-update.php?update_id=".$id."'>Düzeltme</a></td>";
      echo "</tr>";
    }
  } else{
    echo "Kayıt Bulunamadı.<br/>";
  }
  ?>
</table>
</div>
</html>
</body>




