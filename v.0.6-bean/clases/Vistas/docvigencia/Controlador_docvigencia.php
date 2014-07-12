<?php
include_once "../../Modelado/Modelo_docvigencia.php"; 
include_once "../validacion.php"; 
function CRegistrar_docvigencia(){
$endocvigencia=new Clase_docvigencia();
$endocvigencia->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocvigencia->setdFecha(validar($_POST["dFecha_"]));
$endocvigencia->setdFechaFin(validar($_POST["dFechaFin_"]));
$endocvigencia->setdHora(validar($_POST["dHora_"]));
$rpta=$endocvigencia->Insertar_docvigencia();
return $rpta;
}

function CActualizar_docvigencia(){
$endocvigencia=new Clase_docvigencia();
$endocvigencia->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocvigencia->setdFecha(validar($_POST["dFecha_"]));
$endocvigencia->setdFechaFin(validar($_POST["dFechaFin_"]));
$endocvigencia->setdHora(validar($_POST["dHora_"]));
$rpta=$endocvigencia->Actualizar_docvigencia();
return $rpta;
}

function CEliminar_docvigencia(){
$endocvigencia=new Clase_docvigencia();
$endocvigencia->setcDocCodigo($_GET["id"]);
$rpta=$endocvigencia->Eliminar_docvigencia();
return $rpta;
}

function CRecuperar_docvigencia(){
$endocvigencia=new Clase_docvigencia();
$endocvigencia->setcDocCodigo($_GET["id"]);
$rpta=$endocvigencia->Recuperar_docvigencia();
return $rpta;
}

function CListar_docvigencia(){
$endocvigencia=new Clase_docvigencia();
$rpta=$endocvigencia->Listar_docvigencia();
return $rpta;
}

function CListadoSimple_docvigencia(){
$endocvigencia=new Clase_docvigencia();
$rpta=$endocvigencia->ListadoSimple_docvigencia();
return $rpta;
}

function CBuscar_docvigencia($id){
$endocvigencia=new Clase_docvigencia();
$endocvigencia->setcDocCodigo($id);
$rpta=$endocvigencia->Buscar_docvigencia();
return $rpta;}
?>