<?php


/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

  // Eliminamos la sesion
  session_start();
  session_destroy();

  header('location: ../login.html');

?>
