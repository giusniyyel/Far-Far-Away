<?php

/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

require 'conn.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

if(!$posts){
	header('Location: error.php');
}

require 'views/index.view.php';

?>