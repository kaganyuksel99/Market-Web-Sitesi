<!DOCTYPE html>
<html>
<head>
	<title>Personel Girişi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="perso.css">

</head>
<body>
	<div class="persogiris">
		<img src="images/social.png" class="perso">
		<h1>Personel Girişi</h1>
		<form action="personelgirisi.php" method="POST">
			<p>Yetkili adı</p>
			<input type="text" name="pad"  placeholder="Yetkili adı..." >
			<p>Şifre</p>
			<input type="password" name="psifre"  placeholder="Şifrenizi giriniz...">
			<br>
			<input type="submit" name="submit" value="Giriş Yap">
		</form>
	</div>

</body>
</html>