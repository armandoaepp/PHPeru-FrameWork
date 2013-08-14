<?php
include_once "../../Modelado/Modelo_usuario.php"; 
include_once "../validacion.php"; 
function CRegistrar_usuario(){
$enusuario=new Clase_usuario();
$enusuario->setUsuarioId(validar($_POST["UsuarioId_"]));
$enusuario->setUsuarioNick(validar($_POST["UsuarioNick_"]));
$enusuario->setUsuarioPassword(validar($_POST["UsuarioPassword_"]));
$enusuario->setPersonaId(validar($_POST["PersonaId_"]));
$rpta=$enusuario->Insertar_usuario();
return $rpta;
}

function CActualizar_usuario(){
$enusuario=new Clase_usuario();
$enusuario->setUsuarioId(validar($_POST["UsuarioId_"]));
$enusuario->setUsuarioNick(validar($_POST["UsuarioNick_"]));
$enusuario->setUsuarioPassword(validar($_POST["UsuarioPassword_"]));
$enusuario->setPersonaId(validar($_POST["PersonaId_"]));
$rpta=$enusuario->Actualizar_usuario();
return $rpta;
}

function CEliminar_usuario(){
$enusuario=new Clase_usuario();
$enusuario->setUsuarioId($_GET["id"]);
$rpta=$enusuario->Eliminar_usuario();
return $rpta;
}

function CRecuperar_usuario(){
$enusuario=new Clase_usuario();
$enusuario->setUsuarioId($_GET["id"]);
$rpta=$enusuario->Recuperar_usuario();
return $rpta;
}

function CListar_usuario(){
$enusuario=new Clase_usuario();
$rpta=$enusuario->Listar_usuario();
return $rpta;
}

function CListadoSimple_usuario(){
$enusuario=new Clase_usuario();
$rpta=$enusuario->ListadoSimple_usuario();
return $rpta;
}

function CBuscar_usuario($id){
$enusuario=new Clase_usuario();
$enusuario->setUsuarioId($id);
$rpta=$enusuario->Buscar_usuario();
return $rpta;}
?>