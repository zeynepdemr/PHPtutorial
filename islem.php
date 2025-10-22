<?php
/*if (isset($_POST['isim']) && isset($_POST['yas'])) {*/
    $isim = htmlspecialchars($_POST['isim']);
    $yas = (int)$_POST['yas'];

    echo "Merhaba $isim, yaşın $yas.";
/*} else {
    echo "Lütfen formu doldur ve gönder!";
}*/
?>
