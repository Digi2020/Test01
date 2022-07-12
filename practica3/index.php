<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
<?php include "conexion.php"; ?>
</head>
<body>

<div class="container" align="center">
  <h2>Practica 3</h2>
  <hr>
  <form action="" id="frm" method="POST">
  <label for="">Seleccione Proveedor</label>
  <select name="proveedor" id="select" class="form-control">
    <option>Seleccione su Proveedor</option>
  <?php
        $sql = "SELECT  suppliers.id as id, suppliers.company as Proveedor
        FROM suppliers ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        ?>
        <option value="<?php echo $row["Proveedor"]?>"><?php echo $row["Proveedor"]?></option>

        <?php
            }
        } else {
        echo "0 results";
        }
      ?>
  </select>
  </form>
           
  <table class="table">
    <thead>
      <tr>
        <th>Codigo Producto</th>
        <th>Nombre Producto</th>
        <th>Proveedor</th>
      </tr>
    </thead>
    <tbody id="cuerpo">
        
     
    </tbody>
  </table>
</div>

</body>
</html>
