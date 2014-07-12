<?php
include_once "../../Modelado/Modelo_transaccion.php"; 
include_once "../validacion.php"; 
function CRegistrar_transaccion(){
$entransaccion=new Clase_transaccion();
$entransaccion->setcTraCodigo(validar($_POST["cTraCodigo_"]));
$entransaccion->setnOpeCodigo(validar($_POST["nOpeCodigo_"]));
$entransaccion->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$entransaccion->setdTraFecha(validar($_POST["dTraFecha_"]));
$entransaccion->setcComputer(validar($_POST["cComputer_"]));
$entransaccion->setcTraDescripcion(validar($_POST["cTraDescripcion_"]));
$rpta=$entransaccion->Insertar_transaccion();
return $rpta;
}

function CActualizar_transaccion(){
$entransaccion=new Clase_transaccion();
$entransaccion->setcTraCodigo(validar($_POST["cTraCodigo_"]));
$entransaccion->setnOpeCodigo(validar($_POST["nOpeCodigo_"]));
$entransaccion->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$entransaccion->setdTraFecha(validar($_POST["dTraFecha_"]));
$entransaccion->setcComputer(validar($_POST["cComputer_"]));
$entransaccion->setcTraDescripcion(validar($_POST["cTraDescripcion_"]));
$rpta=$entransaccion->Actualizar_transaccion();
return $rpta;
}

function CEliminar_transaccion(){
$entransaccion=new Clase_transaccion();
$entransaccion->setcTraCodigo($_GET["id"]);
$rpta=$entransaccion->Eliminar_transaccion();
return $rpta;
}

function CRecuperar_transaccion(){
$entransaccion=new Clase_transaccion();
$entransaccion->setcTraCodigo($_GET["id"]);
$rpta=$entransaccion->Recuperar_transaccion();
return $rpta;
}

function CListar_transaccion(){
$entransaccion=new Clase_transaccion();
$rpta=$entransaccion->Listar_transaccion();
return $rpta;
}

function CListadoSimple_transaccion(){
$entransaccion=new Clase_transaccion();
$rpta=$entransaccion->ListadoSimple_transaccion();
return $rpta;
}

function CBuscar_transaccion($id){
$entransaccion=new Clase_transaccion();
$entransaccion->setcTraCodigo($id);
$rpta=$entransaccion->Buscar_transaccion();
return $rpta;}
?>