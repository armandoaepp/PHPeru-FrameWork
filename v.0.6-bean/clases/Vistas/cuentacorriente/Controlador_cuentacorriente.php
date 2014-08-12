<?php
include_once "../../Modelado/Modelo_cuentacorriente.php"; 
include_once "../validacion.php"; 
function CRegistrar_cuentacorriente(){
$encuentacorriente=new Clase_cuentacorriente();
$encuentacorriente->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$encuentacorriente->setnPerCtaCodigo(validar($_POST["nPerCtaCodigo_"]));
$encuentacorriente->setnCtaCteTipo(validar($_POST["nCtaCteTipo_"]));
$encuentacorriente->setnCtaCteItem(validar($_POST["nCtaCteItem_"]));
$encuentacorriente->setfCtaCteImporte(validar($_POST["fCtaCteImporte_"]));
$encuentacorriente->setnCtaCteCuota(validar($_POST["nCtaCteCuota_"]));
$encuentacorriente->setnCtaCteEstado(validar($_POST["nCtaCteEstado_"]));
$encuentacorriente->setdCtaCteFecVence(validar($_POST["dCtaCteFecVence_"]));
$encuentacorriente->setdCtaCteFecPago(validar($_POST["dCtaCteFecPago_"]));
$encuentacorriente->setdCtaCteFecEmis(validar($_POST["dCtaCteFecEmis_"]));
$encuentacorriente->setdCtaCteFecRegistro(validar($_POST["dCtaCteFecRegistro_"]));
$encuentacorriente->setcCtaCteGlosa(validar($_POST["cCtaCteGlosa_"]));
$encuentacorriente->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$encuentacorriente->setnMonCodigo(validar($_POST["nMonCodigo_"]));
$rpta=$encuentacorriente->Insertar_cuentacorriente();
return $rpta;
}

function CActualizar_cuentacorriente(){
$encuentacorriente=new Clase_cuentacorriente();
$encuentacorriente->setcCtaCteRecibo(validar($_POST["cCtaCteRecibo_"]));
$encuentacorriente->setnPerCtaCodigo(validar($_POST["nPerCtaCodigo_"]));
$encuentacorriente->setnCtaCteTipo(validar($_POST["nCtaCteTipo_"]));
$encuentacorriente->setnCtaCteItem(validar($_POST["nCtaCteItem_"]));
$encuentacorriente->setfCtaCteImporte(validar($_POST["fCtaCteImporte_"]));
$encuentacorriente->setnCtaCteCuota(validar($_POST["nCtaCteCuota_"]));
$encuentacorriente->setnCtaCteEstado(validar($_POST["nCtaCteEstado_"]));
$encuentacorriente->setdCtaCteFecVence(validar($_POST["dCtaCteFecVence_"]));
$encuentacorriente->setdCtaCteFecPago(validar($_POST["dCtaCteFecPago_"]));
$encuentacorriente->setdCtaCteFecEmis(validar($_POST["dCtaCteFecEmis_"]));
$encuentacorriente->setdCtaCteFecRegistro(validar($_POST["dCtaCteFecRegistro_"]));
$encuentacorriente->setcCtaCteGlosa(validar($_POST["cCtaCteGlosa_"]));
$encuentacorriente->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$encuentacorriente->setnMonCodigo(validar($_POST["nMonCodigo_"]));
$rpta=$encuentacorriente->Actualizar_cuentacorriente();
return $rpta;
}

function CEliminar_cuentacorriente(){
$encuentacorriente=new Clase_cuentacorriente();
$encuentacorriente->setcCtaCteRecibo($_GET["id"]);
$rpta=$encuentacorriente->Eliminar_cuentacorriente();
return $rpta;
}

function CRecuperar_cuentacorriente(){
$encuentacorriente=new Clase_cuentacorriente();
$encuentacorriente->setcCtaCteRecibo($_GET["id"]);
$rpta=$encuentacorriente->Recuperar_cuentacorriente();
return $rpta;
}

function CListar_cuentacorriente(){
$encuentacorriente=new Clase_cuentacorriente();
$rpta=$encuentacorriente->Listar_cuentacorriente();
return $rpta;
}

function CListadoSimple_cuentacorriente(){
$encuentacorriente=new Clase_cuentacorriente();
$rpta=$encuentacorriente->ListadoSimple_cuentacorriente();
return $rpta;
}

function CBuscar_cuentacorriente($id){
$encuentacorriente=new Clase_cuentacorriente();
$encuentacorriente->setcCtaCteRecibo($id);
$rpta=$encuentacorriente->Buscar_cuentacorriente();
return $rpta;}
?>