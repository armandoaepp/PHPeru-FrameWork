<?php
include_once "../../Modelado/Modelo_ctactenumeracion.php"; 
include_once "../validacion.php"; 
function CRegistrar_ctactenumeracion(){
$enctactenumeracion=new Clase_ctactenumeracion();
$enctactenumeracion->setcPerJuridica(validar($_POST["cPerJuridica_"]));
$enctactenumeracion->setnComTipo(validar($_POST["nComTipo_"]));
$enctactenumeracion->setnSerie(validar($_POST["nSerie_"]));
$enctactenumeracion->setNumero(validar($_POST["Numero_"]));
$rpta=$enctactenumeracion->Insertar_ctactenumeracion();
return $rpta;
}

function CActualizar_ctactenumeracion(){
$enctactenumeracion=new Clase_ctactenumeracion();
$enctactenumeracion->setcPerJuridica(validar($_POST["cPerJuridica_"]));
$enctactenumeracion->setnComTipo(validar($_POST["nComTipo_"]));
$enctactenumeracion->setnSerie(validar($_POST["nSerie_"]));
$enctactenumeracion->setNumero(validar($_POST["Numero_"]));
$rpta=$enctactenumeracion->Actualizar_ctactenumeracion();
return $rpta;
}

function CEliminar_ctactenumeracion(){
$enctactenumeracion=new Clase_ctactenumeracion();
$enctactenumeracion->setcPerJuridica($_GET["id"]);
$rpta=$enctactenumeracion->Eliminar_ctactenumeracion();
return $rpta;
}

function CRecuperar_ctactenumeracion(){
$enctactenumeracion=new Clase_ctactenumeracion();
$enctactenumeracion->setcPerJuridica($_GET["id"]);
$rpta=$enctactenumeracion->Recuperar_ctactenumeracion();
return $rpta;
}

function CListar_ctactenumeracion(){
$enctactenumeracion=new Clase_ctactenumeracion();
$rpta=$enctactenumeracion->Listar_ctactenumeracion();
return $rpta;
}

function CListadoSimple_ctactenumeracion(){
$enctactenumeracion=new Clase_ctactenumeracion();
$rpta=$enctactenumeracion->ListadoSimple_ctactenumeracion();
return $rpta;
}

function CBuscar_ctactenumeracion($id){
$enctactenumeracion=new Clase_ctactenumeracion();
$enctactenumeracion->setcPerJuridica($id);
$rpta=$enctactenumeracion->Buscar_ctactenumeracion();
return $rpta;}
?>