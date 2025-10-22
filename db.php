<?php
$host = "127.0.0.1";
$dbname = "php_ders";
$username = "root";
$password = "root";

try {
    $baglanti = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Docker MySQL bağlantısı başarılı!";
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
?>
