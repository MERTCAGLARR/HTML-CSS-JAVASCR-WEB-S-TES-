<?php
session_start();
if (isset($_POST['giris'])) {
    $key = $_POST['key'];
    if ($key == "yetenek") { // doğru key kelimesini buraya yazın
        $_SESSION['giris'] = true;
        header("Location: adminlogin.php");
        exit();
    } else {
        $hata = "Key kelimesi hatalı!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giriş Sayfası</title>
</head>
<body>
<?php if (isset($hata)) { ?>
    <p style="color:red;"><?php echo $hata; ?></p>
<?php } ?>
<form method="POST">
    <input type="text" name="key">
    <input type="submit" name="giris" value="Giriş Yap">
</form>
</body>
</html>
