<?php
include_once "../../Modelado/Modelo_docidentifica.php"; 
include_once "../validacion.php"; 
function CRegistrar_docidentifica(){
$endocidentifica=new Clase_docidentifica();
$endocidentifica->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocidentifica->setnDocTipoNum(validar($_POST["nDocTipoNum_"]));
$endocidentifica->setcDocNDoc(validar($_POST["cDocNDoc_"]));
$rpta=$endocidentifica->Insertar_docidentifica();
return $rpta;
}

function CActualizar_docidentifica(){
$endocidentifica=new Clase_docidentifica();
$endocidentifica->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocidentifica->setnDocTipoNum(validar($_POST["nDocTipoNum_"]));
$endocidentifica->setcDocNDoc(validar($_POST["cDocNDoc_"]));
$rpta=$endocidentifica->Actualizar_docidentifica();
return $rpta;
}

function CEliminar_docidentifica(){
$endocidentifica=new Clase_docidentifica();
$endocidentifica->setcDocCodigo($_GET["id"]);
$rpta=$endocidentifica->Eliminar_docidentifica();
return $rpta;
}

function CRecuperar_docidentifica(){
$endocidentifica=new Clase_docidentifica();
$endocidentifica->setcDocCodigo($_GET["id"]);
$rpta=$endocidentifica->Recuperar_docidentifica();
return $rpta;
}

function CListar_docidentifica(){
$endocidentifica=new Clase_docidentifica();
$rpta=$endocidentifica->Listar_docidentifica();
return $rpta;
}

function CListadoSimple_docidentifica(){
$endocidentifica=new Clase_docidentifica();
$rpta=$endocidentifica->ListadoSimple_docidentifica();
return $rpta;
}

function CBuscar_docidentifica($id){
$endocidentifica=new Clase_docidentifica();
$endocidentifica->setcDocCodigo($id);
$rpta=$endocidentifica->Buscar_docidentifica();
return $rpta;}
?>