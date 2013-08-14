<?php
include_once "../../Modelado/Modelo_texto.php"; 
include_once "../validacion.php"; 
function CRegistrar_texto(){
$entexto=new Clase_texto();
$entexto->setTextoId(validar($_POST["TextoId_"]));
$entexto->setTextoTitulo(validar($_POST["TextoTitulo_"]));
$entexto->setTexto(validar($_POST["Texto_"]));
$entexto->setSimulacroId(validar($_POST["SimulacroId_"]));
$entexto->setTextoEstado(validar($_POST["TextoEstado_"]));
$rpta=$entexto->Insertar_texto();
return $rpta;
}

function CActualizar_texto(){
$entexto=new Clase_texto();
$entexto->setTextoId(validar($_POST["TextoId_"]));
$entexto->setTextoTitulo(validar($_POST["TextoTitulo_"]));
$entexto->setTexto(validar($_POST["Texto_"]));
$entexto->setSimulacroId(validar($_POST["SimulacroId_"]));
$entexto->setTextoEstado(validar($_POST["TextoEstado_"]));
$rpta=$entexto->Actualizar_texto();
return $rpta;
}

function CEliminar_texto(){
$entexto=new Clase_texto();
$entexto->setTextoId($_GET["id"]);
$rpta=$entexto->Eliminar_texto();
return $rpta;
}

function CRecuperar_texto(){
$entexto=new Clase_texto();
$entexto->setTextoId($_GET["id"]);
$rpta=$entexto->Recuperar_texto();
return $rpta;
}

function CListar_texto(){
$entexto=new Clase_texto();
$rpta=$entexto->Listar_texto();
return $rpta;
}

function CListadoSimple_texto(){
$entexto=new Clase_texto();
$rpta=$entexto->ListadoSimple_texto();
return $rpta;
}

function CBuscar_texto($id){
$entexto=new Clase_texto();
$entexto->setTextoId($id);
$rpta=$entexto->Buscar_texto();
return $rpta;}
?>