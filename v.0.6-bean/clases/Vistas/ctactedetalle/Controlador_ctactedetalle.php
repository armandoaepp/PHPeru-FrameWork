<?php
include_once "../../Modelado/Modelo_ctactedetalle.php"; 
include_once "../validacion.php"; 
function CRegistrar_ctactedetalle(){
$enctactedetalle=new Clase_ctactedetalle();
$enctactedetalle->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$enctactedetalle->setItem(validar($_POST["Item_"]));
$enctactedetalle->setnSerCodigo(validar($_POST["nSerCodigo_"]));
$enctactedetalle->setnCtaCteCantidad(validar($_POST["nCtaCteCantidad_"]));
$enctactedetalle->setnMoneda(validar($_POST["nMoneda_"]));
$enctactedetalle->setfCtaCteTC(validar($_POST["fCtaCteTC_"]));
$enctactedetalle->setfCtaCteIGV(validar($_POST["fCtaCteIGV_"]));
$enctactedetalle->setfCtaCteDetimporte(validar($_POST["fCtaCteDetimporte_"]));
$enctactedetalle->setdCtaCteDetRegistro(validar($_POST["dCtaCteDetRegistro_"]));
$enctactedetalle->setnBieRegCodigo(validar($_POST["nBieRegCodigo_"]));
$enctactedetalle->setnCtaCtedetEstado(validar($_POST["nCtaCtedetEstado_"]));
$rpta=$enctactedetalle->Insertar_ctactedetalle();
return $rpta;
}

function CActualizar_ctactedetalle(){
$enctactedetalle=new Clase_ctactedetalle();
$enctactedetalle->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$enctactedetalle->setItem(validar($_POST["Item_"]));
$enctactedetalle->setnSerCodigo(validar($_POST["nSerCodigo_"]));
$enctactedetalle->setnCtaCteCantidad(validar($_POST["nCtaCteCantidad_"]));
$enctactedetalle->setnMoneda(validar($_POST["nMoneda_"]));
$enctactedetalle->setfCtaCteTC(validar($_POST["fCtaCteTC_"]));
$enctactedetalle->setfCtaCteIGV(validar($_POST["fCtaCteIGV_"]));
$enctactedetalle->setfCtaCteDetimporte(validar($_POST["fCtaCteDetimporte_"]));
$enctactedetalle->setdCtaCteDetRegistro(validar($_POST["dCtaCteDetRegistro_"]));
$enctactedetalle->setnBieRegCodigo(validar($_POST["nBieRegCodigo_"]));
$enctactedetalle->setnCtaCtedetEstado(validar($_POST["nCtaCtedetEstado_"]));
$rpta=$enctactedetalle->Actualizar_ctactedetalle();
return $rpta;
}

function CEliminar_ctactedetalle(){
$enctactedetalle=new Clase_ctactedetalle();
$enctactedetalle->setcCtaCteRecibo($_GET["id"]);
$rpta=$enctactedetalle->Eliminar_ctactedetalle();
return $rpta;
}

function CRecuperar_ctactedetalle(){
$enctactedetalle=new Clase_ctactedetalle();
$enctactedetalle->setcCtaCteRecibo($_GET["id"]);
$rpta=$enctactedetalle->Recuperar_ctactedetalle();
return $rpta;
}

function CListar_ctactedetalle(){
$enctactedetalle=new Clase_ctactedetalle();
$rpta=$enctactedetalle->Listar_ctactedetalle();
return $rpta;
}

function CListadoSimple_ctactedetalle(){
$enctactedetalle=new Clase_ctactedetalle();
$rpta=$enctactedetalle->ListadoSimple_ctactedetalle();
return $rpta;
}

function CBuscar_ctactedetalle($id){
$enctactedetalle=new Clase_ctactedetalle();
$enctactedetalle->setcCtaCteRecibo($id);
$rpta=$enctactedetalle->Buscar_ctactedetalle();
return $rpta;}
?>