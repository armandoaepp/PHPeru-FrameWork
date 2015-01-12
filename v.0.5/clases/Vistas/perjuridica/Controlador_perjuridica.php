<?php
include_once "../../Modelado/Modelo_perjuridica.php"; 
include_once "../validacion.php"; 
function CRegistrar_perjuridica(){
$enperjuridica=new Clase_perjuridica();
$enperjuridica->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperjuridica->setnPerJurRubro(validar($_POST["nPerJurRubro_"]));
$enperjuridica->setcPerJurDescripcion(validar($_POST["cPerJurDescripcion_"]));
$enperjuridica->setnPerEmpresa(validar($_POST["nPerEmpresa_"]));
$rpta=$enperjuridica->Insertar_perjuridica();
return $rpta;
}

function CActualizar_perjuridica(){
$enperjuridica=new Clase_perjuridica();
$enperjuridica->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperjuridica->setnPerJurRubro(validar($_POST["nPerJurRubro_"]));
$enperjuridica->setcPerJurDescripcion(validar($_POST["cPerJurDescripcion_"]));
$enperjuridica->setnPerEmpresa(validar($_POST["nPerEmpresa_"]));
$rpta=$enperjuridica->Actualizar_perjuridica();
return $rpta;
}

function CEliminar_perjuridica(){
$enperjuridica=new Clase_perjuridica();
$enperjuridica->setcPerCodigo($_GET["id"]);
$rpta=$enperjuridica->Eliminar_perjuridica();
return $rpta;
}

function CRecuperar_perjuridica(){
$enperjuridica=new Clase_perjuridica();
$enperjuridica->setcPerCodigo($_GET["id"]);
$rpta=$enperjuridica->Recuperar_perjuridica();
return $rpta;
}

function CListar_perjuridica(){
$enperjuridica=new Clase_perjuridica();
$rpta=$enperjuridica->Listar_perjuridica();
return $rpta;
}

function CListadoSimple_perjuridica(){
$enperjuridica=new Clase_perjuridica();
$rpta=$enperjuridica->ListadoSimple_perjuridica();
return $rpta;
}

function CBuscar_perjuridica($id){
$enperjuridica=new Clase_perjuridica();
$enperjuridica->setcPerCodigo($id);
$rpta=$enperjuridica->Buscar_perjuridica();
return $rpta;}
?>