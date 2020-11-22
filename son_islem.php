<?php

$db = new PDO("mysql:host=localhost;dbname=kampus;charset=utf8", "root", "");



$adsoyad = $_POST['adınız'];
$tamadres = $_POST['ilkadres'];
$city = $_POST['sehir'];
$posta = $_POST['pkodu']; 
$country = $_POST['ulke'];

if (!$adsoyad || !$tamadres || !$city || !$posta || !$country ) {
    die("Lütfen boş alan bırakmayınız");
} 

$ekle = $db->prepare("INSERT INTO siparis SET ad_soyad = ?, adres1 = ?,  sehir = ?,  posta_kodu = ?,  ulke = ?  "); 
$ekle->execute([$adsoyad, $tamadres, $city, $posta, $country ]);

if ($ekle) {
    echo "Siparişiniz Alınmıştır. Yine bekleriz... KAMPÜS MARKET";

}else {
    echo "Bir hata oluştu"; 
}

