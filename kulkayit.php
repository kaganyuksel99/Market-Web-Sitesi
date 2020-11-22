<?php

$db = new PDO("mysql:host=localhost;dbname=kampus;charset=utf8", "root", "");



$email = $_POST['email'];
$sifre = $_POST['sifre']; 

if (!$email || !$sifre) {
    die("Lütfen boş alan bırakmayınız");
} 

$ekle = $db->prepare("INSERT INTO kullanici SET email = ?, sifre = ? "); 
$ekle->execute([$email, $sifre]);

if ($ekle) {
    echo "Kayıt Başarılı";
    header("location:kgiris.php");
}else {
    echo "Bir hata oluştu"; 
}

header("location:kgiris.php"); 



