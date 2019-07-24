<html>
    <head>
        <title>Nueva Obra</title>
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
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="../plugins/DatePicker/datepicker3.css">
        <!-- SweetAlert -->
        <link rel="stylesheet" href="../plugins/New_SweetAlert/dist/sweetalert.css">
        <script type="text/javascript"
	       src="../plugins/New_SweetAlert/dist/sweetalert.js"></script>
	   <script type="text/javascript"
	       src="../plugins/New_SweetAlert/dist/sweetalert.min.js"></script>
        <!-- DataTables-->
        <link rel="stylesheet" type="text/css" href="../plugins/DataTables/datatables.min.css"/>
        <!--Select2-->
        <link href="../plugins/Select2/select2.min.css" rel="stylesheet" />
        <!-- Estilos -->
        <link rel="stylesheet" href="../css/propios/estilos.css">
    </head>
    <!--<body onload="alturaMenu();">-->
    <body>
        <!--#menu-->
        <?php
            require_once '../view/menu.php';
            echo $menu;
        ?>
        <!--header-->
        <?php
            require_once '../view/header.php';
            echo $header;
        ?>
        
        <!-- sobre este div se va a trabajar -->
        <section>
            <div class="content">
                <div class="box-body">
                    <h1><i class="icono-izquierda fa fa-road"></i> Nueva Obra</h1>
                    <form action="###" method="POST" class="form-row">
                        <div class="form-group col-md-12">
                            <label>Descripción de la Obra</label>
                            <textarea id="txtDesc" class="form-control textarea" rows="3" style="resize: none;" required></textarea>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Dirección</label>
                            <input id="txtDireccion" type="text" class="form-control" placeholder="Dirección" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Ciudad</label>
                            <select id="cmbCiudad" class="form-control select2" style="width:100%;" required></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dueño</label>
                            <select id="cmbDuenio" class="form-control select2" style="width:100%;" required></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Encargado</label>
                            <select id="cmbEncargado" class="form-control select2" style="width:100%;" required></select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Fecha de Inicio</label>                      
                            <div class="input-group">
                                <span class="input-group-prepend input-group-text"><i class="far fa-calendar-alt"></i></span>
                                <input id="txtFechaInicio" type="text" class="form-control date-picker input-date" placeholder="Fecha de Inicio"
                                       onchange="validacionFechaFin();" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Fecha de Finalización</label>                      
                            <div class="input-group">
                                <span class="input-group-prepend input-group-text"><i class="far fa-calendar-alt"></i></span>
                                <input id="txtFechaFin" type="text" class="form-control date-picker input-date"  placeholder="Fecha de Finalización" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Presupuesto Estimado</label>                      
                            <div class="input-group">
                                <span class="input-group-prepend input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                <input id="txtCosto" type="text" class="form-control" placeholder="Presupuesto Estimado"
                                       onkeyup="sin_ceros(event);"
                                       onkeypress="return filterFloat(event,this);" required>
                            </div>
                        </div>                    
                        <div class="form-group col-md-12">
                            <button id="btnSaveObra" type="submit" onclick="metodo();" class="btn btn-success"><i class="fa fa-save"></i> Guardar Obra</button>
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
        <!--Select2-->
        <script src="../plugins/Select2/select2.min.js"></script>
        <!-- InputMask -->
	    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
        <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- bootstrap datepicker -->
        <script src="../plugins/DatePicker/bootstrap-datepicker.js"></script>
        <!--DataTables-->
        <script type="text/javascript" src="../plugins/DataTables/datatables.min.js"></script>
        <!--Script Propios-->
        <script src="../js/propios/main.js"></script>
        <script src="../js/propios/nueva_obra.js"></script>
    </body>
</html>