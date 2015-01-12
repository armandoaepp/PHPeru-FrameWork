<?php
include_once "../../Modelado/Modelo_doccontenido.php"; 
include_once "../validacion.php"; 
function CRegistrar_doccontenido(){
$endoccontenido=new Clase_doccontenido();
$endoccontenido->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endoccontenido->setnDocParCodigo(validar($_POST["nDocParCodigo_"]));
$endoccontenido->setnDocParClase(validar($_POST["nDocParClase_"]));
$endoccontenido->setcDocConContenido(validar($_POST["cDocConContenido_"]));
$endoccontenido->setnDocConEstado(validar($_POST["nDocConEstado_"]));
$rpta=$endoccontenido->Insertar_doccontenido();
return $rpta;
}

function CActualizar_doccontenido(){
$endoccontenido=new Clase_doccontenido();
$endoccontenido->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endoccontenido->setnDocParCodigo(validar($_POST["nDocParCodigo_"]));
$endoccontenido->setnDocParClase(validar($_POST["nDocParClase_"]));
$endoccontenido->setcDocConContenido(validar($_POST["cDocConContenido_"]));
$endoccontenido->setnDocConEstado(validar($_POST["nDocConEstado_"]));
$rpta=$endoccontenido->Actualizar_doccontenido();
return $rpta;
}

function CEliminar_doccontenido(){
$endoccontenido=new Clase_doccontenido();
$endoccontenido->setcDocCodigo($_GET["id"]);
$rpta=$endoccontenido->Eliminar_doccontenido();
return $rpta;
}

function CRecuperar_doccontenido(){
$endoccontenido=new Clase_doccontenido();
$endoccontenido->setcDocCodigo($_GET["id"]);
$rpta=$endoccontenido->Recuperar_doccontenido();
return $rpta;
}

function CListar_doccontenido(){
$endoccontenido=new Clase_doccontenido();
$rpta=$endoccontenido->Listar_doccontenido();
return $rpta;
}

function CListadoSimple_doccontenido(){
$endoccontenido=new Clase_doccontenido();
$rpta=$endoccontenido->ListadoSimple_doccontenido();
return $rpta;
}

function CBuscar_doccontenido($id){
$endoccontenido=new Clase_doccontenido();
$endoccontenido->setcDocCodigo($id);
$rpta=$endoccontenido->Buscar_doccontenido();
return $rpta;}
?>