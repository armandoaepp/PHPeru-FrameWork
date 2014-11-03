<?php
include_once "../../Modelado/Modelo_admin.php"; 
include_once "../validacion.php"; 
function CRegistrar_admin(){
$enadmin=new Clase_admin();
$enadmin->setidadmin(validar($_POST["idadmin_"]));
$enadmin->setusertrans(validar($_POST["usertrans_"]));
$enadmin->setclavetrans(validar($_POST["clavetrans_"]));
$rpta=$enadmin->Insertar_admin();
return $rpta;
}

function CActualizar_admin(){
$enadmin=new Clase_admin();
$enadmin->setidadmin(validar($_POST["idadmin_"]));
$enadmin->setusertrans(validar($_POST["usertrans_"]));
$enadmin->setclavetrans(validar($_POST["clavetrans_"]));
$rpta=$enadmin->Actualizar_admin();
return $rpta;
}

function CEliminar_admin(){
$enadmin=new Clase_admin();
$enadmin->setidadmin($_GET["id"]);
$rpta=$enadmin->Eliminar_admin();
return $rpta;
}

function CRecuperar_admin(){
$enadmin=new Clase_admin();
$enadmin->setidadmin($_GET["id"]);
$rpta=$enadmin->Recuperar_admin();
return $rpta;
}

function CListar_admin(){
$enadmin=new Clase_admin();
$rpta=$enadmin->Listar_admin();
return $rpta;
}

function CListadoSimple_admin(){
$enadmin=new Clase_admin();
$rpta=$enadmin->ListadoSimple_admin();
return $rpta;
}

function CBuscar_admin($id){
$enadmin=new Clase_admin();
$enadmin->setidadmin($id);
$rpta=$enadmin->Buscar_admin();
return $rpta;}
?>