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
            $arrayagregado = array("id"=>"84",
                                   "order_date"=>"2022-07-30 00:00:00","shipped_date"=>"2022-07-31 00:00:00","ship_name"=>"TEXTO AGREGADO MANUALMENTE ARRAY");
             $rows[]=$arrayagregado;
             while($r = $result->fetch_assoc()) {
                $rows[] = $r;
              }
             

              

                 /*    $union = array_push($rows,$arrayagregado); */

            array_splice($rows,0,1);
              
              echo json_encode($rows);

        
        
        } else {
        echo "0 results";
        }
      ?>