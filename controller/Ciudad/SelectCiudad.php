<?php
    require_once '../../controller/Conexion.php';
    $query="SELECT id_ciudad as idCiudad ,ciudad.nombre as nombreCiudad, estado.id_estado,estado.nombre as nombreEstado from Ciudad join estado on estado.id_estado=ciudad.id_estado";
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