<?php
include_once "../../Modelado/Modelo_departamento.php"; 
include_once "../validacion.php"; 
function CRegistrar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setID_DEPARTAMENTO(validar($_POST["ID_DEPARTAMENTO_"]));
$endepartamento->setDPTO_COD(validar($_POST["DPTO_COD_"]));
$endepartamento->setNOMBRE_DPTO(validar($_POST["NOMBRE_DPTO_"]));
$endepartamento->setJEFE(validar($_POST["JEFE_"]));
$endepartamento->setPRESUPUESTO(validar($_POST["PRESUPUESTO_"]));
$endepartamento->setPRES_ACTUAL(validar($_POST["PRES_ACTUAL_"]));
$rpta=$endepartamento->Insertar_departamento();
return $rpta;
}

function CActualizar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setID_DEPARTAMENTO(validar($_POST["ID_DEPARTAMENTO_"]));
$endepartamento->setDPTO_COD(validar($_POST["DPTO_COD_"]));
$endepartamento->setNOMBRE_DPTO(validar($_POST["NOMBRE_DPTO_"]));
$endepartamento->setJEFE(validar($_POST["JEFE_"]));
$endepartamento->setPRESUPUESTO(validar($_POST["PRESUPUESTO_"]));
$endepartamento->setPRES_ACTUAL(validar($_POST["PRES_ACTUAL_"]));
$rpta=$endepartamento->Actualizar_departamento();
return $rpta;
}

function CEliminar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setID_DEPARTAMENTO($_GET["id"]);
$rpta=$endepartamento->Eliminar_departamento();
return $rpta;
}

function CRecuperar_departamento(){
$endepartamento=new Clase_departamento();
$endepartamento->setID_DEPARTAMENTO($_GET["id"]);
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
$endepartamento->setID_DEPARTAMENTO($id);
$rpta=$endepartamento->Buscar_departamento();
return $rpta;}
?>