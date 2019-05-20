<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página de Revisión de Orden</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/EstiloIndex.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  </head>
  <body>
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
  						<?php  if(isset($_SESSION)){?>
  						 <?php echo $_SESSION['nameP'];
  					 }   ?>!
  					</span>

  				</ul>
  		</div>

  		</div>

  	</nav>

    <script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <script src="js/checking.js"></script>
  </body>
</html>
