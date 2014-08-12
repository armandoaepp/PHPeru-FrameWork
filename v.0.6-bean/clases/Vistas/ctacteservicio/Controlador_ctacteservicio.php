<?php
include_once "../../Modelado/Modelo_ctacteservicio.php"; 
include_once "../validacion.php"; 
function CRegistrar_ctacteservicio(){
$enctacteservicio=new Clase_ctacteservicio();
$enctacteservicio->setnSerCodigo(validar($_POST["nSerCodigo_"]));
$enctacteservicio->setnBieCodigo(validar($_POST["nBieCodigo_"]));
$enctacteservicio->setnActCodigo(validar($_POST["nActCodigo_"]));
$enctacteservicio->setnSerImporte(validar($_POST["nSerImporte_"]));
$enctacteservicio->setnMonCodigo(validar($_POST["nMonCodigo_"]));
$enctacteservicio->setnSerAfecto(validar($_POST["nSerAfecto_"]));
$enctacteservicio->setnSerTipo(validar($_POST["nSerTipo_"]));
$enctacteservicio->setnSerModalidad(validar($_POST["nSerModalidad_"]));
$enctacteservicio->setfSerTasa(validar($_POST["fSerTasa_"]));
$enctacteservicio->setnSerPeriodicidad(validar($_POST["nSerPeriodicidad_"]));
$enctacteservicio->setnUniOrgCodigo(validar($_POST["nUniOrgCodigo_"]));
$enctacteservicio->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$rpta=$enctacteservicio->Insertar_ctacteservicio();
return $rpta;
}

function CActualizar_ctacteservicio(){
$enctacteservicio=new Clase_ctacteservicio();
$enctacteservicio->setnSerCodigo(validar($_POST["nSerCodigo_"]));
$enctacteservicio->setnBieCodigo(validar($_POST["nBieCodigo_"]));
$enctacteservicio->setnActCodigo(validar($_POST["nActCodigo_"]));
$enctacteservicio->setnSerImporte(validar($_POST["nSerImporte_"]));
$enctacteservicio->setnMonCodigo(validar($_POST["nMonCodigo_"]));
$enctacteservicio->setnSerAfecto(validar($_POST["nSerAfecto_"]));
$enctacteservicio->setnSerTipo(validar($_POST["nSerTipo_"]));
$enctacteservicio->setnSerModalidad(validar($_POST["nSerModalidad_"]));
$enctacteservicio->setfSerTasa(validar($_POST["fSerTasa_"]));
$enctacteservicio->setnSerPeriodicidad(validar($_POST["nSerPeriodicidad_"]));
$enctacteservicio->setnUniOrgCodigo(validar($_POST["nUniOrgCodigo_"]));
$enctacteservicio->setnPrdCodigo(validar($_POST["nPrdCodigo_"]));
$rpta=$enctacteservicio->Actualizar_ctacteservicio();
return $rpta;
}

function CEliminar_ctacteservicio(){
$enctacteservicio=new Clase_ctacteservicio();
$enctacteservicio->setnSerCodigo($_GET["id"]);
$rpta=$enctacteservicio->Eliminar_ctacteservicio();
return $rpta;
}

function CRecuperar_ctacteservicio(){
$enctacteservicio=new Clase_ctacteservicio();
$enctacteservicio->setnSerCodigo($_GET["id"]);
$rpta=$enctacteservicio->Recuperar_ctacteservicio();
return $rpta;
}

function CListar_ctacteservicio(){
$enctacteservicio=new Clase_ctacteservicio();
$rpta=$enctacteservicio->Listar_ctacteservicio();
return $rpta;
}

function CListadoSimple_ctacteservicio(){
$enctacteservicio=new Clase_ctacteservicio();
$rpta=$enctacteservicio->ListadoSimple_ctacteservicio();
return $rpta;
}

function CBuscar_ctacteservicio($id){
$enctacteservicio=new Clase_ctacteservicio();
$enctacteservicio->setnSerCodigo($id);
$rpta=$enctacteservicio->Buscar_ctacteservicio();
return $rpta;}
?>