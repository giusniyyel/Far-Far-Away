<?php require 'header.php' ?>

<?php
/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */
?>

	<br>
	<br>

	<div id="movie" align="center" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	    	<h1 class="mt-0">Estás viendo: <?php echo $post['nombre'] ?></h1>
	        <video src="movies/<?php echo $post['movie']; ?>" controls="controls"></video>
	    </div>
	  </div>
	</div>

	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class="card">
			<div class="card-header">
    			Información
  			</div>
			<div class="card-body">
			<div class="media position-relative" align="center">
				<img height="400" src="images/movies/<?php echo $post['thumb']; ?>" alt="<?php echo $post['nombre'] ?>" class="mr-3">
			  	<div class="media-body">
			    	<h5 align="left" class="mt-0"><?php echo $post['nombre'] ?></h5>
			    	<p align="left"><strong>Año de lanzamiento: </strong><?php echo $post['year'] ?></p>
			    	<strong>Descripción: </strong>
			    	<p align="left"><?php echo utf8_decode($post['descripcion']); ?></p>
			    	<p align="left"><strong>Género: </strong><?php echo $post['genero'] ?></p>
			    	<p align="left"><strong>Director/es: </strong><?php echo $post['director'] ?></p>
			  	</div>
			</div>
			</div>
			</div>			
		</div>
	</div>

	<br>
	<br>

<?php require 'footer.php'; ?>