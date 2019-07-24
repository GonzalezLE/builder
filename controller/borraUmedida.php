<?php
    require_once '../controller/Conexion.php';
    $borra=$_POST['borra'];
    if($borra!=""){
        $sql="DELETE FROM unidad_medida WHERE unidad_medida.id_medida=".$borra."";
        //echo $sql;
        if(modifiac_db($connection,$sql)){
            Echo "<script>location.href='http://localhost/Construccion/pages/Unidad_dedida.php'</script>";
        }
    }

?>
