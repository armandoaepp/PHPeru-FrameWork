<?php
include_once "../../Modelado/Modelo_perubigeo.php"; 
include_once "../validacion.php"; 
function CRegistrar_perubigeo(){
$enperubigeo=new Clase_perubigeo();
$enperubigeo->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperubigeo->setnPerUbiCodigo(validar($_POST["nPerUbiCodigo_"]));
$enperubigeo->setnPerUbiGlosa(validar($_POST["nPerUbiGlosa_"]));
$enperubigeo->setnPerUbiEstado(validar($_POST["nPerUbiEstado_"]));
$rpta=$enperubigeo->Insertar_perubigeo();
return $rpta;
}

function CActualizar_perubigeo(){
$enperubigeo=new Clase_perubigeo();
$enperubigeo->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperubigeo->setnPerUbiCodigo(validar($_POST["nPerUbiCodigo_"]));
$enperubigeo->setnPerUbiGlosa(validar($_POST["nPerUbiGlosa_"]));
$enperubigeo->setnPerUbiEstado(validar($_POST["nPerUbiEstado_"]));
$rpta=$enperubigeo->Actualizar_perubigeo();
return $rpta;
}

function CEliminar_perubigeo(){
$enperubigeo=new Clase_perubigeo();
$enperubigeo->setcPerCodigo($_GET["id"]);
$rpta=$enperubigeo->Eliminar_perubigeo();
return $rpta;
}

function CRecuperar_perubigeo(){
$enperubigeo=new Clase_perubigeo();
$enperubigeo->setcPerCodigo($_GET["id"]);
$rpta=$enperubigeo->Recuperar_perubigeo();
return $rpta;
}

function CListar_perubigeo(){
$enperubigeo=new Clase_perubigeo();
$rpta=$enperubigeo->Listar_perubigeo();
return $rpta;
}

function CListadoSimple_perubigeo(){
$enperubigeo=new Clase_perubigeo();
$rpta=$enperubigeo->ListadoSimple_perubigeo();
return $rpta;
}

function CBuscar_perubigeo($id){
$enperubigeo=new Clase_perubigeo();
$enperubigeo->setcPerCodigo($id);
$rpta=$enperubigeo->Buscar_perubigeo();
return $rpta;}
?>