<?php
include_once "../../Modelado/Modelo_respuesta.php"; 
include_once "../validacion.php"; 
function CRegistrar_respuesta(){
$enrespuesta=new Clase_respuesta();
$enrespuesta->setRespuestaId(validar($_POST["RespuestaId_"]));
$enrespuesta->setRespuesta(validar($_POST["Respuesta_"]));
$enrespuesta->setPreguntaId(validar($_POST["PreguntaId_"]));
$enrespuesta->setRespuestaPuntaje(validar($_POST["RespuestaPuntaje_"]));
$rpta=$enrespuesta->Insertar_respuesta();
return $rpta;
}

function CActualizar_respuesta(){
$enrespuesta=new Clase_respuesta();
$enrespuesta->setRespuestaId(validar($_POST["RespuestaId_"]));
$enrespuesta->setRespuesta(validar($_POST["Respuesta_"]));
$enrespuesta->setPreguntaId(validar($_POST["PreguntaId_"]));
$enrespuesta->setRespuestaPuntaje(validar($_POST["RespuestaPuntaje_"]));
$rpta=$enrespuesta->Actualizar_respuesta();
return $rpta;
}

function CEliminar_respuesta(){
$enrespuesta=new Clase_respuesta();
$enrespuesta->setRespuestaId($_GET["id"]);
$rpta=$enrespuesta->Eliminar_respuesta();
return $rpta;
}

function CRecuperar_respuesta(){
$enrespuesta=new Clase_respuesta();
$enrespuesta->setRespuestaId($_GET["id"]);
$rpta=$enrespuesta->Recuperar_respuesta();
return $rpta;
}

function CListar_respuesta(){
$enrespuesta=new Clase_respuesta();
$rpta=$enrespuesta->Listar_respuesta();
return $rpta;
}

function CListadoSimple_respuesta(){
$enrespuesta=new Clase_respuesta();
$rpta=$enrespuesta->ListadoSimple_respuesta();
return $rpta;
}

function CBuscar_respuesta($id){
$enrespuesta=new Clase_respuesta();
$enrespuesta->setRespuestaId($id);
$rpta=$enrespuesta->Buscar_respuesta();
return $rpta;}
?>