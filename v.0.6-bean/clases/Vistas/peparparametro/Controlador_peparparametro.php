<?php
include_once "../../Modelado/Modelo_peparparametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_peparparametro(){
$enpeparparametro=new Clase_peparparametro();
$enpeparparametro->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpeparparametro->setnParSrcCodigo(validar($_POST["nParSrcCodigo_"]));
$enpeparparametro->setnParSrcClase(validar($_POST["nParSrcClase_"]));
$enpeparparametro->setnParDstCodigo(validar($_POST["nParDstCodigo_"]));
$enpeparparametro->setnParDstClase(validar($_POST["nParDstClase_"]));
$enpeparparametro->setcParParValor(validar($_POST["cParParValor_"]));
$enpeparparametro->setcParParGlosa(validar($_POST["cParParGlosa_"]));
$rpta=$enpeparparametro->Insertar_peparparametro();
return $rpta;
}

function CActualizar_peparparametro(){
$enpeparparametro=new Clase_peparparametro();
$enpeparparametro->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpeparparametro->setnParSrcCodigo(validar($_POST["nParSrcCodigo_"]));
$enpeparparametro->setnParSrcClase(validar($_POST["nParSrcClase_"]));
$enpeparparametro->setnParDstCodigo(validar($_POST["nParDstCodigo_"]));
$enpeparparametro->setnParDstClase(validar($_POST["nParDstClase_"]));
$enpeparparametro->setcParParValor(validar($_POST["cParParValor_"]));
$enpeparparametro->setcParParGlosa(validar($_POST["cParParGlosa_"]));
$rpta=$enpeparparametro->Actualizar_peparparametro();
return $rpta;
}

function CEliminar_peparparametro(){
$enpeparparametro=new Clase_peparparametro();
$enpeparparametro->setcPerCodigo($_GET["id"]);
$rpta=$enpeparparametro->Eliminar_peparparametro();
return $rpta;
}

function CRecuperar_peparparametro(){
$enpeparparametro=new Clase_peparparametro();
$enpeparparametro->setcPerCodigo($_GET["id"]);
$rpta=$enpeparparametro->Recuperar_peparparametro();
return $rpta;
}

function CListar_peparparametro(){
$enpeparparametro=new Clase_peparparametro();
$rpta=$enpeparparametro->Listar_peparparametro();
return $rpta;
}

function CListadoSimple_peparparametro(){
$enpeparparametro=new Clase_peparparametro();
$rpta=$enpeparparametro->ListadoSimple_peparparametro();
return $rpta;
}

function CBuscar_peparparametro($id){
$enpeparparametro=new Clase_peparparametro();
$enpeparparametro->setcPerCodigo($id);
$rpta=$enpeparparametro->Buscar_peparparametro();
return $rpta;}
?>