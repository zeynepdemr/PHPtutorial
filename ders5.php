<?php

/*
 Küçük Görev (Uygulama)

Yeni bir dosya aç: ders5.php

for ile 1’den 10’a kadar sayıları yazdır.

while ile 10’dan 1’e doğru sayıları yazdır.

foreach ile bir dizi oluştur: ["PHP", "HTML", "CSS"] ve elemanları sırayla yazdır.
*/


for($i=0; $i<=10; $i++){
    echo "Sayılar: $i <br>";


}

$a = 10;
while($a>0){

   echo "Sayılar: $a <br>";
   $a--;

}


$dizi=["HTML", "CSS", "JAVA"];

foreach($dizi as $z) {
    echo $z . "<br>";
}


?>