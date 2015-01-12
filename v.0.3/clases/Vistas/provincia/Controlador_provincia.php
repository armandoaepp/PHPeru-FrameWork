<?php
include_once "../../Modelado/Modelo_provincia.php"; 
include_once "../validacion.php"; 
function CRegistrar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setProvinciaId(validar($_POST["ProvinciaId_"]));
$enprovincia->setProvinciaNombre(validar($_POST["ProvinciaNombre_"]));
$enprovincia->setDepartamentoId(validar($_POST["DepartamentoId_"]));
$enprovincia->setubigeoProv(validar($_POST["ubigeoProv_"]));
$rpta=$enprovincia->Insertar_provincia();
return $rpta;
}

function CActualizar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setProvinciaId(validar($_POST["ProvinciaId_"]));
$enprovincia->setProvinciaNombre(validar($_POST["ProvinciaNombre_"]));
$enprovincia->setDepartamentoId(validar($_POST["DepartamentoId_"]));
$enprovincia->setubigeoProv(validar($_POST["ubigeoProv_"]));
$rpta=$enprovincia->Actualizar_provincia();
return $rpta;
}

function CEliminar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setProvinciaId($_GET["id"]);
$rpta=$enprovincia->Eliminar_provincia();
return $rpta;
}

function CRecuperar_provincia(){
$enprovincia=new Clase_provincia();
$enprovincia->setProvinciaId($_GET["id"]);
$rpta=$enprovincia->Recuperar_provincia();
return $rpta;
}

function CListar_provincia(){
$enprovincia=new Clase_provincia();
$rpta=$enprovincia->Listar_provincia();
return $rpta;
}

function CListadoSimple_provincia(){
$enprovincia=new Clase_provincia();
$rpta=$enprovincia->ListadoSimple_provincia();
return $rpta;
}

function CBuscar_provincia($id){
$enprovincia=new Clase_provincia();
$enprovincia->setProvinciaId($id);
$rpta=$enprovincia->Buscar_provincia();
return $rpta;}
?>