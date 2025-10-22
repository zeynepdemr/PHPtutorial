<?php 

require "db.php";

if(!isset($_SESSION["username"])){

    header("Location: login.php");
    exit;
}

?>

<h2>Hoş Geldin <?= htmlspecialchars($_SESSION["kullanici"]) ?> </h2>
<p>Bu sayfa sadece giriş yapan kullanıcılar içindir.</p>

<a href="logout.php">Çıkış Yap</a>
