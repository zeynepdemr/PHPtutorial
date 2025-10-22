<?php

require "db.php";

if(isset($_GET["id"])){

    $id= (int)$_GET["id"];
    $sorgu=$baglanti->prepare("DELETE FROM ogrenciler WHERE id = ?");
    $sorgu->execute([$id]);
}

header("Location: listele.php");

exit;

?>