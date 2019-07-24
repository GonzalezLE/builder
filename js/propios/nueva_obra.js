window.onload = function(){
    cmbCiudad();
    cmbDuenio();
    cmbEncargado();
}

// Metodo para cambiar el formato de fecha
function formato_fecha(fecha) {
	var arreglo_fecha = fecha.split("/");
    return arreglo_fecha[2] + "-" + arreglo_fecha[1] + "-" + arreglo_fecha[0];
}

//Metodo para forzar a que el #txtFechaFin tenga una fecha posterior a #txtFechaInicio
function validacionFechaFin(){
    //alert("Funciona");
    if($("#txtFechaFin").val()!=""){
        var fechauno = new Date(formato_fecha($("#txtFechaInicio").val()));
        var fechados = new Date(formato_fecha($("#txtFechaFin").val()));
        var resultado = fechados.getTime() >= fechauno.getTime();
        if(resultado == false){
            $("#txtFechaFin").datepicker('setStartDate',$("#txtFechaInicio").val());
            $("#txtFechaFin").val($("#txtFechaInicio").val());
        }
    }
    else{
        $("#txtFechaFin").datepicker('setStartDate',$("#txtFechaInicio").val());
    }
}

//Metodo que sirve para llenar el #cmbCiudad
function cmbCiudad(){
    $.ajax({
        type : "GET",
        url : "../controller/Ciudad/SelectCiudad.php",
        dataType : "json",
        contentType : "application/json; charset=utf-8",
        data : "",
        success : function(resu){
            var cadena = "<option value='0' disabled='disabled' selected>Seleccione una opción</option>";
			for (var x = 0; x < resu.length; x++) {
				cadena = cadena + "<option value='" + resu[x].idCiudad
						+ "'>" + resu[x].nombreCiudad + ", "+resu[x].nombreEstado +"</option>";
			}
            $("#cmbCiudad").empty();
			$("#cmbCiudad").append(cadena);
        },
        error : function(mensaje){
            swal("Error " + mensaje.status, mensaje.statusText, "error");
        }
    });
}

//Metodo que sirve para llenar el #cmbDuenio
function cmbDuenio(){
    $.ajax({
        type : "GET",
        url : "../controller/Duenio/SelectDuenio.php",
        dataType : "json",
        contentType : "application/json; charset=utf-8",
        data : "",
        success : function(resu){
            var cadena = "<option value='0' disabled='disabled' selected>Seleccione una opción</option>";
			for (var x = 0; x < resu.length; x++) {
				cadena = cadena + "<option value='" + resu[x].id_duenio
						+ "'>" + resu[x].nombre + " "+resu[x].apepat + " " + resu[x].apemat +"</option>";
			}
            $("#cmbDuenio").empty();
			$("#cmbDuenio").append(cadena);
        },
        error : function(mensaje){
            swal("Error " + mensaje.status, mensaje.statusText, "error");
        }
    });
}

//Metodo que sirve para llenar el #cmbEncargado
function cmbEncargado(){
    $.ajax({
        type : "GET",
        url : "../controller/Encargado/SelectEncargado.php",
        dataType : "json",
        contentType : "application/json; charset=utf-8",
        data : "",
        success : function(resu){
            var cadena = "<option value='0' disabled='disabled' selected>Seleccione una opción</option>";
			for (var x = 0; x < resu.length; x++) {
				cadena = cadena + "<option value='" + resu[x].id_encargado
						+ "'>" + resu[x].nombre + " "+resu[x].apepat + " " + resu[x].apemat +"</option>";
			}
            $("#cmbEncargado").empty();
			$("#cmbEncargado").append(cadena);
        },
        error : function(mensaje){
            swal("Error " + mensaje.status, mensaje.statusText, "error");
        }
    });
}

function metodo(){
    //var num = parseFloat($("#txtCosto").val());
    //alert(num.toString());
    var inputSelect = $(".select2").toArray();
    for(var x=0;x<inputSelect.length;x++){
        if(inputSelect[x].value == "0"){
            swal("¡Error!", "Llena todos los campos", "error");
        }
    }
}
