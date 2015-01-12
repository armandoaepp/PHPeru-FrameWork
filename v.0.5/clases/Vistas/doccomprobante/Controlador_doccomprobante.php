<?php
include_once "../../Modelado/Modelo_doccomprobante.php"; 
include_once "../validacion.php"; 
function CRegistrar_doccomprobante(){
$endoccomprobante=new Clase_doccomprobante();
$endoccomprobante->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endoccomprobante->setnTipo(validar($_POST["nTipo_"]));
$endoccomprobante->setnMoneda(validar($_POST["nMoneda_"]));
$endoccomprobante->setfmonto(validar($_POST["fmonto_"]));
$rpta=$endoccomprobante->Insertar_doccomprobante();
return $rpta;
}

function CActualizar_doccomprobante(){
$endoccomprobante=new Clase_doccomprobante();
$endoccomprobante->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endoccomprobante->setnTipo(validar($_POST["nTipo_"]));
$endoccomprobante->setnMoneda(validar($_POST["nMoneda_"]));
$endoccomprobante->setfmonto(validar($_POST["fmonto_"]));
$rpta=$endoccomprobante->Actualizar_doccomprobante();
return $rpta;
}

function CEliminar_doccomprobante(){
$endoccomprobante=new Clase_doccomprobante();
$endoccomprobante->setcDocCodigo($_GET["id"]);
$rpta=$endoccomprobante->Eliminar_doccomprobante();
return $rpta;
}

function CRecuperar_doccomprobante(){
$endoccomprobante=new Clase_doccomprobante();
$endoccomprobante->setcDocCodigo($_GET["id"]);
$rpta=$endoccomprobante->Recuperar_doccomprobante();
return $rpta;
}

function CListar_doccomprobante(){
$endoccomprobante=new Clase_doccomprobante();
$rpta=$endoccomprobante->Listar_doccomprobante();
return $rpta;
}

function CListadoSimple_doccomprobante(){
$endoccomprobante=new Clase_doccomprobante();
$rpta=$endoccomprobante->ListadoSimple_doccomprobante();
return $rpta;
}

function CBuscar_doccomprobante($id){
$endoccomprobante=new Clase_doccomprobante();
$endoccomprobante->setcDocCodigo($id);
$rpta=$endoccomprobante->Buscar_doccomprobante();
return $rpta;}
?>