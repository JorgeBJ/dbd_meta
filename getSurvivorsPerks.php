<?php
require("conexion.php");
    $conn = create_con();
    
     $query = "SELECT id , perk_name, photo, survivorPerkDesc from survivor_perks";
     $resultado=$conn->query($query);
     if ($resultado->num_rows > 0) {
        while($fila = $resultado->fetch_array())
        {
            $datos[] = $fila;
        }       
     echo json_encode($datos);
     
    }
?>