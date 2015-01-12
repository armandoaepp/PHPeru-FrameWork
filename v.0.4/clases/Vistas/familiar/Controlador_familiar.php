<?php
include_once "../../Modelado/Modelo_familiar.php"; 
include_once "../validacion.php"; 
function CRegistrar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId(validar($_POST["FamiliarId_"]));
$enfamiliar->setFamiliarApellido(validar($_POST["FamiliarApellido_"]));
$enfamiliar->setFamiliarNombre(validar($_POST["FamiliarNombre_"]));
$enfamiliar->setFamiliarSexo(validar($_POST["FamiliarSexo_"]));
$enfamiliar->setFamiliarFechaNac(validar($_POST["FamiliarFechaNac_"]));
$enfamiliar->setFamiliarParentesco(validar($_POST["FamiliarParentesco_"]));
$enfamiliar->setFamiliarOcupacion(validar($_POST["FamiliarOcupacion_"]));
$enfamiliar->setProductorId(validar($_POST["ProductorId_"]));
$enfamiliar->setEducacionId(validar($_POST["EducacionId_"]));
$rpta=$enfamiliar->Insertar_familiar();
return $rpta;
}

function CActualizar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId(validar($_POST["FamiliarId_"]));
$enfamiliar->setFamiliarApellido(validar($_POST["FamiliarApellido_"]));
$enfamiliar->setFamiliarNombre(validar($_POST["FamiliarNombre_"]));
$enfamiliar->setFamiliarSexo(validar($_POST["FamiliarSexo_"]));
$enfamiliar->setFamiliarFechaNac(validar($_POST["FamiliarFechaNac_"]));
$enfamiliar->setFamiliarParentesco(validar($_POST["FamiliarParentesco_"]));
$enfamiliar->setFamiliarOcupacion(validar($_POST["FamiliarOcupacion_"]));
$enfamiliar->setProductorId(validar($_POST["ProductorId_"]));
$enfamiliar->setEducacionId(validar($_POST["EducacionId_"]));
$rpta=$enfamiliar->Actualizar_familiar();
return $rpta;
}

function CEliminar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId($_GET["id"]);
$rpta=$enfamiliar->Eliminar_familiar();
return $rpta;
}

function CRecuperar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId($_GET["id"]);
$rpta=$enfamiliar->Recuperar_familiar();
return $rpta;
}

function CListar_familiar(){
$enfamiliar=new Clase_familiar();
$rpta=$enfamiliar->Listar_familiar();
return $rpta;
}

function CListadoSimple_familiar(){
$enfamiliar=new Clase_familiar();
$rpta=$enfamiliar->ListadoSimple_familiar();
return $rpta;
}

function CBuscar_familiar($id){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId($id);
$rpta=$enfamiliar->Buscar_familiar();
return $rpta;}
?>