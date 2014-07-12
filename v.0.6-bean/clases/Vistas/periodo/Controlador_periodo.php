<?php
include_once "../../Modelado/Modelo_periodo.php"; 
include_once "../validacion.php"; 
function CRegistrar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$enperiodo->setcPrdDescripcion(validar($_POST["cPrdDescripcion_"]));
$enperiodo->setdPrdFecInic(validar($_POST["dPrdFecInic_"]));
$enperiodo->setdPrdFecFin(validar($_POST["dPrdFecFin_"]));
$enperiodo->setnPrdTipo(validar($_POST["nPrdTipo_"]));
$enperiodo->setnPrdEstado(validar($_POST["nPrdEstado_"]));
$rpta=$enperiodo->Insertar_periodo();
return $rpta;
}

function CActualizar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$enperiodo->setcPrdDescripcion(validar($_POST["cPrdDescripcion_"]));
$enperiodo->setdPrdFecInic(validar($_POST["dPrdFecInic_"]));
$enperiodo->setdPrdFecFin(validar($_POST["dPrdFecFin_"]));
$enperiodo->setnPrdTipo(validar($_POST["nPrdTipo_"]));
$enperiodo->setnPrdEstado(validar($_POST["nPrdEstado_"]));
$rpta=$enperiodo->Actualizar_periodo();
return $rpta;
}

function CEliminar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setnPrdCodigo($_GET["id"]);
$rpta=$enperiodo->Eliminar_periodo();
return $rpta;
}

function CRecuperar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setnPrdCodigo($_GET["id"]);
$rpta=$enperiodo->Recuperar_periodo();
return $rpta;
}

function CListar_periodo(){
$enperiodo=new Clase_periodo();
$rpta=$enperiodo->Listar_periodo();
return $rpta;
}

function CListadoSimple_periodo(){
$enperiodo=new Clase_periodo();
$rpta=$enperiodo->ListadoSimple_periodo();
return $rpta;
}

function CBuscar_periodo($id){
$enperiodo=new Clase_periodo();
$enperiodo->setnPrdCodigo($id);
$rpta=$enperiodo->Buscar_periodo();
return $rpta;}
?>