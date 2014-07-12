<?php
include_once "../../Modelado/Modelo_docestado.php"; 
include_once "../validacion.php"; 
function CRegistrar_docestado(){
$endocestado=new Clase_docestado();
$endocestado->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocestado->setnDocParCodigo(validar($_POST["nDocParCodigo_"]));
$endocestado->setnDocParClase(validar($_POST["nDocParClase_"]));
$endocestado->setdDocEstFecha(validar($_POST["dDocEstFecha_"]));
$endocestado->setcDocEstGlosa(validar($_POST["cDocEstGlosa_"]));
$rpta=$endocestado->Insertar_docestado();
return $rpta;
}

function CActualizar_docestado(){
$endocestado=new Clase_docestado();
$endocestado->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocestado->setnDocParCodigo(validar($_POST["nDocParCodigo_"]));
$endocestado->setnDocParClase(validar($_POST["nDocParClase_"]));
$endocestado->setdDocEstFecha(validar($_POST["dDocEstFecha_"]));
$endocestado->setcDocEstGlosa(validar($_POST["cDocEstGlosa_"]));
$rpta=$endocestado->Actualizar_docestado();
return $rpta;
}

function CEliminar_docestado(){
$endocestado=new Clase_docestado();
$endocestado->setcDocCodigo($_GET["id"]);
$rpta=$endocestado->Eliminar_docestado();
return $rpta;
}

function CRecuperar_docestado(){
$endocestado=new Clase_docestado();
$endocestado->setcDocCodigo($_GET["id"]);
$rpta=$endocestado->Recuperar_docestado();
return $rpta;
}

function CListar_docestado(){
$endocestado=new Clase_docestado();
$rpta=$endocestado->Listar_docestado();
return $rpta;
}

function CListadoSimple_docestado(){
$endocestado=new Clase_docestado();
$rpta=$endocestado->ListadoSimple_docestado();
return $rpta;
}

function CBuscar_docestado($id){
$endocestado=new Clase_docestado();
$endocestado->setcDocCodigo($id);
$rpta=$endocestado->Buscar_docestado();
return $rpta;}
?>