<?php
include_once "../../Modelado/Modelo_docpersona.php"; 
include_once "../validacion.php"; 
function CRegistrar_docpersona(){
$endocpersona=new Clase_docpersona();
$endocpersona->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocpersona->setnDocPerTipo(validar($_POST["nDocPerTipo_"]));
$endocpersona->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$endocpersona->setnPerRelacion(validar($_POST["nPerRelacion_"]));
$endocpersona->setnDocTipo(validar($_POST["nDocTipo_"]));
$rpta=$endocpersona->Insertar_docpersona();
return $rpta;
}

function CActualizar_docpersona(){
$endocpersona=new Clase_docpersona();
$endocpersona->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocpersona->setnDocPerTipo(validar($_POST["nDocPerTipo_"]));
$endocpersona->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$endocpersona->setnPerRelacion(validar($_POST["nPerRelacion_"]));
$endocpersona->setnDocTipo(validar($_POST["nDocTipo_"]));
$rpta=$endocpersona->Actualizar_docpersona();
return $rpta;
}

function CEliminar_docpersona(){
$endocpersona=new Clase_docpersona();
$endocpersona->setcDocCodigo($_GET["id"]);
$rpta=$endocpersona->Eliminar_docpersona();
return $rpta;
}

function CRecuperar_docpersona(){
$endocpersona=new Clase_docpersona();
$endocpersona->setcDocCodigo($_GET["id"]);
$rpta=$endocpersona->Recuperar_docpersona();
return $rpta;
}

function CListar_docpersona(){
$endocpersona=new Clase_docpersona();
$rpta=$endocpersona->Listar_docpersona();
return $rpta;
}

function CListadoSimple_docpersona(){
$endocpersona=new Clase_docpersona();
$rpta=$endocpersona->ListadoSimple_docpersona();
return $rpta;
}

function CBuscar_docpersona($id){
$endocpersona=new Clase_docpersona();
$endocpersona->setcDocCodigo($id);
$rpta=$endocpersona->Buscar_docpersona();
return $rpta;}
?>