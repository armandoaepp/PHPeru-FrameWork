<?php
include_once "../../Modelado/Modelo_textopregunta.php"; 
include_once "../validacion.php"; 
function CRegistrar_textopregunta(){
$entextopregunta=new Clase_textopregunta();
$entextopregunta->setTextoPreguntaId(validar($_POST["TextoPreguntaId_"]));
$entextopregunta->setPreguntaId(validar($_POST["PreguntaId_"]));
$entextopregunta->setTextoId(validar($_POST["TextoId_"]));
$rpta=$entextopregunta->Insertar_textopregunta();
return $rpta;
}

function CActualizar_textopregunta(){
$entextopregunta=new Clase_textopregunta();
$entextopregunta->setTextoPreguntaId(validar($_POST["TextoPreguntaId_"]));
$entextopregunta->setPreguntaId(validar($_POST["PreguntaId_"]));
$entextopregunta->setTextoId(validar($_POST["TextoId_"]));
$rpta=$entextopregunta->Actualizar_textopregunta();
return $rpta;
}

function CEliminar_textopregunta(){
$entextopregunta=new Clase_textopregunta();
$entextopregunta->setTextoPreguntaId($_GET["id"]);
$rpta=$entextopregunta->Eliminar_textopregunta();
return $rpta;
}

function CRecuperar_textopregunta(){
$entextopregunta=new Clase_textopregunta();
$entextopregunta->setTextoPreguntaId($_GET["id"]);
$rpta=$entextopregunta->Recuperar_textopregunta();
return $rpta;
}

function CListar_textopregunta(){
$entextopregunta=new Clase_textopregunta();
$rpta=$entextopregunta->Listar_textopregunta();
return $rpta;
}

function CListadoSimple_textopregunta(){
$entextopregunta=new Clase_textopregunta();
$rpta=$entextopregunta->ListadoSimple_textopregunta();
return $rpta;
}

function CBuscar_textopregunta($id){
$entextopregunta=new Clase_textopregunta();
$entextopregunta->setTextoPreguntaId($id);
$rpta=$entextopregunta->Buscar_textopregunta();
return $rpta;}
?>