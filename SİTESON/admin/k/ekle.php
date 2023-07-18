<?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `uyeler` ( `username`, `password`) VALUES (NULL, ?, ?);";
    $dizi =[
        $_POST["username"],
        $_POST["password"],
    ];
}
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasarım Kodlama</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Tasarım Kodlama</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-primary">Tüm Öğrenciler</a>
                        <a href="ekle.php" class="btn btn-outline-primary">Öğrenci Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>
    <div class="container">
    <form action="" method="post">
 <input  type="text" name="username" placeholder="Username">
 <input  type="password" name="password" placeholder="Password">
 <input  type="password" name="ikincisifre" placeholder="ConfirmPassword">
 <input  type="submit" value="Kullanıcı ekle" name="kayit">
 </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>
 