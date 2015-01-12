<?php
include_once "../../Modelado/Modelo_simulacro.php"; 
include_once "../validacion.php"; 
function CRegistrar_simulacro(){
$ensimulacro=new Clase_simulacro();
$ensimulacro->setSimulacroId(validar($_POST["SimulacroId_"]));
$ensimulacro->setSimulacroNumero(validar($_POST["SimulacroNumero_"]));
$ensimulacro->setSimulacroNombre(validar($_POST["SimulacroNombre_"]));
$ensimulacro->setSimulacroEstado(validar($_POST["SimulacroEstado_"]));
$rpta=$ensimulacro->Insertar_simulacro();
return $rpta;
}

function CActualizar_simulacro(){
$ensimulacro=new Clase_simulacro();
$ensimulacro->setSimulacroId(validar($_POST["SimulacroId_"]));
$ensimulacro->setSimulacroNumero(validar($_POST["SimulacroNumero_"]));
$ensimulacro->setSimulacroNombre(validar($_POST["SimulacroNombre_"]));
$ensimulacro->setSimulacroEstado(validar($_POST["SimulacroEstado_"]));
$rpta=$ensimulacro->Actualizar_simulacro();
return $rpta;
}

function CEliminar_simulacro(){
$ensimulacro=new Clase_simulacro();
$ensimulacro->setSimulacroId($_GET["id"]);
$rpta=$ensimulacro->Eliminar_simulacro();
return $rpta;
}

function CRecuperar_simulacro(){
$ensimulacro=new Clase_simulacro();
$ensimulacro->setSimulacroId($_GET["id"]);
$rpta=$ensimulacro->Recuperar_simulacro();
return $rpta;
}

function CListar_simulacro(){
$ensimulacro=new Clase_simulacro();
$rpta=$ensimulacro->Listar_simulacro();
return $rpta;
}

function CListadoSimple_simulacro(){
$ensimulacro=new Clase_simulacro();
$rpta=$ensimulacro->ListadoSimple_simulacro();
return $rpta;
}

function CBuscar_simulacro($id){
$ensimulacro=new Clase_simulacro();
$ensimulacro->setSimulacroId($id);
$rpta=$ensimulacro->Buscar_simulacro();
return $rpta;}
?>