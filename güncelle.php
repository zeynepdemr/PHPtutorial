<?php 
require "db.php";

if(isset($_GET["id"])){
$id= (int)$_GET["id"];

$sorgu=$baglanti->prepare("SELECT * FROM ogrenciler WHERE id = ?");
$sorgu->execute($_GET["id"]);
$ogrenci = $sorgu->fetch(PDO::FETCH_ASSOC);
}

if($_SERVER["REQUEST_METHOD"]== $_POST){

    $id=(int)$_POST["id"];
    $isim=htmlspecialchars($_POST["isim"]);
    $yas=(int)$_POST["yas"];
    
    $guncelle = $baglanti->prepare("UPDATE ogrenciler SET isim=?, yas=? WHERE id=?");
    $guncelle->execute([$isim, $yas, $id]);

    header("Location: guncelle.php");

    exit;
}
?>

<h2>Öğrenci Güncelle</h2>
<form method="post">
    <input type="hidden" name="id" value="<?= $ogrenci['id'] ?>">
    İsim: <input type="text" name="isim" value="<?= htmlspecialchars($ogrenci['isim']) ?>" required><br><br>
    Yaş: <input type="number" name="yas" value="<?= $ogrenci['yas'] ?>" required><br><br>
    <input type="submit" value="Kaydet">
</form>

<a href="listele.php">Listeye Dön</a>
