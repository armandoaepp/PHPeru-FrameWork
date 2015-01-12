<?php
include_once "../../Modelado/Modelo_docref.php"; 
include_once "../validacion.php"; 
function CRegistrar_docref(){
$endocref=new Clase_docref();
$endocref->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocref->setcDocRefCodigo(validar($_POST["cDocRefCodigo_"]));
$rpta=$endocref->Insertar_docref();
return $rpta;
}

function CActualizar_docref(){
$endocref=new Clase_docref();
$endocref->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocref->setcDocRefCodigo(validar($_POST["cDocRefCodigo_"]));
$rpta=$endocref->Actualizar_docref();
return $rpta;
}

function CEliminar_docref(){
$endocref=new Clase_docref();
$endocref->setcDocCodigo($_GET["id"]);
$rpta=$endocref->Eliminar_docref();
return $rpta;
}

function CRecuperar_docref(){
$endocref=new Clase_docref();
$endocref->setcDocCodigo($_GET["id"]);
$rpta=$endocref->Recuperar_docref();
return $rpta;
}

function CListar_docref(){
$endocref=new Clase_docref();
$rpta=$endocref->Listar_docref();
return $rpta;
}

function CListadoSimple_docref(){
$endocref=new Clase_docref();
$rpta=$endocref->ListadoSimple_docref();
return $rpta;
}

function CBuscar_docref($id){
$endocref=new Clase_docref();
$endocref->setcDocCodigo($id);
$rpta=$endocref->Buscar_docref();
return $rpta;}
?>