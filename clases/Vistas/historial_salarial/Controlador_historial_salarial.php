<?php
include_once "../../Modelado/Modelo_historial_salarial.php"; 
include_once "../validacion.php"; 
function CRegistrar_historial_salarial(){
$enhistorial_salarial=new Clase_historial_salarial();
$enhistorial_salarial->setID_HISTORIAL_SALARIAL(validar($_POST["ID_HISTORIAL_SALARIAL_"]));
$enhistorial_salarial->setEMPLEADO_DNI(validar($_POST["EMPLEADO_DNI_"]));
$enhistorial_salarial->setSALARIO(validar($_POST["SALARIO_"]));
$enhistorial_salarial->setFECHA_COMIENZO(validar($_POST["FECHA_COMIENZO_"]));
$enhistorial_salarial->setFECHA_FIN(validar($_POST["FECHA_FIN_"]));
$rpta=$enhistorial_salarial->Insertar_historial_salarial();
return $rpta;
}

function CActualizar_historial_salarial(){
$enhistorial_salarial=new Clase_historial_salarial();
$enhistorial_salarial->setID_HISTORIAL_SALARIAL(validar($_POST["ID_HISTORIAL_SALARIAL_"]));
$enhistorial_salarial->setEMPLEADO_DNI(validar($_POST["EMPLEADO_DNI_"]));
$enhistorial_salarial->setSALARIO(validar($_POST["SALARIO_"]));
$enhistorial_salarial->setFECHA_COMIENZO(validar($_POST["FECHA_COMIENZO_"]));
$enhistorial_salarial->setFECHA_FIN(validar($_POST["FECHA_FIN_"]));
$rpta=$enhistorial_salarial->Actualizar_historial_salarial();
return $rpta;
}

function CEliminar_historial_salarial(){
$enhistorial_salarial=new Clase_historial_salarial();
$enhistorial_salarial->setID_HISTORIAL_SALARIAL($_GET["id"]);
$rpta=$enhistorial_salarial->Eliminar_historial_salarial();
return $rpta;
}

function CRecuperar_historial_salarial(){
$enhistorial_salarial=new Clase_historial_salarial();
$enhistorial_salarial->setID_HISTORIAL_SALARIAL($_GET["id"]);
$rpta=$enhistorial_salarial->Recuperar_historial_salarial();
return $rpta;
}

function CListar_historial_salarial(){
$enhistorial_salarial=new Clase_historial_salarial();
$rpta=$enhistorial_salarial->Listar_historial_salarial();
return $rpta;
}

function CListadoSimple_historial_salarial(){
$enhistorial_salarial=new Clase_historial_salarial();
$rpta=$enhistorial_salarial->ListadoSimple_historial_salarial();
return $rpta;
}

function CBuscar_historial_salarial($id){
$enhistorial_salarial=new Clase_historial_salarial();
$enhistorial_salarial->setID_HISTORIAL_SALARIAL($id);
$rpta=$enhistorial_salarial->Buscar_historial_salarial();
return $rpta;}
?>