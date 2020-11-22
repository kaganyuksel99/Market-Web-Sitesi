<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="widht-device-widht, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="siparis.css">
</head>
<body>
	<div class="giris">          
		
			<h1>Adres Bilgileri</h1>
			<form action="son_islem.php" method="POST">
				<p>Ad Soyad</p>
				<input type="text" name="adınız"  placeholder="Adını Soyadınız" >
				<p>Açık Adres</p>
				<input type="text" name="ilkadres" placeholder="Tam Adres Giriniz" >
                <p>Şehir ve Mahalle </p>
                <input type="text" name="sehir" placeholder="Şehir" >
                <p>Posta Kodu</p>
                <input type="number" name="pkodu" placeholder="Posta Kodunuzu Giriniz" > 
                <p>Ülke</p>
                <input type="text" name="ulke" placeholder="Ülke Giriniz" >
				<input type="submit" name="submit" value="Siparişi Ver...">
			</form>
	</div>

</body>
</html>