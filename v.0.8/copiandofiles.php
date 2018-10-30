<?php
function copiandofiles(){
$carpetap="App/";

	if (!file_exists("./App" )) {
		mkdir("./App" , 0777);
	}

	if (!file_exists("./App/Models" )) {
		mkdir("./App/Models" , 0777);
	}

	if (!file_exists("./App/Beans" )) {
		mkdir("./App/Beans" , 0777);
	}

	if (!file_exists("./App/Controllers" )) {
		mkdir("./App/Controllers" , 0777);
	}

	if (!file_exists("./App/api" )) {
		mkdir("./App/api" , 0777);
	}

	if (!file_exists("./App/Helpers" )) {
		mkdir("./App/Helpers" , 0777);
	}

	if (!file_exists("./App/Config" )) {
		mkdir("./App/Config" , 0777);
	}

	copy("./files_app/autoload.php","./App/autoload.php");
	copy("./files_app/global-paths.php","./App/global-paths.php");
	copy("./files_app/ClsConexion.php","./App/Models/ClsConexion.php");
	copy("./files_app/Validation.php","./App/Helpers/Validation.php");
	copy("./files_app/config.php","./App/Config/config.php");

	//  $midir=opendir("./img");
  //    // $i=0;
  //     while($archivo=readdir($midir)){
  //        if (!is_dir($archivo) && $archivo!="." && $archivo!=".."){
	// 		@copy("./img/".$archivo,"./App/Vistas/img/".$archivo);
	// 		 }
	//   }
	  return "Archivos Creados Correctamente";
}
?>