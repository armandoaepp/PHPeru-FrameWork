<?php
include_once "../../Modelado/Modelo_persona.php"; 
include_once "../validacion.php"; 
function CRegistrar_persona(){
$enpersona=new Clase_persona();
$enpersona->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpersona->setcPerNombre(validar($_POST["cPerNombre_"]));
$enpersona->setcPerApellidos(validar($_POST["cPerApellidos_"]));
$enpersona->setdPerNacimiento(validar($_POST["dPerNacimiento_"]));
$enpersona->setnPerTipo(validar($_POST["nPerTipo_"]));
$enpersona->setnPerEstado(validar($_POST["nPerEstado_"]));
$rpta=$enpersona->Insertar_persona();
return $rpta;
}

function CActualizar_persona(){
$enpersona=new Clase_persona();
$enpersona->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpersona->setcPerNombre(validar($_POST["cPerNombre_"]));
$enpersona->setcPerApellidos(validar($_POST["cPerApellidos_"]));
$enpersona->setdPerNacimiento(validar($_POST["dPerNacimiento_"]));
$enpersona->setnPerTipo(validar($_POST["nPerTipo_"]));
$enpersona->setnPerEstado(validar($_POST["nPerEstado_"]));
$rpta=$enpersona->Actualizar_persona();
return $rpta;
}

function CEliminar_persona(){
$enpersona=new Clase_persona();
$enpersona->setcPerCodigo($_GET["id"]);
$rpta=$enpersona->Eliminar_persona();
return $rpta;
}

function CRecuperar_persona(){
$enpersona=new Clase_persona();
$enpersona->setcPerCodigo($_GET["id"]);
$rpta=$enpersona->Recuperar_persona();
return $rpta;
}

function CListar_persona(){
$enpersona=new Clase_persona();
$rpta=$enpersona->Listar_persona();
return $rpta;
}

function CListadoSimple_persona(){
$enpersona=new Clase_persona();
$rpta=$enpersona->ListadoSimple_persona();
return $rpta;
}

function CBuscar_persona($id){
$enpersona=new Clase_persona();
$enpersona->setcPerCodigo($id);
$rpta=$enpersona->Buscar_persona();
return $rpta;}
?>