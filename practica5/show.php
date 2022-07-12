<?php 
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

include "conexion.php"; 
?>
<?php
        $sql = "SELECT `id`, `order_date`, `shipped_date`, `ship_name`
                FROM `orders`
                ORDER BY id desc ";
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