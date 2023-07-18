<? require 'baglanti2.php'; ?>
<?session_start();
if(!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}
error_reporting(0)
?>
<?php include 'baglanti2.php'; ?>
<?php
if(isset($_POST['kayit'])){
  $isim = $_POST['txtKadi'];
  $sifre = $_POST['password'];
  $telefon = $_POST['telefon'];

  $sifredogrula = $_POST['ikincisifre'];
 
if(empty($isim) ||  empty($sifre)){
  header("Location: uye-kayit.php?hata=girislerbos");
  exit();
}
else if($sifre !== $sifredogrula){
  header("Location: uye-kayit.php?hata=sifrelereslesmedi");
  exit();
 
}else {
    $stmt = $db->prepare("INSERT INTO uyeler (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $isim, $sifre);
    $stmt->execute();
    $stmt->close();
    $db->close();
    echo "kullanıcı eklendi";
  } 
}
?> 
<!DOCTYPE html>
<html>
<head>
   <style>
      body {
        background-image: url('https://marketplace.canva.com/EAD2962NKnQ/2/0/1600w/canva-rainbow-gradient-pink-and-purple-zoom-virtual-background-_Tcjok-d9b4.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="ekle.php" method="POST">
  <table class="table" style="text-align: center;">
                <tr>
                    <td>
 <input  type="text" ID="txtKadi" name="txtKadi" placeholder="Username">
</td>
  </tr>
<tr>

<td>
 <input  type="text" ID="txtKadi" name="password" placeholder="Password">
</td>
  </tr>
<tr>
<td>
 <input  type="text" ID="txtKadi" name="telefon" placeholder="Telefon">
</td>
  </tr>
<tr>
<td>
 <input  type="text"ID="txtKadi"  name="ikincisifre" placeholder="ConfirmPassword">
</td>
  </tr>
<tr>
<td>
 <button  type="submit"ID="txtKadi" value="Kullanıcı ekle" name="kayit">KUllANICI EKLE </button>
</td>
 </form>
           </div>
       </div>
   </div> 

 

</body>
</html>
