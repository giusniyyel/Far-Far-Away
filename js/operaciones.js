/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

$(".login-form").on("submit", function () {
  // Traemos los datos de los inputs
  var email = $("#email").val();
  var password = $("#password").val();

  // Envio de datos mediante Ajax
  $.ajax({
    method: "POST",
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: "../controller/loginController.php",
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: { email_php: email, password_php: password },
    // Esta funcion se ejecuta antes de enviar la información al archivo indicado en el parametro url

    beforeSend: function () {
      // Mostramos el div con el id load mientras se espera una respuesta del servidor (el archivo solicitado en el parametro url)
      $("#load").show();
    },

    // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    success: function (res) {
      // Lo primero es ocultar el load, ya que recibimos la respuesta del servidor
      $("#load").hide();

      // Ahora validamos la respuesta de php, si es error_1 algun campo esta vacio de lo contrario todo salio bien y redireccionaremos a donde diga php
      if (res == "error_1") {
        /*
        Para usar sweetalert es muy sencillo, has de cuenta que haces un alert
        solo que esta ves enviaras 3 parametros separados por comas, el primero
        es el titulo de la alerta, el segundo es la descripcion y el tercero es el tipo de alerta
        en el momento conozco tres tipos, entonces puedes variar entre success: Muestra animación de un check,
        warning: muestra icono de advertencia amarillo y error: muestra una animacion con una X muy chula :v
        */
        swal("Error", "Por favor ingrese todos los campos", "error");
      } else if (res == "error_2") {
        // Recuerda que si no necesitas validar si es un email puedes eliminar el if de la linea 34
        swal("Error", "Por favor ingrese un email valido", "warning");
      } else if (res == "error_3") {
        swal(
          "Error",
          "El usuario y contraseña que ingresaste es incorrecto",
          "error"
        );
      } else {
        // Redireccionamos a la página que diga corresponda el usuario
        window.location.href = res;
      }
    },
  });
});

$("#register").click(function () {
  var form = $("#formulario_register").serialize();

  $.ajax({
    method: "POST",
    url: "../controller/registroController.php",
    data: form,
    beforeSend: function () {
      $("#load").show();
    },
    success: function (res) {
      $("#load").hide();

      if (res == "error_1") {
        swal(
          "Error",
          "Campos obligatorios, por favor llena el email y las claves",
          "warning"
        );
      } else if (res == "error_2") {
        swal(
          "Error",
          "Las claves deben ser iguales, por favor intentalo de nuevo",
          "error"
        );
      } else if (res == "error_3") {
        swal(
          "Error",
          "El correo que ingresaste ya se encuentra registrado",
          "error"
        );
      } else if (res == "error_4") {
        swal("Error", "Por favor ingresa un correo valido", "warning");
      } else {
        window.location.href = res;
      }
    },
  });
});
