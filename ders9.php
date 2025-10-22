<?php
/*
Yeni bir dosya oluştur: ders9.php

file_put_contents() ile “ders9.txt” adında bir dosya oluştur ve içine “PHP dosya işlemleri çok kolay!” yaz.

Ardından file_get_contents() ile dosyayı oku ve ekrana yazdır.

(İsteğe bağlı) Dosya mevcutsa boyutunu ekrana yaz.
*/


$dosya= fopen("veri.txt", "w");

fwrite($dosya, "Bu dosyaya veri eklenebilir.") ;

fclose($dosya);

fopen("veri.txt", "r");

/*while(!feof($dosya)){
    echo fgets($dosya). "<br>" ;
} */

echo "Veri dosyaya yazdırıldı.";

file_put_contents("ders9.txt", "PHP dosya işlemleri çok kolay!");

$content= file_get_contents("ders9.txt");
echo "$content";

//dosya silme
if (file_exists("notlar.txt")) {
    unlink("notlar.txt");
    echo "Dosya silindi.";
} else {
    echo "Dosya bulunamadı.";
}
?>