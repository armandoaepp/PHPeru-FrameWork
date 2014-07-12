<?php
include_once "../../Modelado/Modelo_perimagen.php"; 
include_once "../validacion.php"; 
function CRegistrar_perimagen(){
$enperimagen=new Clase_perimagen();
$enperimagen->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperimagen->setcPerRuta(validar($_POST["cPerRuta_"]));
$enperimagen->setnPerTipo(validar($_POST["nPerTipo_"]));
$enperimagen->setnPerEstado(validar($_POST["nPerEstado_"]));
$rpta=$enperimagen->Insertar_perimagen();
return $rpta;
}

function CActualizar_perimagen(){
$enperimagen=new Clase_perimagen();
$enperimagen->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperimagen->setcPerRuta(validar($_POST["cPerRuta_"]));
$enperimagen->setnPerTipo(validar($_POST["nPerTipo_"]));
$enperimagen->setnPerEstado(validar($_POST["nPerEstado_"]));
$rpta=$enperimagen->Actualizar_perimagen();
return $rpta;
}

function CEliminar_perimagen(){
$enperimagen=new Clase_perimagen();
$enperimagen->setcPerCodigo($_GET["id"]);
$rpta=$enperimagen->Eliminar_perimagen();
return $rpta;
}

function CRecuperar_perimagen(){
$enperimagen=new Clase_perimagen();
$enperimagen->setcPerCodigo($_GET["id"]);
$rpta=$enperimagen->Recuperar_perimagen();
return $rpta;
}

function CListar_perimagen(){
$enperimagen=new Clase_perimagen();
$rpta=$enperimagen->Listar_perimagen();
return $rpta;
}

function CListadoSimple_perimagen(){
$enperimagen=new Clase_perimagen();
$rpta=$enperimagen->ListadoSimple_perimagen();
return $rpta;
}

function CBuscar_perimagen($id){
$enperimagen=new Clase_perimagen();
$enperimagen->setcPerCodigo($id);
$rpta=$enperimagen->Buscar_perimagen();
return $rpta;}
?>