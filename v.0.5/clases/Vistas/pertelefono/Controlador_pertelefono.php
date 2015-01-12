<?php
include_once "../../Modelado/Modelo_pertelefono.php"; 
include_once "../validacion.php"; 
function CRegistrar_pertelefono(){
$enpertelefono=new Clase_pertelefono();
$enpertelefono->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpertelefono->setnPerTelTipo(validar($_POST["nPerTelTipo_"]));
$enpertelefono->setnPerTelItem(validar($_POST["nPerTelItem_"]));
$enpertelefono->setcPerTelNumero(validar($_POST["cPerTelNumero_"]));
$enpertelefono->setnPerTelEstado(validar($_POST["nPerTelEstado_"]));
$rpta=$enpertelefono->Insertar_pertelefono();
return $rpta;
}

function CActualizar_pertelefono(){
$enpertelefono=new Clase_pertelefono();
$enpertelefono->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpertelefono->setnPerTelTipo(validar($_POST["nPerTelTipo_"]));
$enpertelefono->setnPerTelItem(validar($_POST["nPerTelItem_"]));
$enpertelefono->setcPerTelNumero(validar($_POST["cPerTelNumero_"]));
$enpertelefono->setnPerTelEstado(validar($_POST["nPerTelEstado_"]));
$rpta=$enpertelefono->Actualizar_pertelefono();
return $rpta;
}

function CEliminar_pertelefono(){
$enpertelefono=new Clase_pertelefono();
$enpertelefono->setcPerCodigo($_GET["id"]);
$rpta=$enpertelefono->Eliminar_pertelefono();
return $rpta;
}

function CRecuperar_pertelefono(){
$enpertelefono=new Clase_pertelefono();
$enpertelefono->setcPerCodigo($_GET["id"]);
$rpta=$enpertelefono->Recuperar_pertelefono();
return $rpta;
}

function CListar_pertelefono(){
$enpertelefono=new Clase_pertelefono();
$rpta=$enpertelefono->Listar_pertelefono();
return $rpta;
}

function CListadoSimple_pertelefono(){
$enpertelefono=new Clase_pertelefono();
$rpta=$enpertelefono->ListadoSimple_pertelefono();
return $rpta;
}

function CBuscar_pertelefono($id){
$enpertelefono=new Clase_pertelefono();
$enpertelefono->setcPerCodigo($id);
$rpta=$enpertelefono->Buscar_pertelefono();
return $rpta;}
?>