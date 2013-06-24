<?php
include_once "../../Modelado/Modelo_distrito.php"; 
include_once "../validacion.php"; 
function CRegistrar_distrito(){
$endistrito=new Clase_distrito();
$endistrito->setDistritoId(validar($_POST["DistritoId_"]));
$endistrito->setDistritoNombre(validar($_POST["DistritoNombre_"]));
$endistrito->setProvinciaId(validar($_POST["ProvinciaId_"]));
$endistrito->setUbigeoDist(validar($_POST["UbigeoDist_"]));
$rpta=$endistrito->Insertar_distrito();
return $rpta;
}

function CActualizar_distrito(){
$endistrito=new Clase_distrito();
$endistrito->setDistritoId(validar($_POST["DistritoId_"]));
$endistrito->setDistritoNombre(validar($_POST["DistritoNombre_"]));
$endistrito->setProvinciaId(validar($_POST["ProvinciaId_"]));
$endistrito->setUbigeoDist(validar($_POST["UbigeoDist_"]));
$rpta=$endistrito->Actualizar_distrito();
return $rpta;
}

function CEliminar_distrito(){
$endistrito=new Clase_distrito();
$endistrito->setDistritoId($_GET["id"]);
$rpta=$endistrito->Eliminar_distrito();
return $rpta;
}

function CRecuperar_distrito(){
$endistrito=new Clase_distrito();
$endistrito->setDistritoId($_GET["id"]);
$rpta=$endistrito->Recuperar_distrito();
return $rpta;
}

function CListar_distrito(){
$endistrito=new Clase_distrito();
$rpta=$endistrito->Listar_distrito();
return $rpta;
}

function CListadoSimple_distrito(){
$endistrito=new Clase_distrito();
$rpta=$endistrito->ListadoSimple_distrito();
return $rpta;
}

function CBuscar_distrito($id){
$endistrito=new Clase_distrito();
$endistrito->setDistritoId($id);
$rpta=$endistrito->Buscar_distrito();
return $rpta;}
?>