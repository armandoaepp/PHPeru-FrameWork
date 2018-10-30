<?php
function copiandofiles(){
$carpetap="app/";

	if (!file_exists("./app" )) {
		mkdir("./app" , 0777);
	}

	if (!file_exists("./app/models" )) {
		mkdir("./app/models" , 0777);
	}

	if (!file_exists("./app/beans" )) {
		mkdir("./app/beans" , 0777);
	}

	if (!file_exists("./app/controllers" )) {
		mkdir("./app/controllers" , 0777);
	}

	if (!file_exists("./app/api" )) {
		mkdir("./app/api" , 0777);
	}

	if (!file_exists("./app/helpers" )) {
		mkdir("./app/helpers" , 0777);
	}

	if (!file_exists("./app/config" )) {
		mkdir("./app/config" , 0777);
	}

	copy("./files_app/autoload.php","./app/autoload.php");
	copy("./files_app/paths.php","./app/paths.php");
	copy("./files_app/ClsConexion.php","./app/models/ClsConexion.php");
	copy("./files_app/Validation.php","./app/helpers/Validation.php");
	copy("./files_app/config.php","./app/config/config.php");
	copy("./files_app/serialize.php","./app/helpers/serialize.php");

	//  $midir=opendir("./img");
  //    // $i=0;
  //     while($archivo=readdir($midir)){
  //        if (!is_dir($archivo) && $archivo!="." && $archivo!=".."){
	// 		@copy("./img/".$archivo,"./app/Vistas/img/".$archivo);
	// 		 }
	//   }
	  return "Archivos Creados Correctamente";
}
?>