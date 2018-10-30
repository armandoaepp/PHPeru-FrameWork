// JavaScript Document
$(document).ready(function(){
	
	$("#btatributo").click(function(){
		var dato=$("#atributo").val();
		var en=false;
		if(dato.trim()!=""){
		$("#satributos option").each(function(e){
			if($(this).text()==dato){
				en=true;}
			});	
			if(en==false){
		$("#satributos").append("<option value='"+dato+"'>"+ dato+"</option>");
		}
		}
		$("#atributo").attr("value","");$("#atributo").focus();
		});
		
	$("#bteliatri").click(function(){
		var dato=$("#satributos").attr("value");	
		$("#satributos").find("option[value='"+dato+"']").remove();		
		});
	$("#btmetodo").click(function(){
		var dato=$("#metodo").val();
		var en=false;
		if(dato.trim()!=""){
		$("#smetodos option").each(function(e){
			if($(this).text()==dato){
				en=true;
				}
			});	
			if(en==false){
		$("#smetodos").append("<option value='"+dato+"'>"+ dato+"</option>");
		}
		}
		
		$("#metodo").attr("value","");$("#metodo").focus();
		});
		
			$("#btelimetodo").click(function(){
		var dato=$("#smetodos").attr("value");	
		$("#smetodos").find("option[value='"+dato+"']").remove();		
		});
		
	$("#form1").submit(function(e){
		e.preventDefault();
		$("#respuesta").html("Cargando...");
		var nclase=$("#nombre_clase").val();
		var narchivo=$("#archivo").val();
		var atributos="";
		$("#satributos option").each(function(){
			atributos+=$(this).text()+"*";
			});
			var metodos="";
		$("#smetodos option").each(function(){
			metodos+=$(this).text()+"*";
			});
		$.post("generator.php",{archivo:narchivo,clase:nclase,atributo:atributos,metodo:metodos},function(datodev){
				$("form")[0].reset();
				$("#satributos option").remove();$("#smetodos option").remove();
				$("#respuesta").html(datodev);
				
			});
		
		});
	})
