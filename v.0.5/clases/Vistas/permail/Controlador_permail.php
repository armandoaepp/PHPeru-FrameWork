<?php
include_once "../../Modelado/Modelo_permail.php"; 
include_once "../validacion.php"; 
function CRegistrar_permail(){
$enpermail=new Clase_permail();
$enpermail->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpermail->setnPerMailItem(validar($_POST["nPerMailItem_"]));
$enpermail->setcPerMail(validar($_POST["cPerMail_"]));
$enpermail->setnPerMailEstado(validar($_POST["nPerMailEstado_"]));
$rpta=$enpermail->Insertar_permail();
return $rpta;
}

function CActualizar_permail(){
$enpermail=new Clase_permail();
$enpermail->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpermail->setnPerMailItem(validar($_POST["nPerMailItem_"]));
$enpermail->setcPerMail(validar($_POST["cPerMail_"]));
$enpermail->setnPerMailEstado(validar($_POST["nPerMailEstado_"]));
$rpta=$enpermail->Actualizar_permail();
return $rpta;
}

function CEliminar_permail(){
$enpermail=new Clase_permail();
$enpermail->setcPerCodigo($_GET["id"]);
$rpta=$enpermail->Eliminar_permail();
return $rpta;
}

function CRecuperar_permail(){
$enpermail=new Clase_permail();
$enpermail->setcPerCodigo($_GET["id"]);
$rpta=$enpermail->Recuperar_permail();
return $rpta;
}

function CListar_permail(){
$enpermail=new Clase_permail();
$rpta=$enpermail->Listar_permail();
return $rpta;
}

function CListadoSimple_permail(){
$enpermail=new Clase_permail();
$rpta=$enpermail->ListadoSimple_permail();
return $rpta;
}

function CBuscar_permail($id){
$enpermail=new Clase_permail();
$enpermail->setcPerCodigo($id);
$rpta=$enpermail->Buscar_permail();
return $rpta;}
?>