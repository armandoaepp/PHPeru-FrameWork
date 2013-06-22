<?php
include_once "../../Modelado/Modelo_empleado.php"; 
include_once "../validacion.php"; 
function CRegistrar_empleado(){
$enempleado=new Clase_empleado();
$enempleado->setID_EMPLEADOS(validar($_POST["ID_EMPLEADOS_"]));
$enempleado->setDNI(validar($_POST["DNI_"]));
$enempleado->setNOMBRE(validar($_POST["NOMBRE_"]));
$enempleado->setAPELLIDO1(validar($_POST["APELLIDO1_"]));
$enempleado->setAPELLIDO2(validar($_POST["APELLIDO2_"]));
$enempleado->setDIRECC1(validar($_POST["DIRECC1_"]));
$enempleado->setDIRECC2(validar($_POST["DIRECC2_"]));
$enempleado->setCIUDAD(validar($_POST["CIUDAD_"]));
$enempleado->setMUNICIPIO(validar($_POST["MUNICIPIO_"]));
$enempleado->setCOD_POSTAL(validar($_POST["COD_POSTAL_"]));
$enempleado->setSEXO(validar($_POST["SEXO_"]));
$enempleado->setFECHA_NAC(validar($_POST["FECHA_NAC_"]));
$rpta=$enempleado->Insertar_empleado();
return $rpta;
}

function CActualizar_empleado(){
$enempleado=new Clase_empleado();
$enempleado->setID_EMPLEADOS(validar($_POST["ID_EMPLEADOS_"]));
$enempleado->setDNI(validar($_POST["DNI_"]));
$enempleado->setNOMBRE(validar($_POST["NOMBRE_"]));
$enempleado->setAPELLIDO1(validar($_POST["APELLIDO1_"]));
$enempleado->setAPELLIDO2(validar($_POST["APELLIDO2_"]));
$enempleado->setDIRECC1(validar($_POST["DIRECC1_"]));
$enempleado->setDIRECC2(validar($_POST["DIRECC2_"]));
$enempleado->setCIUDAD(validar($_POST["CIUDAD_"]));
$enempleado->setMUNICIPIO(validar($_POST["MUNICIPIO_"]));
$enempleado->setCOD_POSTAL(validar($_POST["COD_POSTAL_"]));
$enempleado->setSEXO(validar($_POST["SEXO_"]));
$enempleado->setFECHA_NAC(validar($_POST["FECHA_NAC_"]));
$rpta=$enempleado->Actualizar_empleado();
return $rpta;
}

function CEliminar_empleado(){
$enempleado=new Clase_empleado();
$enempleado->setID_EMPLEADOS($_GET["id"]);
$rpta=$enempleado->Eliminar_empleado();
return $rpta;
}

function CRecuperar_empleado(){
$enempleado=new Clase_empleado();
$enempleado->setID_EMPLEADOS($_GET["id"]);
$rpta=$enempleado->Recuperar_empleado();
return $rpta;
}

function CListar_empleado(){
$enempleado=new Clase_empleado();
$rpta=$enempleado->Listar_empleado();
return $rpta;
}

function CListadoSimple_empleado(){
$enempleado=new Clase_empleado();
$rpta=$enempleado->ListadoSimple_empleado();
return $rpta;
}

function CBuscar_empleado($id){
$enempleado=new Clase_empleado();
$enempleado->setID_EMPLEADOS($id);
$rpta=$enempleado->Buscar_empleado();
return $rpta;}
?>