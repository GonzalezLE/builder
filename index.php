<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/Icono.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 4.3.1 -->
    <link rel="stylesheet" type="text/css" href="css/framework/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/framework/bootstrap.min.css">
    <!-- Font Roboto by Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin-ext" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--Estilos de los toast--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="css/propios/estilos.css">
</head>
<body>
    <!--#menu-->
    <?php
        require_once 'view/menuIndex.php';
        echo $menu;
    ?>
    <!--header--->
    <?php
        require_once 'view/headerIndex.php';
        echo $header;
    ?>
    <!-- sobre este div se va a trabajar -->
    <section>
            <div class="content">
                <div class="box-body">
                    <h1 onclick="">Título del Encabezado</h1>
                    <!--<table class="table table-bordered" >
                        <tr>
                            <td>Celda 1</td>
                            <td>Celda 2</td>
                            <td>Celda 3</td>
                            <td>Celda 3</td>
                        </tr>
                        <tr>
                            <td>Celda 4</td>
                            <td>Celda 5</td>
                            <td>Celda 6</td>
                            <td>Celda 6</td>
                        </tr>
                        <tr>
                            <td>Celda 1</td>
                            <td>Celda 2</td>
                            <td>Celda 3</td>
                            <td>Celda 3</td>
                        </tr>
                        <tr>
                            <td>Celda 4</td>
                            <td>Celda 5</td>
                            <td>Celda 6</td>
                            <td>Celda 6</td>
                        </tr>
                    </table>-->
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Textbox 1</label>
                            <input type="text" class="form-control" placeholder="Textbox 1">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Textbox 2</label>
                        <input type="text" class="form-control" placeholder="Textbox 2">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Textbox 3</label>
                            <input type="text" class="form-control" placeholder="Textbox 3">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Textbox 4</label>
                            <input type="text" class="form-control" placeholder="Textbox 4">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Textbox 5</label>
                            <input type="text" class="form-control" placeholder="Textbox 5">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Textbox 6</label>
                            <input type="text" class="form-control" placeholder="Textbox 6">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-success">Botón</button>
                        </div>
                        </div>
                </div>
            </div>
        </section>
    <!--footer--->
    <?php
        require_once 'view/footer.php';
        echo $footer;
    ?>

    <!-- Jquery 3.3.1 -->
    <script src="js/framework/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="js/framework/bootstrap.js"></script>    
    <script src="js/framework/bootstrap.min.js"></script>
    <!--Script Propios-->
    <script src="js/propios/main.js"></script>
    
    <!--Toast--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>