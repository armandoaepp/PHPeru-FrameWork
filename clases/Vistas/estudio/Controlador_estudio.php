<?php
include_once "../../Modelado/Modelo_estudio.php"; 
include_once "../validacion.php"; 
function CRegistrar_estudio(){
$enestudio=new Clase_estudio();
$enestudio->setID_ESTUDIO(validar($_POST["ID_ESTUDIO_"]));
$enestudio->setEMPLEADO_DNI(validar($_POST["EMPLEADO_DNI_"]));
$enestudio->setUNIVERSIDAD(validar($_POST["UNIVERSIDAD_"]));
$enestudio->setAÑO(validar($_POST["AÑO_"]));
$enestudio->setGRADO(validar($_POST["GRADO_"]));
$enestudio->setESPECIALIDAD(validar($_POST["ESPECIALIDAD_"]));
$rpta=$enestudio->Insertar_estudio();
return $rpta;
}

function CActualizar_estudio(){
$enestudio=new Clase_estudio();
$enestudio->setID_ESTUDIO(validar($_POST["ID_ESTUDIO_"]));
$enestudio->setEMPLEADO_DNI(validar($_POST["EMPLEADO_DNI_"]));
$enestudio->setUNIVERSIDAD(validar($_POST["UNIVERSIDAD_"]));
$enestudio->setAÑO(validar($_POST["AÑO_"]));
$enestudio->setGRADO(validar($_POST["GRADO_"]));
$enestudio->setESPECIALIDAD(validar($_POST["ESPECIALIDAD_"]));
$rpta=$enestudio->Actualizar_estudio();
return $rpta;
}

function CEliminar_estudio(){
$enestudio=new Clase_estudio();
$enestudio->setID_ESTUDIO($_GET["id"]);
$rpta=$enestudio->Eliminar_estudio();
return $rpta;
}

function CRecuperar_estudio(){
$enestudio=new Clase_estudio();
$enestudio->setID_ESTUDIO($_GET["id"]);
$rpta=$enestudio->Recuperar_estudio();
return $rpta;
}

function CListar_estudio(){
$enestudio=new Clase_estudio();
$rpta=$enestudio->Listar_estudio();
return $rpta;
}

function CListadoSimple_estudio(){
$enestudio=new Clase_estudio();
$rpta=$enestudio->ListadoSimple_estudio();
return $rpta;
}

function CBuscar_estudio($id){
$enestudio=new Clase_estudio();
$enestudio->setID_ESTUDIO($id);
$rpta=$enestudio->Buscar_estudio();
return $rpta;}
?>