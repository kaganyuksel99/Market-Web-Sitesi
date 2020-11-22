<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="widht-device-widht, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="kayit1.css">
</head>
<body>
	<div class="giris">          <!-- KAYIT FORMU -->
		<img src="images/social.png" class="adam">
			<h1>Kayıt Olun</h1>
			<form action="kulkayit.php" method="POST">
				<p>E-posta</p>
				<input type="email" name="email"  placeholder="E-postanızı giriniz..." >
				<p>Şifre</p>
				<input type="password" name="sifre" placeholder="Şifrenizi giriniz..." > <br>
				<input type="submit" name="submit" value="Kayıt Ol">
			</form>
	</div>

</body>
</html>