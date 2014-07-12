<?php
include_once "../../Modelado/Modelo_documento.php"; 
include_once "../validacion.php"; 
function CRegistrar_documento(){
$endocumento=new Clase_documento();
$endocumento->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocumento->setdDocFecha(validar($_POST["dDocFecha_"]));
$endocumento->setcDocObservacion(validar($_POST["cDocObservacion_"]));
$endocumento->setnDocTipo(validar($_POST["nDocTipo_"]));
$endocumento->setnDocEstado(validar($_POST["nDocEstado_"]));
$rpta=$endocumento->Insertar_documento();
return $rpta;
}

function CActualizar_documento(){
$endocumento=new Clase_documento();
$endocumento->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocumento->setdDocFecha(validar($_POST["dDocFecha_"]));
$endocumento->setcDocObservacion(validar($_POST["cDocObservacion_"]));
$endocumento->setnDocTipo(validar($_POST["nDocTipo_"]));
$endocumento->setnDocEstado(validar($_POST["nDocEstado_"]));
$rpta=$endocumento->Actualizar_documento();
return $rpta;
}

function CEliminar_documento(){
$endocumento=new Clase_documento();
$endocumento->setcDocCodigo($_GET["id"]);
$rpta=$endocumento->Eliminar_documento();
return $rpta;
}

function CRecuperar_documento(){
$endocumento=new Clase_documento();
$endocumento->setcDocCodigo($_GET["id"]);
$rpta=$endocumento->Recuperar_documento();
return $rpta;
}

function CListar_documento(){
$endocumento=new Clase_documento();
$rpta=$endocumento->Listar_documento();
return $rpta;
}

function CListadoSimple_documento(){
$endocumento=new Clase_documento();
$rpta=$endocumento->ListadoSimple_documento();
return $rpta;
}

function CBuscar_documento($id){
$endocumento=new Clase_documento();
$endocumento->setcDocCodigo($id);
$rpta=$endocumento->Buscar_documento();
return $rpta;}
?>