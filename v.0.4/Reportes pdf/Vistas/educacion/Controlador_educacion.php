<?php
include_once "../../Modelado/Modelo_educacion.php"; 
include_once "../validacion.php"; 
function CRegistrar_educacion(){
$eneducacion=new Clase_educacion();
$eneducacion->setEducacionId(validar($_POST["EducacionId_"]));
$eneducacion->setEducacionNivel(validar($_POST["EducacionNivel_"]));
$rpta=$eneducacion->Insertar_educacion();
return $rpta;
}

function CActualizar_educacion(){
$eneducacion=new Clase_educacion();
$eneducacion->setEducacionId(validar($_POST["EducacionId_"]));
$eneducacion->setEducacionNivel(validar($_POST["EducacionNivel_"]));
$rpta=$eneducacion->Actualizar_educacion();
return $rpta;
}

function CEliminar_educacion(){
$eneducacion=new Clase_educacion();
$eneducacion->setEducacionId($_GET["id"]);
$rpta=$eneducacion->Eliminar_educacion();
return $rpta;
}

function CRecuperar_educacion(){
$eneducacion=new Clase_educacion();
$eneducacion->setEducacionId($_GET["id"]);
$rpta=$eneducacion->Recuperar_educacion();
return $rpta;
}

function CListar_educacion(){
$eneducacion=new Clase_educacion();
$rpta=$eneducacion->Listar_educacion();
return $rpta;
}

function CListadoSimple_educacion(){
$eneducacion=new Clase_educacion();
$rpta=$eneducacion->ListadoSimple_educacion();
return $rpta;
}

function CBuscar_educacion($id){
$eneducacion=new Clase_educacion();
$eneducacion->setEducacionId($id);
$rpta=$eneducacion->Buscar_educacion();
return $rpta;}
?>