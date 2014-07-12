<?php
include_once "../../Modelado/Modelo_perrelacion.php"; 
include_once "../validacion.php"; 
function CRegistrar_perrelacion(){
$enperrelacion=new Clase_perrelacion();
$enperrelacion->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperrelacion->setnPerRelTipo(validar($_POST["nPerRelTipo_"]));
$enperrelacion->setcPerJuridica(validar($_POST["cPerJuridica_"]));
$enperrelacion->setdPerRelacion(validar($_POST["dPerRelacion_"]));
$enperrelacion->setcPerObservacion(validar($_POST["cPerObservacion_"]));
$enperrelacion->setnPerRelEstado(validar($_POST["nPerRelEstado_"]));
$rpta=$enperrelacion->Insertar_perrelacion();
return $rpta;
}

function CActualizar_perrelacion(){
$enperrelacion=new Clase_perrelacion();
$enperrelacion->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperrelacion->setnPerRelTipo(validar($_POST["nPerRelTipo_"]));
$enperrelacion->setcPerJuridica(validar($_POST["cPerJuridica_"]));
$enperrelacion->setdPerRelacion(validar($_POST["dPerRelacion_"]));
$enperrelacion->setcPerObservacion(validar($_POST["cPerObservacion_"]));
$enperrelacion->setnPerRelEstado(validar($_POST["nPerRelEstado_"]));
$rpta=$enperrelacion->Actualizar_perrelacion();
return $rpta;
}

function CEliminar_perrelacion(){
$enperrelacion=new Clase_perrelacion();
$enperrelacion->setcPerCodigo($_GET["id"]);
$rpta=$enperrelacion->Eliminar_perrelacion();
return $rpta;
}

function CRecuperar_perrelacion(){
$enperrelacion=new Clase_perrelacion();
$enperrelacion->setcPerCodigo($_GET["id"]);
$rpta=$enperrelacion->Recuperar_perrelacion();
return $rpta;
}

function CListar_perrelacion(){
$enperrelacion=new Clase_perrelacion();
$rpta=$enperrelacion->Listar_perrelacion();
return $rpta;
}

function CListadoSimple_perrelacion(){
$enperrelacion=new Clase_perrelacion();
$rpta=$enperrelacion->ListadoSimple_perrelacion();
return $rpta;
}

function CBuscar_perrelacion($id){
$enperrelacion=new Clase_perrelacion();
$enperrelacion->setcPerCodigo($id);
$rpta=$enperrelacion->Buscar_perrelacion();
return $rpta;}
?>