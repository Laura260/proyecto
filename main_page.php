<!DOCTYPE html>
<html>
<head>
	<title>Página Principal</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" href="imagenes/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/EstiloIndex.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>
<body>
<?php include("conexion.php") ?>
<?php include("login.php") ?>

	<nav class="navbar navbar-expand-md bg-navbar navbar-font">
		<div class="container">

			<div class="navbar-brand container01" href="#"><i class="fas fa-hamburger fa-1x" style="color: white; padding-top: 11px;"></i>
			<p>Food</p><p style="font-family: 'Permanent Marker', cursive;">CUT</p>
		</div>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav1">
				<span class="navbar-toggler-icon">
					<i style="color: white;" class="fas fa-bars"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="nav1">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#contacto">Contacto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Cerrar sesión</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<span class="navbar-text white-text font_span">
						¡Bienvenido:
						 <?php echo $_SESSION['nameP'];
						 ?>!
					</span>
					<li class="nav-item ">
						<a href=""><i class="fas fa-shopping-cart " style="color: white; padding-top: 11px; padding-left: 15px;"></i></a>
					</li>

				</ul>
		</div>

		</div>

	</nav>

	<div class="container">
		<br>
		<form class="" action="search.php" method="post" id="main_page">
		<div class="row">
			<div class="col-md-12">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<!--Indicators-->
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
					</ol>
					<!--Imagenes-->
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img src="imagenes/imagen1.jpg" class="img-responsive imagen2">
							<div class="carousel-caption bg-carousel">
								<h4 style="font-size: 28px;"><b>La comida que mas te gusta</b></h4>
								<p style="font-size: 22px">en un sólo click</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="imagenes/imagen2.jpg" class="img-responsive imagen2">
							<div class="carousel-caption bg-carousel">
								<h4 style="font-size: 28px;"><b>Comida para distintos paladares</b></h4>
								<p style="font-size: 22px">en un sólo lugar</p>
							</div>
						</div>
						<div class="carousel-item ">
							<img src="imagenes/imagen3.jpg" class="img-responsive imagen2">
							<div class="carousel-caption bg-carousel">
								<h4 style="font-size: 28px;"><b>Tus platillos favoritos</b></h4>
								<p style="font-size: 22px">más accesibles que nunca</p>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
		<br>
		<br>
		<div class="row">

				<div class="typeFood1 row mx-auto">
					<div class="col-sm-12 col-md-4">
						<image class="imagen3 mx-auto" src="imagenes/postre1.jpg">
					</div>
					<div class="font-desserts col-sm-12 col-md-8">
							<input type="submit" name="dessert" value="Postres" class="dessert-button">
							<p style="font-size: 25px;">Dulces o agridulces, tenemos los mejores postres para ti.</p>
					</div>

			</div>

		</div>
		<br>
		<div class="row">

				<div class="typeFood2 row mx-auto">
					<div class="col-sm-12 col-md-4">
						<image class="imagen3 mx-auto" src="imagenes/bebida.jpg">
					</div>
					<div class="font-drink col-sm-12 col-md-8">
							<input type="submit" name="drink" value="Bebidas" class="drink-button">
							<p style="font-size: 25px;">Para todos los gustos. Deléitate con nuestra variedad de bebidas.</p>
					</div>
				</div>


		</div>
		<br>
		<div class="row">
				<div class="typeFood3 row mx-auto">
					<div class="col-sm-12 col-md-4">
						<image class="imagen3 mx-auto" src="imagenes/comida3.jpg">
					</div>
					<div class="font-food col-sm-12 col-md-8">
						<input type="submit" name="food" value="Comida" class="food-button">
							<p style="font-size: 25px;">Disfruta de la gastronomía mundial, en un solo lugar.</p>
					</div>
				</div>
		</div>

	</form>
	</div>
	<br>
	<footer id="contacto" class="container-fluid bg-footer">


			<div class="container06">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fab fa-facebook fa-2x"></i></li></a>
					<a href="https://twitter.com/login?lang=es"><li><i class="fab fa-twitter fa-2x"></i></li></a>
					<a href="https://www.instagram.com/?hl=es-la"><li><i class="fab fa-instagram fa-2x"></i></li></a>


				</ul>
			</div>
			<div class=" mx-auto container">
				<p style="color:#F2F2F2;">CENTRO UNIVERSITARIO DE TONALÁ
				Campus CUTonalá Av. Nuevo Periférico No. 555 Ejido San José Tatepozco, C.P. 45425, Tonalá Jalisco, México</p>
			</div>
			<div class="container07 container">
				<p>&copy; 2019 Food</p><b style="font-family: 'Permanent Marker', cursive;">CUT</b>
			</div>


	</footer>




	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
