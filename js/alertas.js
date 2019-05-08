 $(document).ready(function(){

  var contenedor = '<div class="contenedorAlertas"></div>';
      $('body').append(contenedor);
 });
          // funcion en caso que las alertas se remuevan con el tiempo
 // setTimeout(function(){
 //  $('.contenedorAlertas').remove();
 // },20000);
function alerta(mensaje,clase) {
      if (clase){
          if (clase == 'correcto') {
            var correcta = '<div class="contNot">'+
                        '<div class="text-cont">';
           correcta += `<p>${mensaje}</p>`+
                        '</div>'+
                        '<span class="spanCorrecto icon-check"></span>'+
                        '</div>';
            $('.contenedorAlertas').append(correcta);
            $('.spanCorrecto').addClass('icon-check');
            $('.contNot').animate({right:'2rem'},200);
            setTimeout(function(){
                // en caso de querer que las alertas desaparezcan solas
              // $('.contNot').fadeOut(5000);
            },3000);
            if($(window).width()<700){$('.contNot').animate({right:'0'},200);}
          }else if(clase == 'error'){
            var error = '<div class="contError">'+
                        '<div class="text-cont">';
           error += `<p>${mensaje}</p>`+
                        '</div>'+
                        '<span class="spanError"></span>'+
                        '</div>';
            $('.contenedorAlertas').append(error);
            $('.spanError').addClass('icon-error');
            $('.contError').animate({right:'2rem'},200);
            setTimeout(function(){
              // $('.contError').fadeOut(5000);
            },3000);
            if($(window).width()<700){$('.contError').animate({right:'0'},200);}
          }else if (clase == 'info'){
            var info = '<div class="contInfo">'+
                        '<div class="text-cont">';
           info += `<p>${mensaje}</p>`+
                        '</div>'+
                        '<span class="spanInfo"></span>'+
                        '</div>';
            $('.contenedorAlertas').append(info);
            $('.spanInfo').addClass('icon-info');
            $('.contInfo').animate({right:'2rem'},200);
            setTimeout(function(){
              // $('.contInfo').fadeOut(5000);
            },3000);
            if($(window).width()<700){$('.contInfo').animate({right:'0'},200);}
          }else if (clase == 'advertencia'){
            var precaucion = '<div class="contPrecaucion">'+
                        '<div class="text-cont">';
           precaucion += `<p>${mensaje}</p>`+
                        '</div>'+
                        '<span class="icon-precaucion"></span>'+
                        '</div>';
            $('.contenedorAlertas').append(precaucion);
            $('.icon-precaucion').addClass('icon-warning');
            $('.contPrecaucion').animate({right:'2rem'},200);
            setTimeout(function(){
              // $('.contPrecaucion').fadeOut(5000);
            },3000);
            if($(window).width()<700){$('.contPrecaucion').animate({right:'0'},200);}
          }else if(clase == 'comentario'){
            var comentario = '<div class="contComentario">'+
                        '<div class="text-cont">';
           comentario += `<p>${mensaje}</p>`+
                        '</div>'+
                        '<span class="icon-coment"></span>'+
                        '</div>';
            $('.contenedorAlertas').append(comentario);
            $('.icon-coment').addClass('icon-notification');
            $('.contComentario').animate({right:'2rem'},200);
            setTimeout(function(){
              // $('.contComentario').fadeOut(5000);
            },3000);
            if($(window).width()<700){$('.contComentario').animate({right:'0'},200);}
          }
      }else{
        var correcta = '<div class="contNot">'+
                        '<div class="text-cont">';
           correcta += `<p>${mensaje}</p>`+
                        '</div>'+
                        '<span class="spanCorrecto icon-check"></span>'+
                        '</div>';
            $('.contenedorAlertas').append(correcta);
            $('.spanCorrecto').addClass('icon-check');
            $('.contNot').animate({right:'2rem'},200);
            setTimeout(function(){
              // $('.contNot').fadeOut(5000);
            },3000);
            if($(window).width()<700){$('.contNot').animate({right:'0'},200);}
      }
            // en caso de que las alertas se quiten al hacer click sobre ellas
      $('.contenedorAlertas div').css('cursor','pointer');
      $('.contenedorAlertas').on('click','div',function(){
        $(this).remove();
        // if ($('.contenedorAlertas').is(':empty')) {
        //   $('.contenedorAlertas').remove();
        // }
      });
  }