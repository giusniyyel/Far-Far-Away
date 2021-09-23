/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

/* Destroy current user session */
<?php
session_start();
session_unset($_SESSION['email']);
session_destroy();

header('location: index.html');
?>