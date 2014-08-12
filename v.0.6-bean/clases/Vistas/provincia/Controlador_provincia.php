<?php
include_once "../../Modelado/Modelo_provincia.php"; 
include_once "../validacion.php"; 
function CRegistrar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setnProCodigo(validar($_POST["nProCodigo_"]));
$enprovincia->setcProDescripcion(validar($_POST["cProDescripcion_"]));
$enprovincia->setnDepCodigo(validar($_POST["nDepCodigo_"]));
$enprovincia->setcProUbiCodigo(validar($_POST["cProUbiCodigo_"]));
$enprovincia->setnProEstado(validar($_POST["nProEstado_"]));
$rpta=$enprovincia->Insertar_provincia();
return $rpta;
}

function CActualizar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setnProCodigo(validar($_POST["nProCodigo_"]));
$enprovincia->setcProDescripcion(validar($_POST["cProDescripcion_"]));
$enprovincia->setnDepCodigo(validar($_POST["nDepCodigo_"]));
$enprovincia->setcProUbiCodigo(validar($_POST["cProUbiCodigo_"]));
$enprovincia->setnProEstado(validar($_POST["nProEstado_"]));
$rpta=$enprovincia->Actualizar_provincia();
return $rpta;
}

function CEliminar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setnProCodigo($_GET["id"]);
$rpta=$enprovincia->Eliminar_provincia();
return $rpta;
}

function CRecuperar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setnProCodigo($_GET["id"]);
$rpta=$enprovincia->Recuperar_provincia();
return $rpta;
}

function CListar_provincia(){
$enprovincia=new Clase_provincia();
$rpta=$enprovincia->Listar_provincia();
return $rpta;
}

function CListadoSimple_provincia(){
$enprovincia=new Clase_provincia();
$rpta=$enprovincia->ListadoSimple_provincia();
return $rpta;
}

function CBuscar_provincia($id){
$enprovincia=new Clase_provincia();
$enprovincia->setnProCodigo($id);
$rpta=$enprovincia->Buscar_provincia();
return $rpta;}
?>