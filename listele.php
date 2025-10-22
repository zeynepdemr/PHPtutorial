<?php
require "db.php";

$sorgu = $baglanti->query("SELECT * FROM ogrenciler");
$ogrenciler = $sorgu->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Öğrenci Listesi</h2>
<a href="ekle.php">+ Yeni Öğrenci Ekle</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>İsim</th>
    <th>Yaş</th>
    <th>İşlemler</th>
</tr>
<?php
foreach ($ogrenciler as $ogrenci) : ?>
    
<tr>
    <td><?=$ogrenci["id"]?></td>
    <td><?=htmlspecialchars($ogrenci["isim"])?></td>
    <td><?=$ogrenci["yas"]?></td>
</tr>

<td>
    <a href="guncelle.php?id=<?= $ogrenci['id'] ?>">✏ Güncelle</a> | 
    <a href="sil.php?id=<?= $ogrenci['id'] ?>" onclick="return confirm('Silinsin mi?')">Sil</a>
</td>
</tr>
<?php endforeach; ?>
</table>