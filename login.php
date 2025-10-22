<?php
session_start();
require "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"] ?? ""; 
    $password=$_POST["password"] ?? "";


    $sorgu=$baglanti->prepare("SELECT * FROM users WHERE username = ? ");
    $sorgu->execute([$username]);
    $user = $sorgu->fetch(PDO::FETCH_ASSOC);


if($user && password_verify($password, $user["password"])){

    $_SESSION["username"] = $user["username"];
    header("Location: dashboard.php");
    exit;
}
else{

    echo "Kullanıcı adı veya Şifre hatalı.";
}

}
?>

<h2>Giriş Yap</h2>
<form method="POST">
    Kullanıcı Adı: <input type="text" name="kullanici"><br>
    Şifre: <input type="password" name="sifre"><br>
    <button type="submit">Giriş Yap</button>
</form>

<a href="register.php">Hesabın yok mu? Kayıt Ol.</a>




