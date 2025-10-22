<?php

$not= 70;

if($not < 50)
echo "Kaldınız";

else  ($not >= 50);

echo "geçtiniz" ;

$gun = "çarşamba";

switch ($gun) {
    case "Pazartesi":
    echo "Hafta başındasınız.";
 break;

    case "Cuma":
    echo "haftasonuna az kaldı";
break ;

    case "çarşamba":
    echo "Haftaiçindesiniz";
    break;

}


$sayi = 7;

if ($sayi < 0)
echo "sayı negatiftir.";

else if ($sayi > 0) {
echo "sayı pozitiftir.";
}

else if ($sayi ==0)
echo "sayı sıfırdır.";


switch ($sayi){

    case 1:
    echo "sayı özel değildir 7 dir";
    break;

    case 3:
    echo "emin misin";
    break;

    case 5:
    echo "sayı 10 diyorsun doğru mu";
    break;

    default:
    echo "değerler yanlış doğru tahmin 7 idi.";



}

?>