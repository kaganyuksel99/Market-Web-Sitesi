<!DOCTYPE html>
<html>
<head>
	<title>Kampüs Market</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="yeni.css">
	<link rel="stylesheet"  href="style.css">
	<script src="js/modernizr.custom.63321.js"></script>
</head>
<body>
	<div class="navbar">
		<a href="#" class="logo">KAMPÜS</a>
		<ul class="nav">
			<li><a href="yeni.php">Anasayfa</a></li>
			<li><a href="kgiris.php">Giriş yap</a></li> 
			<li><a href="kullanicikayit.php">Üye ol </a></li> 
			<li><a href="iletisim.php">İletişim</a></li> 

		</ul>
	</div>
	<div class="banner-area"  >
		<div class="text-apart">
		</div>
	</div>
	<div class="container">
		<div class="main">
			<br><br>
			<div id="mi-slider" class="mi-slider">
				<ul>
					<li><a href="#"><img src="images/elma.jpg" alt=""><h4>Elma</h4></a></li>
					<li><a href="#"><img src="images/cilek1.jpg" alt=""><h4>Çilek</h4></a></li>
					<li><a href="#"><img src="images/marul.jpg" alt=""><h4>Marul</h4></a></li>
					<li><a href="#"><img src="images/biber.jpg" alt=""><h4>Biber</h4></a></li>
				</ul>
				<ul>
					<li><a href="#"><img src="images/süt.jpg" alt=""><h4>Süt</h4></a></li>
					<li><a href="#"><img src="images/ayran.jpg" alt=""><h4>Ayran</h4></a></li>
					<li><a href="#"><img src="images/kasar.jpg" alt=""><h4>Kaşar</h4></a></li>
					<li><a href="#"><img src="images/peynir.jpg" alt=""><h4>Peynir</h4></a></li>
				</ul>
				<ul>
					<li><a href="#"><img src="images/su.jpg" alt=""><h4>Su</h4></a></li>
					<li><a href="#"><img src="images/psuyu.jpg" alt=""><h4>Meyve Suyu</h4></a></li>
					<li><a href="#"><img src="images/kola.jpg" alt=""><h4>Gazlı İçecekler</h4></a></li>
					<li><a href="#"><img src="images/rakı.jpg" alt=""><h4>Alkol</h4></a></li>
				</ul>
				<ul>
					<li><a href="#"><img src="images/oje.jpg" alt=""><h4>Oje</h4></a></li>
					<li><a href="#"><img src="images/sampuan.jpg" alt=""><h4>Şampuan</h4></a></li>
					<li><a href="#"><img src="images/parfum.jpg" alt=""><h4>Parfüm</h4></a></li>
					<li><a href="#"><img src="images/ruj.jpg" alt=""><h4>Ruj</h4></a></li>
				</ul>
				<nav>
					<a href="sebze.php">Meyve Sebze</a>
					<a href="sut.php">Süt ve Süt Ürünleri</a>
					<a href="icecek.php">İçecekler</a>
					<a href="kozmetik.php">Kozmetik</a>
				</nav>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/jquery.catslider.js"></script>
	<script >
		$(function(){
			$('#mi-slider').catslider();
		});
	</script>
</body>
</html>