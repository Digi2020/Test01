<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>

</head>
<body>

<div class="container" align="center">
  <h2>Practica 4</h2>
  <hr>
  <form action="" id="frm" method="POST">
  <label for="">Seleccione Importe</label>
  <select name="creditoId " id="select" class="form-control">
    <option>Seleccione su Proveedor</option>

  </select>
  </form>
           
  <table class="table">
    <thead>
      <tr>
        <th>CreditoId</th>
        <th>CobroId</th>
        <th>Importe</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody id="cuerpo">
        
     
    </tbody>
  </table>
</div>

</body>
</html>
