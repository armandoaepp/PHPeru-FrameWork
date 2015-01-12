<?php
include_once "../../Modelado/Modelo_docparametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_docparametro(){
$endocparametro=new Clase_docparametro();
$endocparametro->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocparametro->setnParClase(validar($_POST["nParClase_"]));
$endocparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$endocparametro->setcDocParObservacion(validar($_POST["cDocParObservacion_"]));
$rpta=$endocparametro->Insertar_docparametro();
return $rpta;
}

function CActualizar_docparametro(){
$endocparametro=new Clase_docparametro();
$endocparametro->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocparametro->setnParClase(validar($_POST["nParClase_"]));
$endocparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$endocparametro->setcDocParObservacion(validar($_POST["cDocParObservacion_"]));
$rpta=$endocparametro->Actualizar_docparametro();
return $rpta;
}

function CEliminar_docparametro(){
$endocparametro=new Clase_docparametro();
$endocparametro->setcDocCodigo($_GET["id"]);
$rpta=$endocparametro->Eliminar_docparametro();
return $rpta;
}

function CRecuperar_docparametro(){
$endocparametro=new Clase_docparametro();
$endocparametro->setcDocCodigo($_GET["id"]);
$rpta=$endocparametro->Recuperar_docparametro();
return $rpta;
}

function CListar_docparametro(){
$endocparametro=new Clase_docparametro();
$rpta=$endocparametro->Listar_docparametro();
return $rpta;
}

function CListadoSimple_docparametro(){
$endocparametro=new Clase_docparametro();
$rpta=$endocparametro->ListadoSimple_docparametro();
return $rpta;
}

function CBuscar_docparametro($id){
$endocparametro=new Clase_docparametro();
$endocparametro->setcDocCodigo($id);
$rpta=$endocparametro->Buscar_docparametro();
return $rpta;}
?>