<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="widht-device-widht, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="personelstyle.css">
</head>
<body>
	<div class="giris">          <!-- KAYIT FORMU -->
		<img src="images/social.png" class="adam">
			<h1>Personel Ekleme Ekranı</h1>
			<form action="perekle.php" method="POST">
				<p>Personel adı</p>
				<input type="text" name="pad"  placeholder="Adınızı giriniz..." >
				<p>Şifre</p>
				<input type="text" name="sifre" placeholder="Şifrenizi giriniz..." > <br>
				<input type="submit" name="submit" value="Ekle">
			</form>
	</div>

</body>
</html>