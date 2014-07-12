<?php
include_once "../../Modelado/Modelo_perparametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_perparametro(){
$enperparametro=new Clase_perparametro();
$enperparametro->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$enperparametro->setnParClase(validar($_POST["nParClase_"]));
$enperparametro->setnPerParValor(validar($_POST["nPerParValor_"]));
$enperparametro->setcPerParGlosa(validar($_POST["cPerParGlosa_"]));
$enperparametro->setnPerParEstado(validar($_POST["nPerParEstado_"]));
$rpta=$enperparametro->Insertar_perparametro();
return $rpta;
}

function CActualizar_perparametro(){
$enperparametro=new Clase_perparametro();
$enperparametro->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$enperparametro->setnParClase(validar($_POST["nParClase_"]));
$enperparametro->setnPerParValor(validar($_POST["nPerParValor_"]));
$enperparametro->setcPerParGlosa(validar($_POST["cPerParGlosa_"]));
$enperparametro->setnPerParEstado(validar($_POST["nPerParEstado_"]));
$rpta=$enperparametro->Actualizar_perparametro();
return $rpta;
}

function CEliminar_perparametro(){
$enperparametro=new Clase_perparametro();
$enperparametro->setcPerCodigo($_GET["id"]);
$rpta=$enperparametro->Eliminar_perparametro();
return $rpta;
}

function CRecuperar_perparametro(){
$enperparametro=new Clase_perparametro();
$enperparametro->setcPerCodigo($_GET["id"]);
$rpta=$enperparametro->Recuperar_perparametro();
return $rpta;
}

function CListar_perparametro(){
$enperparametro=new Clase_perparametro();
$rpta=$enperparametro->Listar_perparametro();
return $rpta;
}

function CListadoSimple_perparametro(){
$enperparametro=new Clase_perparametro();
$rpta=$enperparametro->ListadoSimple_perparametro();
return $rpta;
}

function CBuscar_perparametro($id){
$enperparametro=new Clase_perparametro();
$enperparametro->setcPerCodigo($id);
$rpta=$enperparametro->Buscar_perparametro();
return $rpta;}
?>