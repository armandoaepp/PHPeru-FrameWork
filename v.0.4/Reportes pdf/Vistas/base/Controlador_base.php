<?php
include_once "../../Modelado/Modelo_base.php"; 
include_once "../validacion.php"; 
function CRegistrar_base(){
$enbase=new Clase_base();
$enbase->setBaseId(validar($_POST["BaseId_"]));
$enbase->setBaseNombre(validar($_POST["BaseNombre_"]));
$rpta=$enbase->Insertar_base();
return $rpta;
}

function CActualizar_base(){
$enbase=new Clase_base();
$enbase->setBaseId(validar($_POST["BaseId_"]));
$enbase->setBaseNombre(validar($_POST["BaseNombre_"]));
$rpta=$enbase->Actualizar_base();
return $rpta;
}

function CEliminar_base(){
$enbase=new Clase_base();
$enbase->setBaseId($_GET["id"]);
$rpta=$enbase->Eliminar_base();
return $rpta;
}

function CRecuperar_base(){
$enbase=new Clase_base();
$enbase->setBaseId($_GET["id"]);
$rpta=$enbase->Recuperar_base();
return $rpta;
}

function CListar_base(){
$enbase=new Clase_base();
$rpta=$enbase->Listar_base();
return $rpta;
}

function CListadoSimple_base(){
$enbase=new Clase_base();
$rpta=$enbase->ListadoSimple_base();
return $rpta;
}

function CBuscar_base($id){
$enbase=new Clase_base();
$enbase->setBaseId($id);
$rpta=$enbase->Buscar_base();
return $rpta;}
?>