<?php
include_once "../../Modelado/Modelo_historial_laboral.php"; 
include_once "../validacion.php"; 
function CRegistrar_historial_laboral(){
$enhistorial_laboral=new Clase_historial_laboral();
$enhistorial_laboral->setID_HISTORIAL_LABORAL(validar($_POST["ID_HISTORIAL_LABORAL_"]));
$enhistorial_laboral->setEMPLEADO_DNI(validar($_POST["EMPLEADO_DNI_"]));
$enhistorial_laboral->setTRAB_COD(validar($_POST["TRAB_COD_"]));
$enhistorial_laboral->setFECHA_INICIO(validar($_POST["FECHA_INICIO_"]));
$enhistorial_laboral->setFECHA_FIN(validar($_POST["FECHA_FIN_"]));
$enhistorial_laboral->setDPTO_COD(validar($_POST["DPTO_COD_"]));
$enhistorial_laboral->setSUPERVISOR_DNI(validar($_POST["SUPERVISOR_DNI_"]));
$rpta=$enhistorial_laboral->Insertar_historial_laboral();
return $rpta;
}

function CActualizar_historial_laboral(){
$enhistorial_laboral=new Clase_historial_laboral();
$enhistorial_laboral->setID_HISTORIAL_LABORAL(validar($_POST["ID_HISTORIAL_LABORAL_"]));
$enhistorial_laboral->setEMPLEADO_DNI(validar($_POST["EMPLEADO_DNI_"]));
$enhistorial_laboral->setTRAB_COD(validar($_POST["TRAB_COD_"]));
$enhistorial_laboral->setFECHA_INICIO(validar($_POST["FECHA_INICIO_"]));
$enhistorial_laboral->setFECHA_FIN(validar($_POST["FECHA_FIN_"]));
$enhistorial_laboral->setDPTO_COD(validar($_POST["DPTO_COD_"]));
$enhistorial_laboral->setSUPERVISOR_DNI(validar($_POST["SUPERVISOR_DNI_"]));
$rpta=$enhistorial_laboral->Actualizar_historial_laboral();
return $rpta;
}

function CEliminar_historial_laboral(){
$enhistorial_laboral=new Clase_historial_laboral();
$enhistorial_laboral->setID_HISTORIAL_LABORAL($_GET["id"]);
$rpta=$enhistorial_laboral->Eliminar_historial_laboral();
return $rpta;
}

function CRecuperar_historial_laboral(){
$enhistorial_laboral=new Clase_historial_laboral();
$enhistorial_laboral->setID_HISTORIAL_LABORAL($_GET["id"]);
$rpta=$enhistorial_laboral->Recuperar_historial_laboral();
return $rpta;
}

function CListar_historial_laboral(){
$enhistorial_laboral=new Clase_historial_laboral();
$rpta=$enhistorial_laboral->Listar_historial_laboral();
return $rpta;
}

function CListadoSimple_historial_laboral(){
$enhistorial_laboral=new Clase_historial_laboral();
$rpta=$enhistorial_laboral->ListadoSimple_historial_laboral();
return $rpta;
}

function CBuscar_historial_laboral($id){
$enhistorial_laboral=new Clase_historial_laboral();
$enhistorial_laboral->setID_HISTORIAL_LABORAL($id);
$rpta=$enhistorial_laboral->Buscar_historial_laboral();
return $rpta;}
?>