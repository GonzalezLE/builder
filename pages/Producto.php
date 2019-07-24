<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productos</title>
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
<body>
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
                <h1 onclick="">Productos</h1>
                <form method="POST" enctype="multipart/form-data" action="../controller/Producto.php">
                    <div class="form-group">
                        Archivo: <input name="fichero" class="form-control" type="file"> 
                        <!--<input type="file" name="img" accept="image/*"  class="form-control"/>-->
                    </div>
                    <button class="btn btn-info"> Enviar</button>
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