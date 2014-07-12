<?php
include_once "../../Modelado/Modelo_percuenta.php"; 
include_once "../validacion.php"; 
function CRegistrar_percuenta(){
$enpercuenta=new Clase_percuenta();
$enpercuenta->setnPerCtaCodigo(validar($_POST["nPerCtaCodigo_"]));
$enpercuenta->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpercuenta->setcNroCuenta(validar($_POST["cNroCuenta_"]));
$enpercuenta->setnPerCtaTipo(validar($_POST["nPerCtaTipo_"]));
$enpercuenta->setcPerJurCodigo(validar($_POST["cPerJurCodigo_"]));
$enpercuenta->setnMonCodigo(validar($_POST["nMonCodigo_"]));
$enpercuenta->setnPerCtaEstado(validar($_POST["nPerCtaEstado_"]));
$rpta=$enpercuenta->Insertar_percuenta();
return $rpta;
}

function CActualizar_percuenta(){
$enpercuenta=new Clase_percuenta();
$enpercuenta->setnPerCtaCodigo(validar($_POST["nPerCtaCodigo_"]));
$enpercuenta->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpercuenta->setcNroCuenta(validar($_POST["cNroCuenta_"]));
$enpercuenta->setnPerCtaTipo(validar($_POST["nPerCtaTipo_"]));
$enpercuenta->setcPerJurCodigo(validar($_POST["cPerJurCodigo_"]));
$enpercuenta->setnMonCodigo(validar($_POST["nMonCodigo_"]));
$enpercuenta->setnPerCtaEstado(validar($_POST["nPerCtaEstado_"]));
$rpta=$enpercuenta->Actualizar_percuenta();
return $rpta;
}

function CEliminar_percuenta(){
$enpercuenta=new Clase_percuenta();
$enpercuenta->setnPerCtaCodigo($_GET["id"]);
$rpta=$enpercuenta->Eliminar_percuenta();
return $rpta;
}

function CRecuperar_percuenta(){
$enpercuenta=new Clase_percuenta();
$enpercuenta->setnPerCtaCodigo($_GET["id"]);
$rpta=$enpercuenta->Recuperar_percuenta();
return $rpta;
}

function CListar_percuenta(){
$enpercuenta=new Clase_percuenta();
$rpta=$enpercuenta->Listar_percuenta();
return $rpta;
}

function CListadoSimple_percuenta(){
$enpercuenta=new Clase_percuenta();
$rpta=$enpercuenta->ListadoSimple_percuenta();
return $rpta;
}

function CBuscar_percuenta($id){
$enpercuenta=new Clase_percuenta();
$enpercuenta->setnPerCtaCodigo($id);
$rpta=$enpercuenta->Buscar_percuenta();
return $rpta;}
?>