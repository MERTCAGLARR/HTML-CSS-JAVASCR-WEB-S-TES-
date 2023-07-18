<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Panel Girişi</title>

   <!-- font  linki  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!--  css linki  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<header class="header">

   <section class="flex">

      <a href="home.php" class="logo"><img src="images/Logo1.png" width="200" height="100"/></a>

      <nav class="navbar">
         <a href="home.php">Anasayfa</a>
      </nav>


   </section>

</header>

<section class="form-container">

   <form action="panelgiris.php" method="post">
      <h3>Giriş Yap</h3>
      <input type="text" required maxlength="50" name="username" placeholder="Kullanıcı Adı" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" required maxlength="20" name="password" placeholder="Parola" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Giriş Yap" class="btn" name="submit">
   </form>

</section>

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
    $stmt = $conn->prepare("SELECT * FROM admin_users");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
                header("location: panel.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            header("location: login.php");
            die();
        }
    }
}

?>
