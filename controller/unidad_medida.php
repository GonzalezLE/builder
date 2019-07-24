<?php
    require_once '../controller/Conexion.php';
    $Umedidad = $_POST['unidad'];
    ///echo $Umedidad;

    $sql="insert into unidad_medida VALUES(null,'".$Umedidad."');";
    /*if($connection->query($sql)){
    echo "insert correcto";
    }*/
    $res=mysqli_query($connection,$sql);
    if($res){
        Echo "<script>location.href='http://localhost/Construccion/pages/Unidad_dedida.php'</script>";
    }else{
        echo 'error';
    }

    mysqli_close($connection);
    

   
?>