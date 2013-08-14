<?php
include_once "../../Modelado/Modelo_puntaje.php"; 
include_once "../validacion.php"; 
function CRegistrar_puntaje(){
$enpuntaje=new Clase_puntaje();
$enpuntaje->setPuntajeId(validar($_POST["PuntajeId_"]));
$enpuntaje->setPuntajeTotal(validar($_POST["PuntajeTotal_"]));
$enpuntaje->setSimulacroId(validar($_POST["SimulacroId_"]));
$enpuntaje->setUsuarioId(validar($_POST["UsuarioId_"]));
$rpta=$enpuntaje->Insertar_puntaje();
return $rpta;
}

function CActualizar_puntaje(){
$enpuntaje=new Clase_puntaje();
$enpuntaje->setPuntajeId(validar($_POST["PuntajeId_"]));
$enpuntaje->setPuntajeTotal(validar($_POST["PuntajeTotal_"]));
$enpuntaje->setSimulacroId(validar($_POST["SimulacroId_"]));
$enpuntaje->setUsuarioId(validar($_POST["UsuarioId_"]));
$rpta=$enpuntaje->Actualizar_puntaje();
return $rpta;
}

function CEliminar_puntaje(){
$enpuntaje=new Clase_puntaje();
$enpuntaje->setPuntajeId($_GET["id"]);
$rpta=$enpuntaje->Eliminar_puntaje();
return $rpta;
}

function CRecuperar_puntaje(){
$enpuntaje=new Clase_puntaje();
$enpuntaje->setPuntajeId($_GET["id"]);
$rpta=$enpuntaje->Recuperar_puntaje();
return $rpta;
}

function CListar_puntaje(){
$enpuntaje=new Clase_puntaje();
$rpta=$enpuntaje->Listar_puntaje();
return $rpta;
}

function CListadoSimple_puntaje(){
$enpuntaje=new Clase_puntaje();
$rpta=$enpuntaje->ListadoSimple_puntaje();
return $rpta;
}

function CBuscar_puntaje($id){
$enpuntaje=new Clase_puntaje();
$enpuntaje->setPuntajeId($id);
$rpta=$enpuntaje->Buscar_puntaje();
return $rpta;}
?>