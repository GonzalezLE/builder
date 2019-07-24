<?php
    require_once '../../controller/Conexion.php';
    $query="SELECT * FROM Duenio";
    $acentos = $connection->query("SET NAMES 'utf8'");
    $res=$connection->query($query);
    if($res->num_rows>0){
        //fetch_assoc()
        //fetch_object()
        while($row = $res->fetch_assoc()){
            $array[] = $row;
        }
    }
    echo json_encode($array);
?>