<?php
$db = @new mysqli("localhost", "root", "", "yetenek");
if ($db->connect_errno) {
    die('Bağlantı hatası:' . $db->connect_error);
}
$db->set_charset('utf8');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];

  $query = "DELETE FROM uyeler WHERE username = '$username'";

  // Sorguyu çalıştırma
  if ($db->query($query)) {
    echo "Kullanıcı başarıyla silindi.";
  } else {
    echo "Kullanıcı silinirken bir hata oluştu: " . $db->error;
  }
}
?>

<form method="post">
  <label>Kullanıcı Adı:</label>
  <input type="text" name="username">
  <input type="submit" name="submit" value="Sil">
</form>
