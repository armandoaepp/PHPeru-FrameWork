<?php
include_once "../../Modelado/Modelo_acopio.php"; 
include_once "../validacion.php"; 
function CRegistrar_acopio(){
$enacopio=new Clase_acopio();
$enacopio->setAcopioId(validar($_POST["AcopioId_"]));
$enacopio->setAcopioFecha(validar($_POST["AcopioFecha_"]));
$enacopio->setAcopioNSacos(validar($_POST["AcopioNSacos_"]));
$enacopio->setAcopioPesoBruto(validar($_POST["AcopioPesoBruto_"]));
$enacopio->setAcopioHumedadEntregada(validar($_POST["AcopioHumedadEntregada_"]));
$enacopio->setAcopioHumedadRequerida(validar($_POST["AcopioHumedadRequerida_"]));
$enacopio->setAcopioPrecioQuintal(validar($_POST["AcopioPrecioQuintal_"]));
$enacopio->setAcopioTara(validar($_POST["AcopioTara_"]));
$enacopio->setBaseId(validar($_POST["BaseId_"]));
$enacopio->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));
$enacopio->setAcopioQuintalesNetos(validar($_POST["AcopioQuintalesNetos_"]));
$enacopio->setAcopioStatus(validar($_POST["AcopioStatus_"]));
$enacopio->setAcopioEstado(validar($_POST["AcopioEstado_"]));
$enacopio->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
$enacopio->setGuiaAcopioId(validar($_POST["GuiaAcopioId_"]));
$enacopio->setEstadoAcopioId(validar($_POST["EstadoAcopioId_"]));
$enacopio->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$enacopio->Insertar_acopio();
return $rpta;
}

function CActualizar_acopio(){
$enacopio=new Clase_acopio();
$enacopio->setAcopioId(validar($_POST["AcopioId_"]));
$enacopio->setAcopioFecha(validar($_POST["AcopioFecha_"]));
$enacopio->setAcopioNSacos(validar($_POST["AcopioNSacos_"]));
$enacopio->setAcopioPesoBruto(validar($_POST["AcopioPesoBruto_"]));
$enacopio->setAcopioHumedadEntregada(validar($_POST["AcopioHumedadEntregada_"]));
$enacopio->setAcopioHumedadRequerida(validar($_POST["AcopioHumedadRequerida_"]));
$enacopio->setAcopioPrecioQuintal(validar($_POST["AcopioPrecioQuintal_"]));
$enacopio->setAcopioTara(validar($_POST["AcopioTara_"]));
$enacopio->setBaseId(validar($_POST["BaseId_"]));
$enacopio->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));
$enacopio->setAcopioQuintalesNetos(validar($_POST["AcopioQuintalesNetos_"]));
$enacopio->setAcopioStatus(validar($_POST["AcopioStatus_"]));
$enacopio->setAcopioEstado(validar($_POST["AcopioEstado_"]));
$enacopio->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
$enacopio->setGuiaAcopioId(validar($_POST["GuiaAcopioId_"]));
$enacopio->setEstadoAcopioId(validar($_POST["EstadoAcopioId_"]));
$enacopio->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$enacopio->Actualizar_acopio();
return $rpta;
}

function CEliminar_acopio(){
$enacopio=new Clase_acopio();
$enacopio->setAcopioId($_GET["id"]);
$rpta=$enacopio->Eliminar_acopio();
return $rpta;
}

function CRecuperar_acopio(){
$enacopio=new Clase_acopio();
$enacopio->setAcopioId($_GET["id"]);
$rpta=$enacopio->Recuperar_acopio();
return $rpta;
}

function CListar_acopio(){
$enacopio=new Clase_acopio();
$rpta=$enacopio->Listar_acopio();
return $rpta;
}

function CListadoSimple_acopio(){
$enacopio=new Clase_acopio();
$rpta=$enacopio->ListadoSimple_acopio();
return $rpta;
}

function CBuscar_acopio($id){
$enacopio=new Clase_acopio();
$enacopio->setAcopioId($id);
$rpta=$enacopio->Buscar_acopio();
return $rpta;}
?>