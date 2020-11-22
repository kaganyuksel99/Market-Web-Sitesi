<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="kayitol.css">
</head>
<body>
	<div class="giris">
		<img src="images/social.png" class="adam">
			<h1>Giriş Yapın</h1>
			<form action="kulgiris.php" method="POST">
				<p>E-posta</p>
				<input type="email" name="kmail"  placeholder="E-postanızı giriniz..." >
				<p>Şifre</p>
				<input type="password" name="ksifre" placeholder="Şifrenizi giriniz..."> <br>
				<input type="submit" name="submit" value="Giriş Yap">
			</form>
	</div>

</body>
</html>