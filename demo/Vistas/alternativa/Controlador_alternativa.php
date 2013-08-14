<?php
include_once "../../Modelado/Modelo_alternativa.php"; 
include_once "../../Modelado/Modelo_textopregunta.php"; 
include_once "../validacion.php"; 
function CRegistrar_alternativa(){
	$enalternativa=new Clase_alternativa();

	$enalternativa->setPreguntaNumero(validar($_POST["PreguntaNumero_"]));
	$enalternativa->setPregunta(validar($_POST["Pregunta_"]));
	$enalternativa->setSimulacroId(validar($_POST["SimulacroId_"]));

	// $enalternativa->setAlternativaId(validar($_POST["AlternativaId_"]));
	$enalternativa->setAlternativaA(validar($_POST["AlternativaA_"]));
	$enalternativa->setAlternativaB(validar($_POST["AlternativaB_"]));
	$enalternativa->setAlternativaC(validar($_POST["AlternativaC_"]));
	$enalternativa->setAlternativaD(validar($_POST["AlternativaD_"]));
	$enalternativa->setAlternativaE(validar($_POST["AlternativaE_"]));

	$PreguntaId_=$enalternativa->Insertar_pregunta_ID();
	$enalternativa->setPreguntaId($PreguntaId_);

	$rpta=$enalternativa->Insertar_alternativa();

	$entextopregunta=new Clase_textopregunta();
	// $entextopregunta->setTextoPreguntaId("");
	$entextopregunta->setPreguntaId($PreguntaId_);
	$entextopregunta->setTextoId(validar($_POST["TextoId_"]));
	$rpta=$entextopregunta->Insertar_textopregunta();


return $rpta;
}

function CActualizar_alternativa(){
$enalternativa=new Clase_alternativa();
$enalternativa->setAlternativaId(validar($_POST["AlternativaId_"]));
$enalternativa->setAlternativaA(validar($_POST["AlternativaA_"]));
$enalternativa->setAlternativaB(validar($_POST["AlternativaB_"]));
$enalternativa->setAlternativaC(validar($_POST["AlternativaC_"]));
$enalternativa->setAlternativaD(validar($_POST["AlternativaD_"]));
$enalternativa->setAlternativaE(validar($_POST["AlternativaE_"]));
$enalternativa->setPreguntaId(validar($_POST["PreguntaId_"]));
$rpta=$enalternativa->Actualizar_alternativa();
return $rpta;
}

function CEliminar_alternativa(){
$enalternativa=new Clase_alternativa();
$enalternativa->setAlternativaId($_GET["id"]);
$rpta=$enalternativa->Eliminar_alternativa();
return $rpta;
}

function CRecuperar_alternativa(){
$enalternativa=new Clase_alternativa();
$enalternativa->setAlternativaId($_GET["id"]);
$rpta=$enalternativa->Recuperar_alternativa();
return $rpta;
}

function CListar_alternativa(){
$enalternativa=new Clase_alternativa();
$rpta=$enalternativa->Listar_alternativa();
return $rpta;
}

function CListadoSimple_alternativa(){
$enalternativa=new Clase_alternativa();
$rpta=$enalternativa->ListadoSimple_alternativa();
return $rpta;
}

function CBuscar_alternativa($id){
$enalternativa=new Clase_alternativa();
$enalternativa->setAlternativaId($id);
$rpta=$enalternativa->Buscar_alternativa();
return $rpta;}
?>