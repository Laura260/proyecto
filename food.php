<!DOCTYPE html>
<html>
<head>
	<title>Comida</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" href="imagenes/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/EstiloIndex.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<?php include("conexion.php") ?>
	<?php include("login.php") ?>

	<nav class="navbar navbar-expand-md bg-navbar navbar-font sticky">
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
						<a class="nav-link" href="#contacto">Página Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contacto">Contacto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Cerrar sesión</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<span class="navbar-text white-text">
						¡Bienvenido:
						<?php  if (isset($_SESSION)) {?>
						 <?php echo $_SESSION['nameP'];
                     }   ?>!
					</span>
					<li class="nav-item ">
						<a href=""><i class="fas fa-shopping-cart " style="color: white; padding-top: 11px; padding-left: 15px;"></i></a>
					</li>
				</ul>
		</div>
		</div>
	</nav>
	<div class="container content">
		<div class="row">
			<div class="col-md-12">
				<form class="form-c" name="form-food"action="" method="POST" target"_blank">
				<br>
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/pizza2.jpg">
								<div class="bg-item-food">
									<p class="font-items">Pizza</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle" onclick="decrementar()"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="item" class="form-control input-number" value="0" max="100" readonly>
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle btn-number" onclick="incrementar()"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/hamburguesa.jpg">
								<div class="bg-item-food">
									<p class="font-items">Hamburguesa</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/sushi3.jpg">
								<div class="bg-item-food">
									<p class="font-items">Sushi</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/comida3.jpg">
								<div class="bg-item-food">
									<p class="font-items">Tacos</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/kebab.jpg">
								<div class="bg-item-food">
									<p class="font-items">Kebab</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/hotdog.jpg">
								<div class="bg-item-food">
									<p class="font-items">Hotdog</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/pho.jpg">
								<div class="bg-item-food">
									<p class="font-items">Pho</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/flautas.jpg">
								<div class="bg-item-food">
									<p class="font-items">Flautas</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/paella.jpg">
								<div class="bg-item-food">
									<p class="font-items">Paella</p>
								</div>
							</div>
							<div class="container">
							<span>$100</span>
							</div>
							<div class="item-container">
								<div class="item-container-button">
									<div class="item-container1">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-minus icon_button"></i>
									</div>
									<div class="container container-price">
										 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
									</div>
									<div class="item-container2">
										<button type="button" class="btn btn-default btn-circle"><i class="fas fa-plus icon_button"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					</form>
			</div>
		</div>
	</div>

	<br>
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
	<script type="js/button.js"></script>
</body>
</html>
