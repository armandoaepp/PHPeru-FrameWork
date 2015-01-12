<?php
include_once "../../Modelado/Modelo_parparext.php"; 
include_once "../validacion.php"; 
function CRegistrar_parparext(){
$enparparext=new Clase_parparext();
$enparparext->setnIntSrcCodigo(validar($_POST["nIntSrcCodigo_"]));
$enparparext->setnIntSrcClase(validar($_POST["nIntSrcClase_"]));
$enparparext->setnIntDstCodigo(validar($_POST["nIntDstCodigo_"]));
$enparparext->setnIntDstClase(validar($_POST["nIntDstClase_"]));
$enparparext->setnObjCodigo(validar($_POST["nObjCodigo_"]));
$enparparext->setnObjTipo(validar($_POST["nObjTipo_"]));
$enparparext->setcValor(validar($_POST["cValor_"]));
$rpta=$enparparext->Insertar_parparext();
return $rpta;
}

function CActualizar_parparext(){
$enparparext=new Clase_parparext();
$enparparext->setnIntSrcCodigo(validar($_POST["nIntSrcCodigo_"]));
$enparparext->setnIntSrcClase(validar($_POST["nIntSrcClase_"]));
$enparparext->setnIntDstCodigo(validar($_POST["nIntDstCodigo_"]));
$enparparext->setnIntDstClase(validar($_POST["nIntDstClase_"]));
$enparparext->setnObjCodigo(validar($_POST["nObjCodigo_"]));
$enparparext->setnObjTipo(validar($_POST["nObjTipo_"]));
$enparparext->setcValor(validar($_POST["cValor_"]));
$rpta=$enparparext->Actualizar_parparext();
return $rpta;
}

function CEliminar_parparext(){
$enparparext=new Clase_parparext();
$enparparext->setnIntSrcCodigo($_GET["id"]);
$rpta=$enparparext->Eliminar_parparext();
return $rpta;
}

function CRecuperar_parparext(){
$enparparext=new Clase_parparext();
$enparparext->setnIntSrcCodigo($_GET["id"]);
$rpta=$enparparext->Recuperar_parparext();
return $rpta;
}

function CListar_parparext(){
$enparparext=new Clase_parparext();
$rpta=$enparparext->Listar_parparext();
return $rpta;
}

function CListadoSimple_parparext(){
$enparparext=new Clase_parparext();
$rpta=$enparparext->ListadoSimple_parparext();
return $rpta;
}

function CBuscar_parparext($id){
$enparparext=new Clase_parparext();
$enparparext->setnIntSrcCodigo($id);
$rpta=$enparparext->Buscar_parparext();
return $rpta;}
?>