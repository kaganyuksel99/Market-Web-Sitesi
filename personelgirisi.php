<?php

$db = new PDO("mysql:host=localhost;dbname=kampus;charset=utf8", "root", "");

session_start();
ob_start();

$email = $_POST['pad'];
$sifre = $_POST['psifre'];

if (!$email || !$sifre) {
    die("boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM personel WHERE ad= '$email' AND sifre = '$sifre'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:personelana.php");
}else {
    echo "Bilgiler hatalı";

}







?>