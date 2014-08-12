<?php
include_once "../../Modelado/Modelo_ctactepago.php"; 
include_once "../validacion.php"; 
function CRegistrar_ctactepago(){
$enctactepago=new Clase_ctactepago();
$enctactepago->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$enctactepago->setnCtaCtePagCodigo(validar($_POST["nCtaCtePagCodigo_"]));
$enctactepago->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enctactepago->setnPerCtaCodigo(validar($_POST["nPerCtaCodigo_"]));
$enctactepago->setnTurno(validar($_POST["nTurno_"]));
$enctactepago->setnForPago(validar($_POST["nForPago_"]));
$enctactepago->setnTipPago(validar($_POST["nTipPago_"]));
$enctactepago->setcCtaCtePagNroOperacion(validar($_POST["cCtaCtePagNroOperacion_"]));
$enctactepago->setdCtaCtePagfecha(validar($_POST["dCtaCtePagfecha_"]));
$enctactepago->setCtaCtePagGlosa(validar($_POST["CtaCtePagGlosa_"]));
$enctactepago->setfCtaCtePagImporte(validar($_POST["fCtaCtePagImporte_"]));
$rpta=$enctactepago->Insertar_ctactepago();
return $rpta;
}

function CActualizar_ctactepago(){
$enctactepago=new Clase_ctactepago();
$enctactepago->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$enctactepago->setnCtaCtePagCodigo(validar($_POST["nCtaCtePagCodigo_"]));
$enctactepago->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enctactepago->setnPerCtaCodigo(validar($_POST["nPerCtaCodigo_"]));
$enctactepago->setnTurno(validar($_POST["nTurno_"]));
$enctactepago->setnForPago(validar($_POST["nForPago_"]));
$enctactepago->setnTipPago(validar($_POST["nTipPago_"]));
$enctactepago->setcCtaCtePagNroOperacion(validar($_POST["cCtaCtePagNroOperacion_"]));
$enctactepago->setdCtaCtePagfecha(validar($_POST["dCtaCtePagfecha_"]));
$enctactepago->setCtaCtePagGlosa(validar($_POST["CtaCtePagGlosa_"]));
$enctactepago->setfCtaCtePagImporte(validar($_POST["fCtaCtePagImporte_"]));
$rpta=$enctactepago->Actualizar_ctactepago();
return $rpta;
}

function CEliminar_ctactepago(){
$enctactepago=new Clase_ctactepago();
$enctactepago->setcCtaCteRecibo($_GET["id"]);
$rpta=$enctactepago->Eliminar_ctactepago();
return $rpta;
}

function CRecuperar_ctactepago(){
$enctactepago=new Clase_ctactepago();
$enctactepago->setcCtaCteRecibo($_GET["id"]);
$rpta=$enctactepago->Recuperar_ctactepago();
return $rpta;
}

function CListar_ctactepago(){
$enctactepago=new Clase_ctactepago();
$rpta=$enctactepago->Listar_ctactepago();
return $rpta;
}

function CListadoSimple_ctactepago(){
$enctactepago=new Clase_ctactepago();
$rpta=$enctactepago->ListadoSimple_ctactepago();
return $rpta;
}

function CBuscar_ctactepago($id){
$enctactepago=new Clase_ctactepago();
$enctactepago->setcCtaCteRecibo($id);
$rpta=$enctactepago->Buscar_ctactepago();
return $rpta;}
?>