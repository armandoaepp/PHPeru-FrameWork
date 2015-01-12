<?php
function copiandofiles(){
$carpetap="clases/";
	if(!file_exists("./clases/Modelado")){
	mkdir("./clases/Modelado",0777);
	}
	if(!file_exists("./clases/Vistas")){
	mkdir("./clases/Vistas",0777);
	}
	if(!file_exists("./clases/Vistas/imgcixphp")){
	mkdir("./clases/Vistas/imgcixphp",0777);
	}
	
	if(!file_exists("./clases/Vistas/css")){
	mkdir("./clases/Vistas/css",0777);
	}
	
	copy("conexion.php","./clases/Modelado/conexion.php");
	copy("config.php","./clases/Modelado/config.php");
	copy("./cixphp.php","./clases/Vistas/cixphp.php");
	copy("./validacion.php","./clases/Vistas/validacion.php");
	copy("./estilo_frms.css","./clases/Vistas/css/estilo_frms.css");
	copy("./estilo_tabla.css","./clases/Vistas/css/estilo_tabla.css");
	
	 $midir=opendir("./imgcixphp");
     // $i=0;
      while($archivo=readdir($midir)){
         if (!is_dir($archivo) && $archivo!="." && $archivo!=".."){
			@copy("./imgcixphp/".$archivo,"./clases/Vistas/imgcixphp/".$archivo);
			 }
	  }
	  return "Archivos Creados Correctamente";
}
?>