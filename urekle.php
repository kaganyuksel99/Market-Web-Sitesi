<?php

$db = new PDO("mysql:host=localhost;dbname=kampus;charset=utf8", "root", "");


$urad = $_POST['urunadi'];
$tadi = $_POST['tedadi']; 
$stk = $_POST['stok'];
$fyt = $_POST['fiyat'];
$file = $_POST['dosya'];


if (!$urad || !$tadi || !$stk || !$fyt || !$file) {
    die("Lütfen boş alan bırakmayınız");
} 

$ekle = $db->prepare("INSERT INTO eklenen SET urun_adi = ?, tedarikci_adi = ?, stok = ?, fiyat = ?, resim = ? "); 
$ekle->execute([$urad, $tadi, $stk, $fyt, $file]);

if ($ekle) {
    echo "Ürün eklendi!";
}else {
    echo "Bir hata oluştu"; 
}