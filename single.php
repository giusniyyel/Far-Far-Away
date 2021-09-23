/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

<?php 

require 'conn.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}

if (empty($id_articulo)) {
	header('Location: home.php');
}

$post = obtener_post_por_id($conexion, $id_articulo);

if (!$post) {
	header('Location: home.php');
}

$post = $post[0];

require 'views/single.view.php';

?>