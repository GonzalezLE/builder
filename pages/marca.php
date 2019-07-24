<!DOCTYPE html>
<html lang="en">
<head>
    <title>Marcas</title>
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
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="../plugins/DataTables/datatables.min.css"/>
    <!-- Estilos -->
    <link rel="stylesheet" href="../css/propios/estilos.css">
    <!--Push-->
    <script src="../js/framework/push.min.js"></script> 
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
                    <h1>Listado de Marcas</h1>
                    <form class="form-row" method="post" action="../controller/marca.php">
                        <div class="form-group col-md-10">
                            <input type="text" name="marca" id="marca"  class="form-control" placeholder="Marca" />
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-info" >Guardar <i class="far fa-save"></i></button>
                        </div>
                    </form>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Marca</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../controller/Conexion.php';

                            $sql="SELECT * FROM marca";

                            $res=$connection->query($sql);
                            if($res->num_rows>0){
                                while($row = $res->fetch_assoc()){
                                    echo '
                                    <tr> 
                                        <th>
                                        '.$row["nombre"].' 
                                        </th>
                                        <th>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal'.$row["id_marca"].'">
                                            <i class="fas fa-pen-square"></i>
                                        </button>
                                        </th>
                                        <th>
                                            <form method="post" action="../controller/borra_marca.php">
                                                <input type="hidden" name="borra" id="borra" value='.$row["id_marca"].'>
                                                    <button class="btn btn-info">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                                </button>
                                            </form>    
                                        </th>
                                    </tr>';

                                    $modal='
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal'.$row["id_marca"].'" tabindex="-1" role="dialog" aria-            labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="post" action="../controller/modifica_marca.php">
                                                    <div class="form-group">
                                                        <label for="">Marca</label>
                                                        <input type="text" class="form-control" name="modifica" id="modifica" value="'.$row["nombre"].'" />
                                                    </div>
                                                    <input type="hidden" name="id" id="id" value='.$row["id_marca"].'>
                                                    <button class="btn btn-info">
                                                    Modificar   <i class="fas fa-pen"></i>
                                                    </button>
                                                </form> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    echo $modal;


                                }
                            }
                            $connection

                            ?>
                        </tbody>
                    </table>
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
    <!--DataTables-->
    <script type="text/javascript" src="../plugins/DataTables/datatables.min.js"></script>
    <!--Script Propios-->
    <script src="../js/propios/main.js"></script>
    <!--Toast--->
    <script>
        Push.create("hola mundo",{
            body:"dsdsdsdsd",
            icon:"../img/correcto.png",
            timeout:4000
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>