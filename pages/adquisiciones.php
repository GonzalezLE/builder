<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nueva Compra</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../img/Icono.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 4.3.1 -->
    <link rel="stylesheet" type="text/css" href="../css/framework/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/framework/bootstrap.min.css">
    <!-- Font Roboto by Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin-ext" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--Estilos de los toast--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="../css/propios/estilos.css">
</head>
<body onload="alturaMenu();">
    <!--#menu-->
    <?php
        require_once '../view/menu.php';
        echo $menu;
    ?>
    <!--header--->
    <?php
        require_once '../view/header.php';
        echo $header;
    ?>
    <!-- sobre este div se va a trabajar -->
    <section>
        <div class="content">
            <div class="box-body">
                <h1 onclick="">Encabezado</h1>
                <form method="POST"  action="../controller/adquisiciones.php">
                    <div class="form-group">
                        <label for="material">Seleccional Producto</label>
                        <select name="material" id="material" class="form-control">
                            <?php
                                require_once '../controller/Conexion.php';
                                $sql="SELECT * FROM materiales";
                                $res=$connection->query($sql);
                                if($res->num_rows>0){
                                    while($row = $res->fetch_assoc()){
                                        echo '<option value="'.$row["id_material"].'">'.$row["descripcion"].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <!--materiales --->
                    <div class="form-group">
                        <label for="proveedor">Seleccionar proveedor</label>
                        <select name="proveedor" id="proveedor" class="form-control">
                            <?php
                                $sql="SELECT * FROM proveedores";
                                $res=$connection->query($sql);
                                if($res->num_rows>0){
                                    while($row = $res->fetch_assoc()){
                                        echo '<option value="'.$row["id_proveedor"].'">'.$row["nombre"].'</option>';
                                    }
                                }

                            ?>
                        </select>

                    </div>

        

                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="cantidad" class="form-control"/>
                    </div>


                    <div class="form-group">
                        <label for="precio_adquisicion">Precio adquisición:</label>
                        <input type="number" name="precio_adquisicion" class="form-control"/>
                    </div>


                    <div class="form-group">
                        <label for="precio_venta">precio venta</label>
                        <input type="number" name="precio_venta"  class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="date" name="fecha"  class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--footer--->
    <?php
        require_once '../view/footer.php';
        echo $footer;
    ?> 
    
    <!-- Jquery 3.3.1 -->
    <script src="../js/framework/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="../js/framework/bootstrap.js"></script>    
    <script src="../js/framework/bootstrap.min.js"></script>
    <!--Script Propios-->
    <script src="../js/propios/main.js"></script>
</body>
</html>




