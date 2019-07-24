<?php
require_once '../controller/Conexion.php';
$Nmodifica= $_POST["modifica"];
$id= $_POST["id"];
if($Nmodifica!=""){
    $sql="UPDATE marca SET nombre = '".$Nmodifica."' WHERE marca.id_marca = ".$id.";";
    $res=mysqli_query($connection,$sql);
    if($res){
        mysqli_close($connection);
        Echo "<script>location.href='http://localhost/Construccion/pages/marca.php'</script>";
    }
}
?>