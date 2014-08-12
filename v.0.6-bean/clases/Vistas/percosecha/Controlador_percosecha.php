<?php
include_once "../../Modelado/Modelo_percosecha.php"; 
include_once "../validacion.php"; 
function CRegistrar_percosecha(){
$enpercosecha=new Clase_percosecha();
$enpercosecha->setnPerCosCodigo(validar($_POST["nPerCosCodigo_"]));
$enpercosecha->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpercosecha->setnParcCodigo(validar($_POST["nParcCodigo_"]));
$enpercosecha->setnParcClase(validar($_POST["nParcClase_"]));
$enpercosecha->setnProdCodigo(validar($_POST["nProdCodigo_"]));
$enpercosecha->setnProdClase(validar($_POST["nProdClase_"]));
$enpercosecha->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$enpercosecha->setcCosCodigo(validar($_POST["cCosCodigo_"]));
$enpercosecha->setfHectareas(validar($_POST["fHectareas_"]));
$enpercosecha->setfQuintales(validar($_POST["fQuintales_"]));
$enpercosecha->setfKilogramos(validar($_POST["fKilogramos_"]));
$enpercosecha->setcGlosa(validar($_POST["cGlosa_"]));
$enpercosecha->setnPerCosEstado(validar($_POST["nPerCosEstado_"]));
$rpta=$enpercosecha->Insertar_percosecha();
return $rpta;
}

function CActualizar_percosecha(){
$enpercosecha=new Clase_percosecha();
$enpercosecha->setnPerCosCodigo(validar($_POST["nPerCosCodigo_"]));
$enpercosecha->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpercosecha->setnParcCodigo(validar($_POST["nParcCodigo_"]));
$enpercosecha->setnParcClase(validar($_POST["nParcClase_"]));
$enpercosecha->setnProdCodigo(validar($_POST["nProdCodigo_"]));
$enpercosecha->setnProdClase(validar($_POST["nProdClase_"]));
$enpercosecha->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$enpercosecha->setcCosCodigo(validar($_POST["cCosCodigo_"]));
$enpercosecha->setfHectareas(validar($_POST["fHectareas_"]));
$enpercosecha->setfQuintales(validar($_POST["fQuintales_"]));
$enpercosecha->setfKilogramos(validar($_POST["fKilogramos_"]));
$enpercosecha->setcGlosa(validar($_POST["cGlosa_"]));
$enpercosecha->setnPerCosEstado(validar($_POST["nPerCosEstado_"]));
$rpta=$enpercosecha->Actualizar_percosecha();
return $rpta;
}

function CEliminar_percosecha(){
$enpercosecha=new Clase_percosecha();
$enpercosecha->setnPerCosCodigo($_GET["id"]);
$rpta=$enpercosecha->Eliminar_percosecha();
return $rpta;
}

function CRecuperar_percosecha(){
$enpercosecha=new Clase_percosecha();
$enpercosecha->setnPerCosCodigo($_GET["id"]);
$rpta=$enpercosecha->Recuperar_percosecha();
return $rpta;
}

function CListar_percosecha(){
$enpercosecha=new Clase_percosecha();
$rpta=$enpercosecha->Listar_percosecha();
return $rpta;
}

function CListadoSimple_percosecha(){
$enpercosecha=new Clase_percosecha();
$rpta=$enpercosecha->ListadoSimple_percosecha();
return $rpta;
}

function CBuscar_percosecha($id){
$enpercosecha=new Clase_percosecha();
$enpercosecha->setnPerCosCodigo($id);
$rpta=$enpercosecha->Buscar_percosecha();
return $rpta;}
?>