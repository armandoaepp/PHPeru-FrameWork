<?php
include_once "../../Modelado/Modelo_docvehiculo.php"; 
include_once "../validacion.php"; 
function CRegistrar_docvehiculo(){
$endocvehiculo=new Clase_docvehiculo();
$endocvehiculo->setiddocvehiculo(validar($_POST["iddocvehiculo_"]));
$endocvehiculo->setidvehiculo(validar($_POST["idvehiculo_"]));
$endocvehiculo->setidtipodocumento(validar($_POST["idtipodocumento_"]));
$endocvehiculo->setitem(validar($_POST["item_"]));
$endocvehiculo->setfecharegistro(validar($_POST["fecharegistro_"]));
$endocvehiculo->setfechaemision(validar($_POST["fechaemision_"]));
$endocvehiculo->setfechacaducidad(validar($_POST["fechacaducidad_"]));
$endocvehiculo->setarchivo(validar($_POST["archivo_"]));
$endocvehiculo->setglosa(validar($_POST["glosa_"]));
$endocvehiculo->setestado("A");
$rpta=$endocvehiculo->Insertar_docvehiculo();
return $rpta;
}

function CActualizar_docvehiculo(){
$endocvehiculo=new Clase_docvehiculo();
$endocvehiculo->setiddocvehiculo(validar($_POST["iddocvehiculo_"]));
$endocvehiculo->setidvehiculo(validar($_POST["idvehiculo_"]));
$endocvehiculo->setidtipodocumento(validar($_POST["idtipodocumento_"]));
$endocvehiculo->setitem(validar($_POST["item_"]));
$endocvehiculo->setfecharegistro(validar($_POST["fecharegistro_"]));
$endocvehiculo->setfechaemision(validar($_POST["fechaemision_"]));
$endocvehiculo->setfechacaducidad(validar($_POST["fechacaducidad_"]));
$endocvehiculo->setarchivo(validar($_POST["archivo_"]));
$endocvehiculo->setglosa(validar($_POST["glosa_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$endocvehiculo->setestado($estado);
$rpta=$endocvehiculo->Actualizar_docvehiculo();
return $rpta;
}

function CEliminar_docvehiculo(){
$endocvehiculo=new Clase_docvehiculo();
$endocvehiculo->setiddocvehiculo($_GET["id"]);
$rpta=$endocvehiculo->Eliminar_docvehiculo();
return $rpta;
}

function CRecuperar_docvehiculo(){
$endocvehiculo=new Clase_docvehiculo();
$endocvehiculo->setiddocvehiculo($_GET["id"]);
$rpta=$endocvehiculo->Recuperar_docvehiculo();
return $rpta;
}

function CListar_docvehiculo(){
$endocvehiculo=new Clase_docvehiculo();
$rpta=$endocvehiculo->Listar_docvehiculo();
return $rpta;
}

function CListadoSimple_docvehiculo(){
$endocvehiculo=new Clase_docvehiculo();
$rpta=$endocvehiculo->ListadoSimple_docvehiculo();
return $rpta;
}

function CBuscar_docvehiculo($id){
$endocvehiculo=new Clase_docvehiculo();
$endocvehiculo->setiddocvehiculo($id);
$rpta=$endocvehiculo->Buscar_docvehiculo();
return $rpta;}
