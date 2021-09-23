<?php
/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión &mdash; FarFarAway</title>
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
			</div>
		</nav>
	
	<!--- Aquí va la magia de disney -->
	<div class="container-login">
			<div class="wrap-register p-l-50 p-r-50 p-t-77 p-b-30">
				<span class="form-title p-b-55">
						Inicio de Sesión
				</span>
				<?php
					// Connection info. file
					include 'conn.php';	
					
					// Connection variables
					$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					
					// data sent from form login.html 
					$email = $_POST['email']; 
					$password = $_POST['password'];
					
					// Query sent to database
					$result = mysqli_query($conn, "SELECT Email, Password, Name FROM usuarios WHERE Email = '$email'");
					
					// Variable $row hold the result of the query
					$row = mysqli_fetch_assoc($result);
					
					// Variable $hash hold the password hash on database
					$hash = $row['Password'];
					
					/* 
					password_Verify() function verify if the password entered by the user
					match the password hash on the database. If everything is OK the session
					is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
					*/
					if (password_verify($_POST['password'], $hash)) {	
						
						$_SESSION['loggedin'] = true;
						$_SESSION['name'] = $row['Name'];
						$_SESSION['start'] = time();
						$_SESSION['expire'] = $_SESSION['start'] + (25 * 60) ;						
						
						header('Location: home.php');					
					} else {
						echo "<div align='center' class='alert alert-danger mt-4' role='alert'>El correo o contraseña son incorrectos!
						<p><a href='login.html'><strong>Por favor, intentelo de nuevo!</strong></a></p></div>";			
					}	
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