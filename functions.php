<?php

/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

function conexion($bd_config){
	try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], '');
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;		
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);

	$datos = stripslashes($datos);

	$datos = htmlspecialchars($datos);
	return $datos;
}

function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM movies WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? (pagina_actual() * $post_por_pagina - $post_por_pagina) : 0;

	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM movies LIMIT {$inicio}, {$post_por_pagina}");

	$sentencia->execute();
	return $sentencia->fetchAll();
}

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function fecha($fecha){
	date_default_timezone_set('America/Mexico_City');
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = $dia . ' de ' . $meses[$mes] . ' del ' . $year;
	return $fecha;
}

?>