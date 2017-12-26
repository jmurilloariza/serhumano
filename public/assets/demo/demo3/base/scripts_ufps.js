var urlBase='http://localhost/serhumano/';

function cargarModulos() {
	var x = getCookie('email')	

	if(x=="natali@gmail.com"){
		$("#m_aside_left2").load("modules/modules_estudiante.html");
        $("#contenido_header").load("modules/header_alumno.html");
	}else if(x=="davidpabon173@gmail.com"){	
		$("#m_aside_left2").load("public/modules/modules_docente.html");
        $("#contenido_header").load("public/modules/header_docente.html");
	}
    $("#footer").load("public/modules/footer.html");
}

function login(){
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;	

    if(email=='davidpabon173@gmail.com' || email=='natali@gmail.com'){
        setCookie('email', email)
        var x = getCookie('email')  
        window.location.assign("home.html")
    }else{
        document.getElementById('msn').innerHTML = '<div class="alert alert-warning alert-dismissible fade show   m-alert m-alert--air m-alert--outline m-alert--outline-2x" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>Las credenciales no son correctas.</div>';
    }
}

function setCookie(cname, cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function cargarContenido(id_contenido, archivo){    
    $(id_contenido).load('public/contenido/'+archivo);
}

function PreviewImage(id_input, preview) {    
    var input_file = $('#'+id_input);    
    var files = input_file.prop("files")
     var names = $.map(files, function (val) { return val.name; });
     $.each(names, function (i, name) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById(id_input).files[i]);

        oFReader.onload = function (oFREvent) {
            var extension = name.substring(name.lastIndexOf(".")).toLowerCase();                 
            if(extension=='.doc' || extension=='.docx'){
                document.getElementById(preview).innerHTML='<div class="col-sm-12"><img src="public/assets/app/media/img/files/doc.svg" alt=".doc" style="width: 100%; height: auto;" /><label id="info">'+name+'</label></div>';
            }else if(extension=='.pdf'){
                document.getElementById(preview).innerHTML='<div class="col-sm-12"><img src="public/assets/app/media/img/files/pdf.svg" alt=".doc" style="width: 100%; height: auto;" /><label id="info">'+name+'</label></div>';
            }else{                
                document.getElementById(preview).innerHTML='<div class="col-sm-12"><img src="public/assets/app/media/img/files/jpg.svg" alt=".doc" style="width: 100%; height: auto;" /><label id="info">'+name+'</label></div>';
            }                        
        };
     });        
}


function armarInformacion(data){
    var informacion="";
    for (var i = 0; i < data.length-1; i++) {
        if(i==0){                        
            informacion+=data[i].name+"="+data[i].value;
        }else{
            informacion+="&"+data[i].name+"="+data[i].value;            
        }
    }
    return informacion;
}

function armarInformacionHV(data){
    var informacion="";
    var cont_experiencias_laborales=1;    
    var cont_educaciones_superiores=1;
    var experiencias_laborales = [];
    var educaciones_superiores = [];    
    for (var i = 0; i < data.length-1; i++) {        
        if(i==0){
            informacion+=data[i].name+"="+data[i].value;
        }else{

            if(data[i].name=='fecha_mes_grado'){
                informacion+="&fecha_grado="+data[i+1].value+"-"+data[i].value+"-1"                
                i++;
            }else if (data[i].name=='tipo_doc' ||
                data[i].name=='sexo'||
                data[i].name=='lbrta_mil_clase' ||
                data[i].name=='ultm_grd_aprob') {

                    informacion+="&"+data[i].name+"="+$('input:radio[name='+data[i].name+']:checked').val();

                }else if(data[i].name.includes("modalidad_academica_id_")){
                                        
                    educaciones_superiores.push({'modalidad_academica_id':data[i].value,
                        'numero_semest_aprob':data[i+1].value,
                        'graduado':$('input:radio[name=graduado_'+cont_educaciones_superiores+']:checked').val(),
                        'estudio_titulo_obte':data[i+4].value,
                        'fecha_terminacion':data[i+6].value+"-"+data[i+5].value+"-1",
                        'num_tarjeta_prof':data[i+7].value});
                    cont_educaciones_superiores++;
                    i+=7;            

                }else if(data[i].name.includes("estado_contrato_")){
                    
                    experiencias_laborales.push({'empresa_entidad':data[i+1].value,
                        'tipo':$('input:radio[name=tipo_'+cont_experiencias_laborales+']:checked').val(),
                        'pais':data[i+4].value,
                        'departamento':data[i+5].value,
                        'municipio':data[i+6].value,
                        'correo_entidad':data[i+7].value,
                        'telefono_entidad':data[i+8].value,
                        'fecha_ingreso':data[i+9].value,
                        'fecha_retiro':data[i+10].value,
                        'cargo_contratado':data[i+11].value,
                        'dependencia':data[i+12].value,
                        'direccion':data[i+13].value,
                        'estado_contrato':data[i].value});                
                    cont_experiencias_laborales++;
                    i+=13;

            }else{
                informacion+="&"+data[i].name+"="+data[i].value;    
            }
        }
    }

for (var i = 0; i < educaciones_superiores.length; i++) {
    console.log(educaciones_superiores[i].estudio_titulo_obte+" Soy stick");
}
var x= JSON.stringify(experiencias_laborales);
var y= JSON.stringify(educaciones_superiores);
console.log(x);
console.log(y);
    
    informacion+="&"+'experiencias_laborales'+"="+x;
    informacion+="&"+'educaciones_superiores'+"="+y;

    return informacion;
}

function registrarEstudiante(){
    var formulario = document.forms["myForm"];
    var informacion="";
    informacion = armarInformacion(formulario);    
    console.log(informacion);
    ajax('matricula/registrarAlumno', informacion, 'POST');    
    return false;
}

function registrarMatricula(){
    var formulario = document.forms["myForm"];
    var informacion="";
    informacion = armarInformacion(formulario);    
    console.log(informacion);
    ajax('matricula/registrarMatricula', informacion, 'POST');    
    return false;
}

function registroHojaDeVida(){   
    var formulario = document.forms["myForm"];
    var informacion="";
    informacion = armarInformacionHV(formulario);    
    console.log(informacion);    
    ajax('matricula/registrarHojaVida', informacion, 'POST');    
    return false;
}

function ajax(url, informacion, tipo){
    $.ajax({
        url : urlBase+url,
        data : informacion,
        type : tipo,     
        dataType : 'json',     
        success : function(json) {
            $.each(json, function(i, item) {
                console.log('Item '+item);
            });
            procesarRespuestaAjax(1, 'La operacion ha sido exitosa');
        },        
        error : function(xhr, status) {
            console.log(xhr);
            procesarRespuestaAjax(3, 'Ha ocurrido un error');
        }            
    });
    return false;
}

function procesarRespuestaAjax(color, msn){    
    if(color==1){
        document.getElementById('msn').innerHTML = '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>'+msn+'</div>';
    }else if(color==2){
        document.getElementById('msn').innerHTML = '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>'+msn+'</div>';
    }else if(color==3){
        document.getElementById('msn').innerHTML = '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>'+msn+'</div>';
    }
    return false;
}