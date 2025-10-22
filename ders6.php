<?php
/*
🧩 Küçük Görev (Uygulama)

Yeni bir dosya aç: ders6.php

Parametre alan bir fonksiyon yaz:

Fonksiyon: merhaba($isim)

Ekrana "Merhaba, $isim!" yazsın

2-3 farklı isimle çağır.

Başka bir fonksiyon yaz: carp($a, $b)

return ile sonucu döndürsün

Sonucu bir değişkende saklayıp ekrana yazdır
*/

function merhaba($isim) {
    echo "Selam $isim";

}

merhaba("Zeynep");


function carp($a, $b){

    return $a * $b ;
}

$sonuc= carp(8,9);

echo "Sonuç: $sonuc";


?>