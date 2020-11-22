<?php

$db = new PDO("mysql:host=localhost;dbname=kampus;charset=utf8", "root", "");



$perad = $_POST['pad'];
$sifre = $_POST['sifre']; 

if (!$perad || !$sifre) {
    die("Lütfen boş alan bırakmayınız");
} 

$ekle = $db->prepare("INSERT INTO personel SET ad = ?, sifre = ? "); 
$ekle->execute([$perad, $sifre]);

if ($ekle) {
    echo "Kayıt Başarılı";

}else {
    echo "Bir hata oluştu"; 
}

