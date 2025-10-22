<?php

/*
Küçük Görev (Uygulama)

Yeni bir dosya aç: ders7.php

Tek boyutlu bir dizi oluştur: ["PHP", "HTML", "CSS"]

foreach ile ekrana yazdır

Çok boyutlu bir dizi oluştur: 2 öğrencinin isim ve yas bilgisi olsun

foreach ile isim ve yaşlarını ekrana yazdır */

$renkler=["kırmızı","mavi", "sarı"];
echo $renkler[0];

$tekdizi= ["PHP", "HTML", "CSS"];

foreach($tekdizi as $eleman){
    echo "Dizi elemanları: " . $eleman . "<br>";
};

$cokdizi= [
    ["isim"=>"zeynep", "yas"=>24 ],
    ["isim" => "ali", "yas" => 20],
];

foreach($cokdizi as $elemans){
    echo  $elemans["isim"] . $elemans["yas"] . "<br>";
};

?>