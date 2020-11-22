<?php

$db = new PDO("mysql:host=localhost;dbname=kampus;charset=utf8", "root", "");

session_start();
ob_start();

$kadi = $_POST['kmail'];
$sifre = $_POST['ksifre'];

if (!$kadi || !$sifre) {
    die("boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM kullanici WHERE email= '$kadi' AND sifre = '$sifre'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:yeni.php");
}else {
    echo "Bilgiler hatalı";

}







?>