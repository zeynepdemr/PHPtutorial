<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Öğrenci ekle</title>    
</head>

<body>
    <h2>Yeni Öğrenci Ekle</h2>
    <form action="" method="post">
    İsim: <input type="text" name="isim" required><br><br>
    Yaş: <input type="text" name="yas" required><br><br>
    <input type="submit" value="Ekle">
    </form>


<?php 
require "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $isim = htmlspecialchars($_POST["isim"]);;
    $yas=(int)$_POST["yas"];

    $sorgu=$baglanti->prepare("INSERT INTO ogrenciler (isim, yas) VALUES (?, ?)");

    $sorgu->execute([$isim, $yas]);

    echo "$isim eklendi";
}
?>

<br> <a href="listele.php">Listeye Dön</a>
</body>
</html>