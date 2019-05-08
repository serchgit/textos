<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CNT</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/alertas.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <link href="css/circletimer.css" rel="stylesheet">
  </head>
  <style>
  
  </style>
  <body>
    <a href="index.html" class="btn btn-danger home"><i class="fa fa-home fa-lg"></i></a>
    <section class="canto">
      <h1 class="display-4 tituloC text-center py-3">Lorem ipsum dolor sit amet.</h1>
      <div class=" container">
        <form action="" class="form-inline justify-content-center">
          <div class="form-inline mr-5 col-lg-6">
            <label for="" class="text-white mr-3">Nombre</label>
            <input type="text" class="form-control col-8" id="nombre">
          </div>
          <div class="form-inline ml-5">
            <label for="" class="text-white mr-3">Turno</label>
            <input type="number" class="form-control col-4" id="turno">
          </div>
          <button type="submit" class="btn btn-success" id="aceptar">aceptar</button>
        </form>
      </div>
      <div class="part d-flex mt-4">
        <div class="col-lg-6 d-flex flex-column align-items-center">
          <div class="col-lg-9">
            <div class="d-flex align-items-center  turno" id="turno1">
              <button class="btn btn-C mb-3 num1" data-T="Lorem ipsum dolor sit amet." data-N="Nombre 1" data-I="igl 1" data-L="Lugar 1">1</button>
              <input type="text" id="num1" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center  turno" id="turno2">
              <button class="btn btn-C mb-3 num2" data-T="lorem 2" data-N="Nombre 2" data-I="igl 2" data-L="Lorem ipsum dolor sit amet.">2</button>
              <input type="text" id="num2" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center  turno" id="turno3">
              <button class="btn btn-C mb-3 num3" data-T="tema" data-N="Nombre 3" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">3</button>
              <input type="text" id="num3" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center  turno" id="turno4">
              <button class="btn btn-C mb-3 num4" data-T="tema" data-N="Nombre 4" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">4</button>
              <input type="text" id="num4" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center  turno" id="turno5">
              <button class="btn btn-C mb-3 num5" data-T="tema" data-N="Nombre 5" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">5</button>
              <input type="text" id="num5" class="form-control ml-4 concur" readonly>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex flex-column align-items-center">
          <div class="col-lg-9">
            <div class="d-flex align-items-center turno" id="turno6">
              <button class="btn btn-C mb-3 num1" data-T="tema" data-N="Nombre 1" data-I="Nombre I 1" data-L="Lugar 1">6</button>
              <input type="text" id="num6" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center turno" id="turno7">
              <button class="btn btn-C mb-3 num2" data-T="tema" data-N="Nombre 2" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">7</button>
              <input type="text" id="num7" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center turno" id="turno8">
              <button class="btn btn-C mb-3 num3" data-T="tema" data-N="Nombre 3" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">8</button>
              <input type="text" id="num8" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center turno" id="turno9">
              <button class="btn btn-C mb-3 num4" data-T="tema" data-N="Nombre 4" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">9</button>
              <input type="text" id="num9" class="form-control ml-4 concur" readonly>
            </div>
            <div class="d-flex align-items-center turno" id="turno10">
              <button class="btn btn-C mb-3 num5" data-T="tema" data-N="Nombre 5" data-I="Lo que sea" data-L="Lorem ipsum dolor sit amet.">10</button>
              <input type="text" id="num10" class="form-control ml-4 concur" readonly>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--     <div class="modal-C">
      <div class="col-lg-8 pres">
        <h2 class="text-white mb-4">Nombre</h2>
        <h2 class="text-white mb-4">Lorem ipsum dolor sit amet.</h2>
        <h2 class="text-white mb-4">Lorem ipsum dolor sit amet.</h2>
        <h2 class="text-white mb-4">Tema:</h2>
      </div>
    </div> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alertas.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/circletimer.min.js"></script>
    <script>
      function modal(nombre,igl,lugar,tema){
        var modal = `<div class="modal-C">
                      <div class="col-lg-8 pres">
                        <h2 class="text-white mb-4 nombre">${nombre}</h2>
                        <h2 class="text-white mb-4 igl">${igl}</h2>
                        <h2 class="text-white mb-4 lugar">${lugar}</h2>
                        <h2 class="text-white mb-4 tema">tema: <br>${tema}</h2>
                      </div>
                      <div style="position:absolute;bottom:1rem;left:1rem;">
                        <button class="btn btn-outline-danger regresar">volver</button>
                      </div>
                    </div>`;

      $('body').append(modal);
      setTimeout(function(){
        $('.pres h2').css({'bottom':'0','opacity':'1'});
        $('.regresar').click(function(){
          $('.modal-C').remove();
        });
      },500);
      }
      $(document).ready(function() {
          
          
        $('form').submit(function(event) {
          var nombre = $('#nombre').val();
          var turno = $('#turno').val();
          event.preventDefault();
          console.log(turno);
          $('div[id="turno'+turno+'"]').css('opacity','1');
          $('div[id="turno'+turno+'"]').children('input').val(nombre);
          $('#nombre,#turno').val('');
        });


        var turno = $('.turno');
        $(turno).on('click', 'button', function(event) {
          event.preventDefault();
            var nombre = $(this).attr('data-N');
            var igl = $(this).attr('data-I');
            var tema = $(this).attr('data-T');
            var lugar = $(this).attr('data-L');
          modal(nombre,igl,tema,lugar);

        });
      });
      // alerta('Se guardo','correcto');
    </script>
  </body>
</html>