<?php

/*$not = 75; değişkenini tanımla.

Karşılaştırma operatörleriyle şu kontrolleri yap:

50’den büyük mü?

100’e eşit mi?

0’dan küçük mü?

Sonuçları var_dump() ile göster. */



$not = 75 ;

var_dump($not >= 50);
var_dump($not == 100);
var_dump($not < 0);

$gectimi = $not > 50 && $not < 100;

echo "Geçti mi:" . ($gectimi ? "Evet" : "Hayır");



?>