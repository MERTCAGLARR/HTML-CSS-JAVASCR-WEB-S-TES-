
<?php
$db = @new mysqli("localhost", "root", "", "yetenek");
if ($db->connect_errno) {
    die('Bağlantı hatası:' . $db->connect_error);
}
$db->set_charset('utf8');
?>