/*Funcion para detectar cuando el usuario baje el scroll*/
$(document).ready(function(){
    $(window).scroll(function(){
         /*Dtectar cuando se va a utilizar el scroll y cuando no*/
        if($(this).scrollTop() > 0){
            $('header').addClass('header2');
        } else {
            $('header').removeClass('header2');
        }
    });
});