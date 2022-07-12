<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container" align="center">
  <h2>Practica 2</h2>
  <hr>

  <textarea name="" id="" cols="30" rows="10" class="form-control">
  SELECT products.product_code as Codigo_Producto, products.product_name as Nombre_Productos, SUM(products.standard_cost) as Suma_Costo_Estandar 
FROM products, suppliers 
WHERE products.supplier_ids = suppliers.id and suppliers.company = 'Supplier J'
GROUP BY products.product_code;
  </textarea>

</div>

</body>
</html>
