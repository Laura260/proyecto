<!DOCTYPE html>
<html>
<head>
	<title>Postres</title>
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
						<a class="nav-link" href="main_page.php">Página Principal</a>
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
						<?php  if (isset($_SESSION)) {
    echo $_SESSION['nameP'];
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
				<form class="top-form form-c" action="index.html" method="post">
				<br>
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="food-items">
							<div class="img-item-container">
								<img class="imagen4" src="imagenes/helado.jpg">
								<div class="bg-item-food">
									<p class="font-items">Helado</p>
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
								<img class="imagen4" src="imagenes/cheesecake.jpg">
								<div class="bg-item-food">
									<p class="font-items">Cheesecake</p>
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
								<img class="imagen4" src="imagenes/pastel-manzana.jpg">
								<div class="bg-item-food">
									<p class="font-items">Pastel de Manzana</p>
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
								<img class="imagen4" src="imagenes/crepas.jpg">
								<div class="bg-item-food">
									<p class="font-items">Crepas</p>
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
								<img class="imagen4" src="imagenes/red-velvet.jpg">
								<div class="bg-item-food">
									<p class="font-items">Red Velvet</p>
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
								<img class="imagen4" src="imagenes/tiramisu.jpg">
								<div class="bg-item-food">
									<p class="font-items">Tiramisu</p>
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
								<img class="imagen4" src="imagenes/flan.jpg">
								<div class="bg-item-food">
									<p class="font-items">Flan</p>
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
								<img class="imagen4" src="imagenes/muffins.jpg">
								<div class="bg-item-food">
									<p class="font-items">Muffins</p>
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
								<img class="imagen4" src="imagenes/brownie.jpg">
								<div class="bg-item-food">
									<p class="font-items">Brownie</p>
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
</body>
</html>
