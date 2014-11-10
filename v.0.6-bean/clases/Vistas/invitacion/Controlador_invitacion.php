<?php
include_once "../../Modelado/Modelo_invitacion.php"; 
include_once "../validacion.php"; 
function CRegistrar_invitacion(){
$eninvitacion=new Clase_invitacion();
$eninvitacion->setidinvitacion(validar($_POST["idinvitacion_"]));
$eninvitacion->setidcliente(validar($_POST["idcliente_"]));
$eninvitacion->settipocliente(validar($_POST["tipocliente_"]));
$eninvitacion->setglosa(validar($_POST["glosa_"]));
$eninvitacion->setestado("A");
$rpta=$eninvitacion->Insertar_invitacion();
return $rpta;
}

function CActualizar_invitacion(){
$eninvitacion=new Clase_invitacion();
$eninvitacion->setidinvitacion(validar($_POST["idinvitacion_"]));
$eninvitacion->setidcliente(validar($_POST["idcliente_"]));
$eninvitacion->settipocliente(validar($_POST["tipocliente_"]));
$eninvitacion->setglosa(validar($_POST["glosa_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$eninvitacion->setestado($estado);
$rpta=$eninvitacion->Actualizar_invitacion();
return $rpta;
}

function CEliminar_invitacion(){
$eninvitacion=new Clase_invitacion();
$eninvitacion->setidinvitacion($_GET["id"]);
$rpta=$eninvitacion->Eliminar_invitacion();
return $rpta;
}

function CRecuperar_invitacion(){
$eninvitacion=new Clase_invitacion();
$eninvitacion->setidinvitacion($_GET["id"]);
$rpta=$eninvitacion->Recuperar_invitacion();
return $rpta;
}

function CListar_invitacion(){
$eninvitacion=new Clase_invitacion();
$rpta=$eninvitacion->Listar_invitacion();
return $rpta;
}

function CListadoSimple_invitacion(){
$eninvitacion=new Clase_invitacion();
$rpta=$eninvitacion->ListadoSimple_invitacion();
return $rpta;
}

function CBuscar_invitacion($id){
$eninvitacion=new Clase_invitacion();
$eninvitacion->setidinvitacion($id);
$rpta=$eninvitacion->Buscar_invitacion();
return $rpta;}
?>