<?php
include_once "../../Modelado/Modelo_parametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$enparametro->setnParClase(validar($_POST["nParClase_"]));
$enparametro->setcParJerarquia(validar($_POST["cParJerarquia_"]));
$enparametro->setcParNombre(validar($_POST["cParNombre_"]));
$enparametro->setcParDescripcion(validar($_POST["cParDescripcion_"]));
$enparametro->setnParEstado(validar($_POST["nParEstado_"]));
$rpta=$enparametro->Insertar_parametro();
return $rpta;
}

function CActualizar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setnParCodigo(validar($_POST["nParCodigo_"]));
$enparametro->setnParClase(validar($_POST["nParClase_"]));
$enparametro->setcParJerarquia(validar($_POST["cParJerarquia_"]));
$enparametro->setcParNombre(validar($_POST["cParNombre_"]));
$enparametro->setcParDescripcion(validar($_POST["cParDescripcion_"]));
$enparametro->setnParEstado(validar($_POST["nParEstado_"]));
$rpta=$enparametro->Actualizar_parametro();
return $rpta;
}

function CEliminar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setnParCodigo($_GET["id"]);
$rpta=$enparametro->Eliminar_parametro();
return $rpta;
}

function CRecuperar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setnParCodigo($_GET["id"]);
$rpta=$enparametro->Recuperar_parametro();
return $rpta;
}

function CListar_parametro(){
$enparametro=new Clase_parametro();
$rpta=$enparametro->Listar_parametro();
return $rpta;
}

function CListadoSimple_parametro(){
$enparametro=new Clase_parametro();
$rpta=$enparametro->ListadoSimple_parametro();
return $rpta;
}

function CBuscar_parametro($id){
$enparametro=new Clase_parametro();
$enparametro->setnParCodigo($id);
$rpta=$enparametro->Buscar_parametro();
return $rpta;}
?>