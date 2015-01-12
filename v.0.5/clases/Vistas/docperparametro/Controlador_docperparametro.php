<?php
include_once "../../Modelado/Modelo_docperparametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_docperparametro(){
$endocperparametro=new Clase_docperparametro();
$endocperparametro->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocperparametro->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$endocperparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$endocperparametro->setnParClase(validar($_POST["nParClase_"]));
$endocperparametro->setcDocPerParValor(validar($_POST["cDocPerParValor_"]));
$endocperparametro->setcDocPerParGlosa(validar($_POST["cDocPerParGlosa_"]));
$endocperparametro->setnDocPerParEstado(validar($_POST["nDocPerParEstado_"]));
$rpta=$endocperparametro->Insertar_docperparametro();
return $rpta;
}

function CActualizar_docperparametro(){
$endocperparametro=new Clase_docperparametro();
$endocperparametro->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocperparametro->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$endocperparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$endocperparametro->setnParClase(validar($_POST["nParClase_"]));
$endocperparametro->setcDocPerParValor(validar($_POST["cDocPerParValor_"]));
$endocperparametro->setcDocPerParGlosa(validar($_POST["cDocPerParGlosa_"]));
$endocperparametro->setnDocPerParEstado(validar($_POST["nDocPerParEstado_"]));
$rpta=$endocperparametro->Actualizar_docperparametro();
return $rpta;
}

function CEliminar_docperparametro(){
$endocperparametro=new Clase_docperparametro();
$endocperparametro->setcDocCodigo($_GET["id"]);
$rpta=$endocperparametro->Eliminar_docperparametro();
return $rpta;
}

function CRecuperar_docperparametro(){
$endocperparametro=new Clase_docperparametro();
$endocperparametro->setcDocCodigo($_GET["id"]);
$rpta=$endocperparametro->Recuperar_docperparametro();
return $rpta;
}

function CListar_docperparametro(){
$endocperparametro=new Clase_docperparametro();
$rpta=$endocperparametro->Listar_docperparametro();
return $rpta;
}

function CListadoSimple_docperparametro(){
$endocperparametro=new Clase_docperparametro();
$rpta=$endocperparametro->ListadoSimple_docperparametro();
return $rpta;
}

function CBuscar_docperparametro($id){
$endocperparametro=new Clase_docperparametro();
$endocperparametro->setcDocCodigo($id);
$rpta=$endocperparametro->Buscar_docperparametro();
return $rpta;}
?>