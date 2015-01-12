function validar(formulario,mostrar){
var frm=document.getElementById(formulario);
var cap=document.getElementById(mostrar);
var x=frm.elements.length;
		for(var i=0;i<x;i++){
			// seleccionar tipo de control
			var tipo=frm.elements[i].type;
			//validar text
	if(tipo=="text"){
	if(frm.elements[i].alt.trim()=="requerido"){	
	
		if(frm.elements[i].value.trim()==""){
		cap.innerHTML=frm.elements[i].title;
		frm.elements[i].focus();
		return false;}
		
		}
	
		}
					
		}	
	}