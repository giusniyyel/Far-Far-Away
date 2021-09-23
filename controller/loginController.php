<?php

/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

  # Leemos las variables enviadas mediante Ajax
  $email = $_POST['email_php'];
  $password = $_POST['password_php'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($email) || empty($password)){

    # mostramos la respuesta de php (echo)
    echo 'error_1';

  }else{

    /*
       Si tu usuario require de una validacion de email,
       es decir que contenga @ y .com, .es etc.
       habilita las lineas 21, 32, 33 y 34
    */

    // if(filter_var($user, FILTER_VALIDATE_EMAIL)){

    # Incluimos la clase usuario
    require_once('../model/usuario.php');

    # Creamos un objeto de la clase usuario
    $usuario = new Usuario();

    # Llamamos al metodo login para validar los datos en la base de datos
    $usuario -> login($email, $password);

    /*}else{
      echo 'error_2';
    }*/

  }


?>
