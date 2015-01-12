<?php
include_once "../../Modelado/Modelo_docparparametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_docparparametro(){
$endocparparametro=new Clase_docparparametro();
$endocparparametro->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocparparametro->setnParSrcCodigo(validar($_POST["nParSrcCodigo_"]));
$endocparparametro->setnParSrcClase(validar($_POST["nParSrcClase_"]));
$endocparparametro->setnParDstCodigo(validar($_POST["nParDstCodigo_"]));
$endocparparametro->setnParDstClase(validar($_POST["nParDstClase_"]));
$endocparparametro->setcParParValor(validar($_POST["cParParValor_"]));
$endocparparametro->setcParParGlosa(validar($_POST["cParParGlosa_"]));
$rpta=$endocparparametro->Insertar_docparparametro();
return $rpta;
}

function CActualizar_docparparametro(){
$endocparparametro=new Clase_docparparametro();
$endocparparametro->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocparparametro->setnParSrcCodigo(validar($_POST["nParSrcCodigo_"]));
$endocparparametro->setnParSrcClase(validar($_POST["nParSrcClase_"]));
$endocparparametro->setnParDstCodigo(validar($_POST["nParDstCodigo_"]));
$endocparparametro->setnParDstClase(validar($_POST["nParDstClase_"]));
$endocparparametro->setcParParValor(validar($_POST["cParParValor_"]));
$endocparparametro->setcParParGlosa(validar($_POST["cParParGlosa_"]));
$rpta=$endocparparametro->Actualizar_docparparametro();
return $rpta;
}

function CEliminar_docparparametro(){
$endocparparametro=new Clase_docparparametro();
$endocparparametro->setcDocCodigo($_GET["id"]);
$rpta=$endocparparametro->Eliminar_docparparametro();
return $rpta;
}

function CRecuperar_docparparametro(){
$endocparparametro=new Clase_docparparametro();
$endocparparametro->setcDocCodigo($_GET["id"]);
$rpta=$endocparparametro->Recuperar_docparparametro();
return $rpta;
}

function CListar_docparparametro(){
$endocparparametro=new Clase_docparparametro();
$rpta=$endocparparametro->Listar_docparparametro();
return $rpta;
}

function CListadoSimple_docparparametro(){
$endocparparametro=new Clase_docparparametro();
$rpta=$endocparparametro->ListadoSimple_docparparametro();
return $rpta;
}

function CBuscar_docparparametro($id){
$endocparparametro=new Clase_docparparametro();
$endocparparametro->setcDocCodigo($id);
$rpta=$endocparparametro->Buscar_docparparametro();
return $rpta;}
?>