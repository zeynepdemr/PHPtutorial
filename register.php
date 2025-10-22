<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username && $password) {
        // Şifreyi hash’le
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Veritabanına kaydet
        $ekle = $baglanti->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $ekle->execute([$username, $hash]);

        echo "Kayıt başarılı! <a href='login.php'>Giriş yap</a>";
        exit;
    } else {
        echo "Lütfen tüm alanları doldurun.";
    }
}
?>

<h2>Kayıt Ol</h2>
<form method="POST">
    Kullanıcı Adı: <input type="text" name="username"><br>
    Şifre: <input type="text" name="password"><br>
    <button type="submit">Kayıt Ol</button>
</form>