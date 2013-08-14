<?php
include_once "../../Modelado/Modelo_respuestausuario.php"; 
include_once "../validacion.php"; 
function CRegistrar_respuestausuario(){
$enrespuestausuario=new Clase_respuestausuario();
$enrespuestausuario->setRespuestaUsuarioId(validar($_POST["RespuestaUsuarioId_"]));
$enrespuestausuario->setRespuestaUsuario(validar($_POST["RespuestaUsuario_"]));
$enrespuestausuario->setUsuarioId(validar($_POST["UsuarioId_"]));
$enrespuestausuario->setSimulacroId(validar($_POST["SimulacroId_"]));
$rpta=$enrespuestausuario->Insertar_respuestausuario();
return $rpta;
}

function CActualizar_respuestausuario(){
$enrespuestausuario=new Clase_respuestausuario();
$enrespuestausuario->setRespuestaUsuarioId(validar($_POST["RespuestaUsuarioId_"]));
$enrespuestausuario->setRespuestaUsuario(validar($_POST["RespuestaUsuario_"]));
$enrespuestausuario->setUsuarioId(validar($_POST["UsuarioId_"]));
$enrespuestausuario->setSimulacroId(validar($_POST["SimulacroId_"]));
$rpta=$enrespuestausuario->Actualizar_respuestausuario();
return $rpta;
}

function CEliminar_respuestausuario(){
$enrespuestausuario=new Clase_respuestausuario();
$enrespuestausuario->setRespuestaUsuarioId($_GET["id"]);
$rpta=$enrespuestausuario->Eliminar_respuestausuario();
return $rpta;
}

function CRecuperar_respuestausuario(){
$enrespuestausuario=new Clase_respuestausuario();
$enrespuestausuario->setRespuestaUsuarioId($_GET["id"]);
$rpta=$enrespuestausuario->Recuperar_respuestausuario();
return $rpta;
}

function CListar_respuestausuario(){
$enrespuestausuario=new Clase_respuestausuario();
$rpta=$enrespuestausuario->Listar_respuestausuario();
return $rpta;
}

function CListadoSimple_respuestausuario(){
$enrespuestausuario=new Clase_respuestausuario();
$rpta=$enrespuestausuario->ListadoSimple_respuestausuario();
return $rpta;
}

function CBuscar_respuestausuario($id){
$enrespuestausuario=new Clase_respuestausuario();
$enrespuestausuario->setRespuestaUsuarioId($id);
$rpta=$enrespuestausuario->Buscar_respuestausuario();
return $rpta;}
?>