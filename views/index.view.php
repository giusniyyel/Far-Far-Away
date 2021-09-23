<?php require 'header.php' ?>

<?php
/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */
?>
<!--Slider-->
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img  height="700" src="images/slider/reyleon.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>El rey leon</h5>
          <p>Acompaña a el rey prodigo a regresar al trono.</p>
          <a href="single.php?id=2" class="btn btn-primary">Ver Ahora</a>
        </div>
      </div>
      <div class="carousel-item active">
        <img height="700" src="images/slider/header_moana.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Moana</h5>
          <p>Acompaña a esta joven hawaiana en su aventura.</p>
          <a href="single.php?id=1" class="btn btn-primary">Ver Ahora</a>
        </div>
      </div>
      <div class="carousel-item">
        <img height="700" src="images/slider/BeautyandtheBeast-header.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>La bella y la bestia</h5>
          <p>Conoce la historia de bella, una joven en busca del amor.</p>
          <a href="single.php?id=6" class="btn btn-primary">Ver Ahora</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--Slider end-->

	<div class="container">
		<br>
		<div class="row">
			<br>
		<?php foreach($posts as $post): ?>

			<div class="col-sm">
				<div class="card">
					<a href="single.php?id=<?php echo $post['id']; ?>">
						<img height="400" src="images/movies/<?php echo $post['thumb']; ?>" alt="<?php echo $post['nombre'] ?>" class="card-img-top">
					</a>
					<div class="card-body">
						<h5 class="card-title"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['nombre'] ?></a></h5>
						<p class="card-text"><?php echo utf8_decode($post['sinopsis']) ?></p>
						<a href="single.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Reproducir</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	
	<br>

	<script type="text/javascript">
		$('.carousel').carousel({
  			interval: 1
		})
	</script>

<?php require 'footer.php'; ?>