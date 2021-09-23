/*!
 * FarFarAway v1.0 (https://github.com/giusniyyel/farfaraway)
 * Copyright 2021 José Daniel Bautista Campos
 * Licensed under MIT (https://github.com/giusniyyel/farfaraway/blob/master/LICENSE)
 */

(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var pass1 = $('#password').val()
    var pass2 = $('#password2').val()

    $('.validate-form').on('submit',function(){

        if(pass1!=pass2){
            $('#password').addClass('pass-validate');
            $('#password2').addClass('pass-validate');   
        }

    });
    
})(jQuery);