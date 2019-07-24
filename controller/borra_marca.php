<?php
    require_once '../controller/Conexion.php';
    $borra=$_POST['borra'];
    if($borra!=""){
        $sql="DELETE FROM marca WHERE marca.id_marca=".$borra."";
        $res=mysqli_query($connection,$sql);
        if($res){
            mysqli_close($connection);
            Echo "<script>location.href='http://localhost/Construccion/pages/marca.php'</script>";
        }
    }

?>