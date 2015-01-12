<?php
include_once "../../Modelado/Modelo_user.php"; 
include_once "../validacion.php"; 
function CRegistrar_user(){
$enuser=new Clase_user();
$enuser->setUserId(validar($_POST["UserId_"]));
$enuser->setUsueNombre(validar($_POST["UsueNombre_"]));
$enuser->setUserEmail(validar($_POST["UserEmail_"]));
$rpta=$enuser->Insertar_user();
return $rpta;
}

function CActualizar_user(){
$enuser=new Clase_user();
$enuser->setUserId(validar($_POST["UserId_"]));
$enuser->setUsueNombre(validar($_POST["UsueNombre_"]));
$enuser->setUserEmail(validar($_POST["UserEmail_"]));
$rpta=$enuser->Actualizar_user();
return $rpta;
}

function CEliminar_user(){
$enuser=new Clase_user();
$enuser->setUserId($_GET["id"]);
$rpta=$enuser->Eliminar_user();
return $rpta;
}

function CRecuperar_user(){
$enuser=new Clase_user();
$enuser->setUserId($_GET["id"]);
$rpta=$enuser->Recuperar_user();
return $rpta;
}

function CListar_user(){
$enuser=new Clase_user();
$rpta=$enuser->Listar_user();
return $rpta;
}

function CListadoSimple_user(){
$enuser=new Clase_user();
$rpta=$enuser->ListadoSimple_user();
return $rpta;
}

function CBuscar_user($id){
$enuser=new Clase_user();
$enuser->setUserId($id);
$rpta=$enuser->Buscar_user();
return $rpta;}
?>