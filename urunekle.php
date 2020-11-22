<!DOCTYPE html>
<html>
<head>
	<title>Ürün Ekle</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="urunekle.css">
</head>
<body>
	<div class="ekleme">
		<h1>Ürün Ekleme</h1>
		<form action="urekle.php" method="POST">
			<p>Ürün Adı</p>
			<input type="text" name="urunadi"  placeholder="Ürün Adı Giriniz..." >
			<p>Üretici-Tedarikçi Adı</p>
			<input type="text" name="tedadi"  placeholder="Üretici Adını Giriniz..." >
			<p>Stok Sayısı</p>
			<input type="number" name="stok"  placeholder="Stok Sayısınız Giriniz..." >
			<p>Fiyat</p>
			<input type="number" name="fiyat"  placeholder="Fiyat Giriniz..." >
			<p>Görsel Ekle</p>
			<input type="file" name="dosya" value="Görsel Ekle" >
			<br>
			<input type="submit" name="submit" value="EKLE">
			<br>
			<input type="reset" name="temizle" value="FORMU SIFIRLA">
		</form>
	</div>
</body>
</html>