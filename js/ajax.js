function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function Registrar(){
fecha = document.frmRiesgos.fecha.value;
riesgo = document.frmRiesgos.riesgos.value;
fase = document.frmRiesgos.fase.value;
estado = document.frmRiesgos.estado.value;
accion= document.frmRiesgos.accion.value;
seguimiento = document.frmRiesgos.seguimiento.value;
nivel = document.frmRiesgos.nivel.value;
responsable = document.frmRiesgos.responsable.value;
impacto = document.frmRiesgos.impacto.value;
probabilidad = document.frmRiesgos,probabilidad.value;
ajax = objetoAjax();
ajax.open("POST", "clases/registrar.php", true);
ajax.onreadystatechange=function() {
	if (ajax.readyState==4) {
		alert('Los Datos Se Guardaron Con Exito!');
		window.location.reload(true);
	}
}	
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("fecha="+fecha+"&riesgo"+riesgo+"&fase"+fase+"&estado"+estado+"&accion"+accion+"&seguimiento"+seguimiento+"&nivel"+nivel+"&responsable"+responsable+"&impacto"+impacto+"&probabilidad"+probabilidad);
}