<?php
include_once "../../Modelado/Modelo_parparametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_parparametro(){
$enparparametro=new Clase_parparametro();
$enparparametro->setnParSrcCodigo(validar($_POST["nParSrcCodigo_"]));
$enparparametro->setnParSrcClase(validar($_POST["nParSrcClase_"]));
$enparparametro->setnParDstCodigo(validar($_POST["nParDstCodigo_"]));
$enparparametro->setnParDstClase(validar($_POST["nParDstClase_"]));
$enparparametro->setcValor(validar($_POST["cValor_"]));
$enparparametro->setnParParEstado(validar($_POST["nParParEstado_"]));
$rpta=$enparparametro->Insertar_parparametro();
return $rpta;
}

function CActualizar_parparametro(){
$enparparametro=new Clase_parparametro();
$enparparametro->setnParSrcCodigo(validar($_POST["nParSrcCodigo_"]));
$enparparametro->setnParSrcClase(validar($_POST["nParSrcClase_"]));
$enparparametro->setnParDstCodigo(validar($_POST["nParDstCodigo_"]));
$enparparametro->setnParDstClase(validar($_POST["nParDstClase_"]));
$enparparametro->setcValor(validar($_POST["cValor_"]));
$enparparametro->setnParParEstado(validar($_POST["nParParEstado_"]));
$rpta=$enparparametro->Actualizar_parparametro();
return $rpta;
}

function CEliminar_parparametro(){
$enparparametro=new Clase_parparametro();
$enparparametro->setnParSrcCodigo($_GET["id"]);
$rpta=$enparparametro->Eliminar_parparametro();
return $rpta;
}

function CRecuperar_parparametro(){
$enparparametro=new Clase_parparametro();
$enparparametro->setnParSrcCodigo($_GET["id"]);
$rpta=$enparparametro->Recuperar_parparametro();
return $rpta;
}

function CListar_parparametro(){
$enparparametro=new Clase_parparametro();
$rpta=$enparparametro->Listar_parparametro();
return $rpta;
}

function CListadoSimple_parparametro(){
$enparparametro=new Clase_parparametro();
$rpta=$enparparametro->ListadoSimple_parparametro();
return $rpta;
}

function CBuscar_parparametro($id){
$enparparametro=new Clase_parparametro();
$enparparametro->setnParSrcCodigo($id);
$rpta=$enparparametro->Buscar_parparametro();
return $rpta;}
?>