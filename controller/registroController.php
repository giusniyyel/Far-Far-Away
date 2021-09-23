<?php

/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

  $name   = $_POST['name'];
  $lastname   = $_POST['lastname'];
  $email  = $_POST['email'];
  $password  = $_POST['password'];
  $password2 = $_POST['password2'];

  if(empty($email) || empty($password) || empty($password2))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($password == $password2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../model/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $lastname, $email, $password2);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
