<?php
include_once "../../Modelado/Modelo_perdireccion.php"; 
include_once "../validacion.php"; 
function CRegistrar_perdireccion(){
$enperdireccion=new Clase_perdireccion();
$enperdireccion->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperdireccion->setnUbiCodigo(validar($_POST["nUbiCodigo_"]));
$enperdireccion->setnPerDirTipo(validar($_POST["nPerDirTipo_"]));
$enperdireccion->setcPerDirDescripcion(validar($_POST["cPerDirDescripcion_"]));
$enperdireccion->setcPerDirGlosa(validar($_POST["cPerDirGlosa_"]));
$enperdireccion->setnPerDirEstado(validar($_POST["nPerDirEstado_"]));
$rpta=$enperdireccion->Insertar_perdireccion();
return $rpta;
}

function CActualizar_perdireccion(){
$enperdireccion=new Clase_perdireccion();
$enperdireccion->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperdireccion->setnUbiCodigo(validar($_POST["nUbiCodigo_"]));
$enperdireccion->setnPerDirTipo(validar($_POST["nPerDirTipo_"]));
$enperdireccion->setcPerDirDescripcion(validar($_POST["cPerDirDescripcion_"]));
$enperdireccion->setcPerDirGlosa(validar($_POST["cPerDirGlosa_"]));
$enperdireccion->setnPerDirEstado(validar($_POST["nPerDirEstado_"]));
$rpta=$enperdireccion->Actualizar_perdireccion();
return $rpta;
}

function CEliminar_perdireccion(){
$enperdireccion=new Clase_perdireccion();
$enperdireccion->setcPerCodigo($_GET["id"]);
$rpta=$enperdireccion->Eliminar_perdireccion();
return $rpta;
}

function CRecuperar_perdireccion(){
$enperdireccion=new Clase_perdireccion();
$enperdireccion->setcPerCodigo($_GET["id"]);
$rpta=$enperdireccion->Recuperar_perdireccion();
return $rpta;
}

function CListar_perdireccion(){
$enperdireccion=new Clase_perdireccion();
$rpta=$enperdireccion->Listar_perdireccion();
return $rpta;
}

function CListadoSimple_perdireccion(){
$enperdireccion=new Clase_perdireccion();
$rpta=$enperdireccion->ListadoSimple_perdireccion();
return $rpta;
}

function CBuscar_perdireccion($id){
$enperdireccion=new Clase_perdireccion();
$enperdireccion->setcPerCodigo($id);
$rpta=$enperdireccion->Buscar_perdireccion();
return $rpta;}
?>