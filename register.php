<!DOCTYPE html>
<!--
 FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 Copyright 2021 José Daniel Bautista Campos
 Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 -->
<html>
<head>
	<title>Registro &mdash; FarFarAway</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<!-- Navigation -->
		<nav class="navbar navbar-expand-md js-sticky-header navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html" style="font-family: Raleway-Black;font-size: 30px;color: #333333;text-transform: uppercase;">FarFar<span>Away</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link form-btn text-white" href="login.html">Iniciar Sesión</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	
	<!--- Aquí va la magia de disney -->
	<div class="container-login">
			<div class="wrap-register p-l-50 p-r-50 p-t-77 p-b-30">
				<span class="form-title p-b-55">
						Registro
				</span>
				<?php
					$name = isset($_POST['name']) ? $_POST['name'] : null ;
					$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null ;
					$email = isset($_POST['email']) ? $_POST['email'] : null ;

					$host="127.0.0.1";
					$user="root";
					$pass="";
					$db="farfaraway";
					$tbl_name="usuarios";

					$enlace= new mysqli($host,$user,$pass,$db);

					if($enlace->connect_error){
						die("La conexión falló: " . $enlace->connect_error);
					}

					$buscarUsuario = "SELECT * FROM $tbl_name WHERE email = '$email' ";

					$result = $enlace->query($buscarUsuario);

					$count = mysqli_num_rows($result);

					if($count == 1){
						echo "<div align='center'>" . "<br/>". "<h2 align='center'>El correo ya está registrado.</h2>" . "<br />";
				 		echo "<a class='txt1 bo1 hov1' href='register.html'>¿Desea volver a intentarlo?</a>" . "</div>" ;
					}else{
						$password = isset($_POST['password']) ? $_POST['password'] : null ;

						$hash = password_hash($password, PASSWORD_BCRYPT);

						$query = "INSERT INTO usuarios (name,apellido,email,password) VALUES ('$name','$lastname','$email','$hash')";

						if($enlace->query($query)=== TRUE){
							echo "<br/>" . "<div align='center'>" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
							echo "<h4>" . "Bienvenido: " . $name . "</h4>" . "\n\n";
							echo "</div>";
						}else{
							echo "Error al crear el usuario." . $query . "<br>" . $enlace->error;
						}
					}
					mysqli_close($enlace);
				?>

			</div>
	</div>
	<!--- Aquí va la magia de disney -->
	
	<!--- Footer -->
	   <footer class="site-footer">
      		<div class="container">
        		<div class="row mt-1 text-center">
          			<div class="col-md-12">
            			<div class="border-top pt-5">
            				<p>
        						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | FarFarAway <i class="icon-heart" aria-hidden="true"></i>
      						</p>
            			</div>
          			</div>
          
        		</div>
      		</div>
    	</footer>

	</div>


	<!--===============================================================================================-->	
	<script src="js/jquery.js"></script>
	<!--===============================================================================================-->
</body>
</html>