<?php
function copiandofiles(){
$carpetap="clases/";
	if(!file_exists("./clases/Modelado")){
		mkdir("./clases/Modelado",0777);
	}
	if(!file_exists("./clases/Vistas")){
		mkdir("./clases/Vistas",0777);
	}
	if(!file_exists("./clases/Vistas/img")){
		mkdir("./clases/Vistas/img",0777);
	}
	
	if(!file_exists("./clases/Vistas/css")){
		mkdir("./clases/Vistas/css",0777);
	}
	
	copy("conexion.php","./clases/Modelado/conexion.php");
	copy("config.php","./clases/Modelado/config.php");
	copy("./cixphp.php","./clases/Vistas/cixphp.php");
	copy("./cixphp.php","./clases/Vistas/cixajax.php");
	copy("./validacion.php","./clases/Vistas/validacion.php");
	copy("./estilo_frms.css","./clases/Vistas/css/style.css");	
	
	 $midir=opendir("./img");
     // $i=0;
      while($archivo=readdir($midir)){
         if (!is_dir($archivo) && $archivo!="." && $archivo!=".."){
			@copy("./img/".$archivo,"./clases/Vistas/img/".$archivo);
			 }
	  }
	  return "Archivos Creados Correctamente";
}
?>