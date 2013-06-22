<?php
include_once "../../Modelado/Modelo_trabajo.php"; 
include_once "../validacion.php"; 
function CRegistrar_trabajo(){
$entrabajo=new Clase_trabajo();
$entrabajo->setID_TRABAJO(validar($_POST["ID_TRABAJO_"]));
$entrabajo->setTRABAJO_COD(validar($_POST["TRABAJO_COD_"]));
$entrabajo->setNOMBRE_TRAB(validar($_POST["NOMBRE_TRAB_"]));
$entrabajo->setSALARIO_MIN(validar($_POST["SALARIO_MIN_"]));
$entrabajo->setSALARIO_MAX(validar($_POST["SALARIO_MAX_"]));
$rpta=$entrabajo->Insertar_trabajo();
return $rpta;
}

function CActualizar_trabajo(){
$entrabajo=new Clase_trabajo();
$entrabajo->setID_TRABAJO(validar($_POST["ID_TRABAJO_"]));
$entrabajo->setTRABAJO_COD(validar($_POST["TRABAJO_COD_"]));
$entrabajo->setNOMBRE_TRAB(validar($_POST["NOMBRE_TRAB_"]));
$entrabajo->setSALARIO_MIN(validar($_POST["SALARIO_MIN_"]));
$entrabajo->setSALARIO_MAX(validar($_POST["SALARIO_MAX_"]));
$rpta=$entrabajo->Actualizar_trabajo();
return $rpta;
}

function CEliminar_trabajo(){
$entrabajo=new Clase_trabajo();
$entrabajo->setID_TRABAJO($_GET["id"]);
$rpta=$entrabajo->Eliminar_trabajo();
return $rpta;
}

function CRecuperar_trabajo(){
$entrabajo=new Clase_trabajo();
$entrabajo->setID_TRABAJO($_GET["id"]);
$rpta=$entrabajo->Recuperar_trabajo();
return $rpta;
}

function CListar_trabajo(){
$entrabajo=new Clase_trabajo();
$rpta=$entrabajo->Listar_trabajo();
return $rpta;
}

function CListadoSimple_trabajo(){
$entrabajo=new Clase_trabajo();
$rpta=$entrabajo->ListadoSimple_trabajo();
return $rpta;
}

function CBuscar_trabajo($id){
$entrabajo=new Clase_trabajo();
$entrabajo->setID_TRABAJO($id);
$rpta=$entrabajo->Buscar_trabajo();
return $rpta;}
?>