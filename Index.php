<!DOCTYPE html>
<html>
<head>
	<title>FoodCUT Inicio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" href="imagenes/favicon.ico">
 	<link rel="stylesheet" type="text/css" href="css/EstiloIndex.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto:300i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
<?php include("login.php") ?>
<header>
	<div class="container-fluid container01">
		<i class="fas fa-hamburger fa-1x" style="color: white; padding-top: 11px; margin-left: 38px;"></i>
		<p>Food</p><p style="font-family: 'Permanent Marker', cursive;">CUT</p>
	</div>
</header>
<div class="container-fluid">

	<section class="row">



		<aside class="col-xs-12 col-sm-4 col-md-4">

			<form class="container form-c" action="login.php"  method="POST" name="index">
				<?php if(isset($_SESSION['message'])) {?>

					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<?= $_SESSION['message']?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

				<?php session_unset();} ?>

				<div class="form-group container">
					<label style="font-family: 'Raleway', sans-serif; font-size:28px;">Inicia Sesión</label>
					<br>
					<br>
					<label class="sr-only" for="nombre">Nombre:</label>
					<input class="form-control" type="text" id="nombre" placeholder="Nombre" name="nameUser">
					<br>
					<label class="sr-only" for="contraseña">Contraseña:</label>
					<input class="form-control" type="password" id="contraseña" placeholder="Contraseña" name="pwd" maxlength="10" required>
					<br>
					<input type="submit" name="Enviar" class="btn btn-warning" value="Enviar">
				</div>
				<br>

				<div class="form-group container">
					<p style="font-family: 'Raleway', sans-serif; font-size:24px;">¿No tienes una cuenta aún?</p>
					<br>
					<a href="Register.php" style="font-size: 18px;">Ingresa Aqui</a>
				</div>

			</form>

		</aside>

		<article class="col-xs-12 col-sm-8 col-md-8">

			<div class="slider">

				<ul>

					<li><img class="imagen1" src="imagenes/sushi.jpg"></li>
					<li><img class="imagen1" src="imagenes/hamburguer.jpg"></li>
					<li><img class="imagen1" src="imagenes/sushi2.jpg"></li>
					<li><img class="imagen1" src="imagenes/pizza.jpg"></li>
				</ul>


			</div>
			<div class=" container02 container">

					<div class="container container03">
						¿Hambre?<br>
					</div>
					<div class="container container04">
						¡Prueba Food<b style="font-family: 'Permanent Marker', cursive;">CUT</b> y ordena ya!
					</div>

					<div class="container container05">
						Tu comida favorita <br>
						en la palma de tu mano <br><br>
						¡Contamos con una gran variedad de platillos para ti!
						<br>
					</div>


			</div>

		</article>


	</section>


</div>
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
