<?php
require("conexion.php");
    $conn = create_con();
    $id = $_GET['id'];
     $query = "SELECT b.build_name, P.logo FROM killer_build B inner join killer_perks P on perk1_Id = P.id or perk2_Id = P.id or perk3_Id = P.id or perk4_Id = P.id where B.killer_id =".$id;
     ;
     $resultado=$conn->query($query);
     if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_array())
        {
            $datos[] = $fila;
        }       
     echo json_encode($datos);
     
    }
?>