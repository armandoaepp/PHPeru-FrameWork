<?php
include_once "../../Modelado/Modelo_departamento.php"; 
include_once "../validacion.php"; 
function CRegistrar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setDepartamentoId(validar($_POST["DepartamentoId_"]));
$endepartamento->setDepartamentoNombre(validar($_POST["DepartamentoNombre_"]));
$endepartamento->setPaisId(validar($_POST["PaisId_"]));
$endepartamento->setUbigeoDepa(validar($_POST["UbigeoDepa_"]));
$rpta=$endepartamento->Insertar_departamento();
return $rpta;
}

function CActualizar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setDepartamentoId(validar($_POST["DepartamentoId_"]));
$endepartamento->setDepartamentoNombre(validar($_POST["DepartamentoNombre_"]));
$endepartamento->setPaisId(validar($_POST["PaisId_"]));
$endepartamento->setUbigeoDepa(validar($_POST["UbigeoDepa_"]));
$rpta=$endepartamento->Actualizar_departamento();
return $rpta;
}

function CEliminar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setDepartamentoId($_GET["id"]);
$rpta=$endepartamento->Eliminar_departamento();
return $rpta;
}

function CRecuperar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setDepartamentoId($_GET["id"]);
$rpta=$endepartamento->Recuperar_departamento();
return $rpta;
}

function CListar_departamento(){
$endepartamento=new Clase_departamento();
$rpta=$endepartamento->Listar_departamento();
return $rpta;
}

function CListadoSimple_departamento(){
$endepartamento=new Clase_departamento();
$rpta=$endepartamento->ListadoSimple_departamento();
return $rpta;
}

function CBuscar_departamento($id){
$endepartamento=new Clase_departamento();
$endepartamento->setDepartamentoId($id);
$rpta=$endepartamento->Buscar_departamento();
return $rpta;}
?>