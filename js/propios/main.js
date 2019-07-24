$(document).ready(function(){ 
    //Eventos del Menú Desplegable
    $('.menu li.has-sub>a').click(function(){
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(200);
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown(200);
			element.siblings('li').children('ul').slideUp(200);
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp(200);
		}
    });
    
    $('#btnToggle').click(function(){
        if($('.contenedor-menu').is(':visible')){
            $('.contenedor-menu').hide('slow');
        }
        else{
            $('.contenedor-menu').show('slow');
        }
    });
    
    /*$(window).resize(function(){
        if($(document).width()>600){
            $('.contenedor-menu').css('display','block');
        }
        else{
            window.setTimeout(function(){
                $('.contenedor-menu').css('display','none');
            },1);
        }
    });*/ 
    
    //Eventos de los enlances
    $('.menu li ul li a').click(function(){
        window.location.href=$(this).attr("href");
    });
    
    //Eventos de las Opciones del Usuario
    $('#OpcionesUsuario').click(function(){
        if($("#listadoOpcionesUsuario").hasClass('oculto')){
            $("#listadoOpcionesUsuario").removeClass('oculto');
            $("#listadoOpcionesUsuario").addClass('visible');
            $("#listadoOpcionesUsuario").css("display","block");
        }
        else{
            $("#listadoOpcionesUsuario").removeClass('visible');
            $("#listadoOpcionesUsuario").addClass('oculto');
            $("#listadoOpcionesUsuario").css("display","none");
        }
    });
    
    //Evento cargaComplementos
    cargaComplementos();  
});

//Evento para definir la altura del contenedor-menu
function alturaMenu(){
        var height = $('section').height()+$('nav').height()+45;
        $('.contenedor-menu').height(height);
}

//Evento para cargar los plugins de la pagina
function cargaComplementos(){
    //Cargado del DataTables
    if($('table').length>0){
        $('table').DataTable();
    }
    
    //Cargado del DatePicker
    if($(".date-picker").toArray().length>0){
        $('.date-picker').datepicker({
            format : "dd/mm/yyyy"
        });
    }
    
    //Cargado del Input Mask con el formato "dd/mm/yyyy"
    if($('.input-date').toArray().length>0){
        $(".input-date").inputmask("dd/mm/yyyy");
    }
    if($('.select2').toArray().length>0){
        $(".select2").select2({
            placeholder : "Seleccione una opción"
        });
    }
}

//Metodos para que un input text acepte solo numeros y puntos decimales
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
}

// Metodo para que solo acepte un textbox acepte cantidades mayores a 0
function sin_ceros(e) {
    var id = e.currentTarget.id;
    var valor = e.currentTarget.value;
	if (valor[0] == 0) {
		if (valor.length == 1) {
			$("#" + id).val('1');
		} else {
			valor = valor.substring(1)
			$("#" + id).val(valor);
			sin_ceros(e);
		}
	}
}