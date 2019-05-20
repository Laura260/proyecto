<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/EstiloIndex.css">
	<link rel="icon" href="imagenes/favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Didact+Gothic" rel="stylesheet">
</head>
<body>
	<?php include("registrar.php") ?>

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
						<a class=" nav-link active" href="">Registro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">Iniciar sesión</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contacto">Contacto</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<span class="navbar-text white-text">
						Nombre
					</span>
					<li class="nav-item ">
						<a href=""><i class="fas fa-shopping-cart " style="color: white; padding-top: 11px; padding-left: 15px;"></i></a>
					</li>

				</ul>
		</div>

		</div>

	</nav>


	<div class="container-fluid">

		<div class="row">


			<form id="register_form" class="bg-form mx-auto col-xs-12 col-sm-5 col-md-5 form-c" action="registrar.php" method="POST" onsubmit="return validate()">
				<?php if(isset($_SESSION['message'])) {?>

					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<?= $_SESSION['message']?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

				<?php session_unset();} ?>
				<div class="form-group">
					<label style="font-family: 'Didact Gothic', sans-serif; font-size: 28px;">Registro</label><br>
				</div>
				<div class="form-group">
					<input class="form-control"type="text" id="nombreUsuario" placeholder="Nombre de Usuario" name="user_name" maxlength="10"  required>

					<br>
					<input class="form-control"type="password" id="contraseña" placeholder="Contraseña" name="password" maxlength="10" onkeypress="return validatePassword(event)"required>
					<br>
					<input class="form-control"type="password" id="contraseña2" placeholder="Confirmar Contraseña" name="password2" maxlength="10" onkeypress="return validatePassword(event)" required>

				</div>
				<div class="form-group">
					<label style="font-family: 'Didact Gothic', sans-serif; font-size: 24px;">Datos Personales</label><br>
					<input class="form-control"type="text" id="nombre" placeholder="Nombre" name="name" maxlength="50" required>

					<br>
					<input class="form-control"type="text" id="apellidoP" placeholder="Apellido Paterno" name="lastname1" maxlength="50" required >

					<br>
					<input class="form-control"type="text" id="apellidoM" placeholder="Apellido Materno" name="lastname2" maxlength="50"  required>

					<br>
					<input class="form-control"type="text" id="domicilio" placeholder="Domicilio" name="address" maxlength="70" required >

					<br>
					<input class="form-control"type="text" id="correo" placeholder="Correo Electrónico" name="email" maxlength="50"  required>
					<br>
					<label for="option" style="font-family: 'Didact Gothic', sans-serif; font-size: 22px;">Selecciona método de pago</label>
					<select class="form-control" id="option" name="pay">
						<option>Efectivo</option>
						<option>Tarjeta Crédito/Débito</option>
						<option>Paypal</option>
						<option>Puntos</option>

					</select>
					<br>
					<input type="submit" name="registro" class="btn btn-warning" value="Registrar">
				</div>

			</form>
		</div>

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
	<script src="js/checking.js"></script>
</body>
</html>
