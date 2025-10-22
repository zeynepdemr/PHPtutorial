<?php
require "db.php"; //PDO bağlantısı

$sql = "CREATE TABLE IF NOT EXISTS ogrenciler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(50) NOT NULL,
    yas INT NOT NULL
)";

$baglanti->exec($sql);
echo "ogrenciler tablosu oluşturuldu!";

$ogrenciler = [
    ["isim" => "Veli", "yas" => 25],
    ["isim" => "Ali", "yas" => 22],
    ["isim" => "Ayşe", "yas" => 23]
];

foreach ($ogrenciler as $ogrenci) {
    $sorgu = $baglanti->prepare("INSERT INTO ogrenciler (isim, yas) VALUES (?, ?)");
    $sorgu->execute([$ogrenci["isim"], $ogrenci["yas"]]);
}

echo "3 öğrenci tabloya eklendi!";
?>

