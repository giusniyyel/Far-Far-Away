<?php

/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../view/admin/index.php');
  }else if($_SESSION['cargo'] == 2){
    header('location: ../view/user/index.php');
  }

 ?>
