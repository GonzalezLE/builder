<?php
require_once '../controller/Conexion.php';
//para mandar mensajes 
require_once '../controller/mensajes.php';

$material= $_POST['material'];
$proveedor= $_POST['proveedor'];
$cantidad =$_POST['cantidad'];

$adquisicion= $_POST['precio_adquisicion'];

$Pventa =$_POST['precio_venta'];

$fecha= $_POST['fecha'];



$sql="insert into adquisiciones VALUES(null,".$material.",".$proveedor.",'".$fecha."',".$cantidad.",".$adquisicion.",".$Pventa.");";
if(modifiac_db($connection,$sql)){
    Echo "<script>location.href='http://localhost/Construccion/pages/adquisicones.php'</script>";
}


?>