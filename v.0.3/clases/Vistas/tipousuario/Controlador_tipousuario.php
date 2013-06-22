<?php
include_once "../../Modelado/Modelo_tipousuario.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipousuario(){
$entipousuario=new Clase_tipousuario();
$entipousuario->setTipoUsuarioId(validar($_POST["TipoUsuarioId_"]));
$entipousuario->setTipoUsuario(validar($_POST["TipoUsuario_"]));
$entipousuario->setTipoUsuarioEstado(validar($_POST["TipoUsuarioEstado_"]));
$rpta=$entipousuario->Insertar_tipousuario();
return $rpta;
}

function CActualizar_tipousuario(){
$entipousuario=new Clase_tipousuario();
$entipousuario->setTipoUsuarioId(validar($_POST["TipoUsuarioId_"]));
$entipousuario->setTipoUsuario(validar($_POST["TipoUsuario_"]));
$entipousuario->setTipoUsuarioEstado(validar($_POST["TipoUsuarioEstado_"]));
$rpta=$entipousuario->Actualizar_tipousuario();
return $rpta;
}

function CEliminar_tipousuario(){
$entipousuario=new Clase_tipousuario();
$entipousuario->setTipoUsuarioId($_GET["id"]);
$rpta=$entipousuario->Eliminar_tipousuario();
return $rpta;
}

function CRecuperar_tipousuario(){
$entipousuario=new Clase_tipousuario();
$entipousuario->setTipoUsuarioId($_GET["id"]);
$rpta=$entipousuario->Recuperar_tipousuario();
return $rpta;
}

function CListar_tipousuario(){
$entipousuario=new Clase_tipousuario();
$rpta=$entipousuario->Listar_tipousuario();
return $rpta;
}

function CListadoSimple_tipousuario(){
$entipousuario=new Clase_tipousuario();
$rpta=$entipousuario->ListadoSimple_tipousuario();
return $rpta;
}

function CBuscar_tipousuario($id){
$entipousuario=new Clase_tipousuario();
$entipousuario->setTipoUsuarioId($id);
$rpta=$entipousuario->Buscar_tipousuario();
return $rpta;}
?>