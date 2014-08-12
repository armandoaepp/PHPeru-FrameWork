<?php
include_once "../../Modelado/Modelo_ctactecomprobante.php"; 
include_once "../validacion.php"; 
function CRegistrar_ctactecomprobante(){
$enctactecomprobante=new Clase_ctactecomprobante();
$enctactecomprobante->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$enctactecomprobante->setnCtaCteComCodigo(validar($_POST["nCtaCteComCodigo_"]));
$enctactecomprobante->setcCtaCteComNumero(validar($_POST["cCtaCteComNumero_"]));
$enctactecomprobante->setnCtaCteTipoPago(validar($_POST["nCtaCteTipoPago_"]));
$enctactecomprobante->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$rpta=$enctactecomprobante->Insertar_ctactecomprobante();
return $rpta;
}

function CActualizar_ctactecomprobante(){
$enctactecomprobante=new Clase_ctactecomprobante();
$enctactecomprobante->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$enctactecomprobante->setnCtaCteComCodigo(validar($_POST["nCtaCteComCodigo_"]));
$enctactecomprobante->setcCtaCteComNumero(validar($_POST["cCtaCteComNumero_"]));
$enctactecomprobante->setnCtaCteTipoPago(validar($_POST["nCtaCteTipoPago_"]));
$enctactecomprobante->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$rpta=$enctactecomprobante->Actualizar_ctactecomprobante();
return $rpta;
}

function CEliminar_ctactecomprobante(){
$enctactecomprobante=new Clase_ctactecomprobante();
$enctactecomprobante->setcCtaCteRecibo($_GET["id"]);
$rpta=$enctactecomprobante->Eliminar_ctactecomprobante();
return $rpta;
}

function CRecuperar_ctactecomprobante(){
$enctactecomprobante=new Clase_ctactecomprobante();
$enctactecomprobante->setcCtaCteRecibo($_GET["id"]);
$rpta=$enctactecomprobante->Recuperar_ctactecomprobante();
return $rpta;
}

function CListar_ctactecomprobante(){
$enctactecomprobante=new Clase_ctactecomprobante();
$rpta=$enctactecomprobante->Listar_ctactecomprobante();
return $rpta;
}

function CListadoSimple_ctactecomprobante(){
$enctactecomprobante=new Clase_ctactecomprobante();
$rpta=$enctactecomprobante->ListadoSimple_ctactecomprobante();
return $rpta;
}

function CBuscar_ctactecomprobante($id){
$enctactecomprobante=new Clase_ctactecomprobante();
$enctactecomprobante->setcCtaCteRecibo($id);
$rpta=$enctactecomprobante->Buscar_ctactecomprobante();
return $rpta;}
?>