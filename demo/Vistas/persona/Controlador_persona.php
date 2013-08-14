<?php
include_once "../../Modelado/Modelo_persona.php"; 
include_once "../validacion.php"; 
function CRegistrar_persona(){
$enpersona=new Clase_persona();
$enpersona->setPersonaId(validar($_POST["PersonaId_"]));
$enpersona->setPersonaApellido(validar($_POST["PersonaApellido_"]));
$enpersona->setPersonaNombre(validar($_POST["PersonaNombre_"]));
$enpersona->setPersonaEmail(validar($_POST["PersonaEmail_"]));
$enpersona->setPersonaTelefono(validar($_POST["PersonaTelefono_"]));
$rpta=$enpersona->Insertar_persona();
return $rpta;
}

function CActualizar_persona(){
$enpersona=new Clase_persona();
$enpersona->setPersonaId(validar($_POST["PersonaId_"]));
$enpersona->setPersonaApellido(validar($_POST["PersonaApellido_"]));
$enpersona->setPersonaNombre(validar($_POST["PersonaNombre_"]));
$enpersona->setPersonaEmail(validar($_POST["PersonaEmail_"]));
$enpersona->setPersonaTelefono(validar($_POST["PersonaTelefono_"]));
$rpta=$enpersona->Actualizar_persona();
return $rpta;
}

function CEliminar_persona(){
$enpersona=new Clase_persona();
$enpersona->setPersonaId($_GET["id"]);
$rpta=$enpersona->Eliminar_persona();
return $rpta;
}

function CRecuperar_persona(){
$enpersona=new Clase_persona();
$enpersona->setPersonaId($_GET["id"]);
$rpta=$enpersona->Recuperar_persona();
return $rpta;
}

function CListar_persona(){
$enpersona=new Clase_persona();
$rpta=$enpersona->Listar_persona();
return $rpta;
}

function CListadoSimple_persona(){
$enpersona=new Clase_persona();
$rpta=$enpersona->ListadoSimple_persona();
return $rpta;
}

function CBuscar_persona($id){
$enpersona=new Clase_persona();
$enpersona->setPersonaId($id);
$rpta=$enpersona->Buscar_persona();
return $rpta;}
?>