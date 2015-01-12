<?php
include_once "../../Modelado/Modelo_pregunta.php"; 
include_once "../validacion.php"; 
function CRegistrar_pregunta(){
$enpregunta=new Clase_pregunta();
$enpregunta->setPreguntaId(validar($_POST["PreguntaId_"]));
$enpregunta->setPreguntaNumero(validar($_POST["PreguntaNumero_"]));
$enpregunta->setPregunta(validar($_POST["Pregunta_"]));
$enpregunta->setSimulacroId(validar($_POST["SimulacroId_"]));
$rpta=$enpregunta->Insertar_pregunta();
return $rpta;
}

function CActualizar_pregunta(){
$enpregunta=new Clase_pregunta();
$enpregunta->setPreguntaId(validar($_POST["PreguntaId_"]));
$enpregunta->setPreguntaNumero(validar($_POST["PreguntaNumero_"]));
$enpregunta->setPregunta(validar($_POST["Pregunta_"]));
$enpregunta->setSimulacroId(validar($_POST["SimulacroId_"]));
$rpta=$enpregunta->Actualizar_pregunta();
return $rpta;
}

function CEliminar_pregunta(){
$enpregunta=new Clase_pregunta();
$enpregunta->setPreguntaId($_GET["id"]);
$rpta=$enpregunta->Eliminar_pregunta();
return $rpta;
}

function CRecuperar_pregunta(){
$enpregunta=new Clase_pregunta();
$enpregunta->setPreguntaId($_GET["id"]);
$rpta=$enpregunta->Recuperar_pregunta();
return $rpta;
}

function CListar_pregunta(){
$enpregunta=new Clase_pregunta();
$rpta=$enpregunta->Listar_pregunta();
return $rpta;
}

function CListadoSimple_pregunta(){
$enpregunta=new Clase_pregunta();
$rpta=$enpregunta->ListadoSimple_pregunta();
return $rpta;
}

function CBuscar_pregunta($id){
$enpregunta=new Clase_pregunta();
$enpregunta->setPreguntaId($id);
$rpta=$enpregunta->Buscar_pregunta();
return $rpta;}
?>