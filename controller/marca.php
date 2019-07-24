<?php
    require_once '../controller/Conexion.php';
    //para mandar mensajes 
    require_once '../controller/mensajes.php';
    $M = $_POST['marca'];
    
    ///echo $Umedidad;
    $sql="insert into marca VALUES(null,'".$M."');";
    if(modifiac_db($connection,$sql)){
        Echo "<script>location.href='http://localhost/Construccion/pages/marca.php'</script>";
    }
    
?>