<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container" align="center">
  <h2>Practica 1</h2>
  <hr>

  <textarea name="" id="" cols="30" rows="10" class="form-control">
  SELECT  concat_ws(' ,', employees.last_name, employees.first_name) as empleado, employees.email_address as Correo, orders.id as ID_Orden,  concat_ws(' ,', customers.last_name, customers.first_name) as cliente, orders.order_date as Fecha_Orden
  FROM orders, employees, customers 
  WHERE orders.employee_id = employees.id and orders.customer_id = customers.id and orders.order_date BETWEEN '2006-04-01 ' AND '2006-05-31'
  ORDER BY orders.order_date DESC;
  </textarea>

</div>

</body>
</html>
