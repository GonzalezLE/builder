<?php
require_once '../controller/Conexion.php';
$Nmodifica= $_POST["modifica"];
$id= $_POST["id"];
if($Nmodifica!=""){
    $sql="UPDATE unidad_medida SET nombre = '".$Nmodifica."' WHERE unidad_medida.id_medida = ".$id.";";
    $res=mysqli_query($connection,$sql);
    if($res){
        mysqli_close($connection);
        Echo "<script>location.href='http://localhost/Construccion/pages/Unidad_dedida.php'</script>";
    }
}
?>