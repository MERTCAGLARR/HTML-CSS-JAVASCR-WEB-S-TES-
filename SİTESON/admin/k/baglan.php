 
<?php
/* Sürücü isteğiyle bir ODBC veritabanına bağlanalım */
$dsn = 'mysql:dbname=yetenek;host=localhost';
$user = 'root';
$password = '';
 
try {
    $baglan = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}
 
?>