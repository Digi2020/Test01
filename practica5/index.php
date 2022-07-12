<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker(
      { dateFormat: 'yy-mm-dd' }
    );
    $( "#datepicker2" ).datepicker(
      { dateFormat: 'yy-mm-dd' }
    );
  } );
  </script>
<?php include "conexion.php"; ?>
</head>
<body>

<div class="container" align="">
  <h2 align="center">Practica 5</h2>
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Agregar Nuevo</button>

  <hr>
 
           
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Fecha Orden</th>
        <th>Fecha de Envio</th>
        <th>Nombre del Barco</th>
      </tr>
    </thead>
    <tbody id="cuerpo">
        
     
    </tbody>
  </table>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar</h4>
      </div>
      <div class="modal-body">

        <form action="" id="frm" methos="POST">
          <label for="">Fecha Orden</label>
          <input type="text" class="form-control" name="fecha_orden" id="datepicker">
          <br>
          <label for="">Fecha Envio</label>
          <input type="text" class="form-control" name="fecha_envio" id="datepicker2">
          <br>
          <label for="">Nombre del Barco</label>
          <input type="text" class="form-control" name="barco" id="">
          <br>
          <div class="btn btn-primary guardar" id="guardar">Guardar</div>
        </form>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- ***** -->
</body>
</html>
