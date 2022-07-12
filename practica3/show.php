<?php 
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

include "conexion.php"; 
?>
<?php
        $sql = "SELECT products.product_code as Codigo_Producto, products.product_name as Nombre_Productos, suppliers.company as Proveedor
        FROM products, suppliers 
        WHERE products.supplier_ids = suppliers.id and suppliers.company = 'Supplier F'
        GROUP BY products.product_code;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while($r = $result->fetch_assoc()) {
                $rows[] = $r;
              }
        
              echo json_encode($rows);
        
        
        } else {
        echo "0 results";
        }
      ?>