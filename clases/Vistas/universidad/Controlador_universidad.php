<?php
include_once "../../Modelado/Modelo_universidad.php"; 
include_once "../validacion.php"; 
function CRegistrar_universidad(){
$enuniversidad=new Clase_universidad();
$enuniversidad->setID_UNIVERSIDAD(validar($_POST["ID_UNIVERSIDAD_"]));
$enuniversidad->setUNIV_COD(validar($_POST["UNIV_COD_"]));
$enuniversidad->setNOMBRE_UNIV(validar($_POST["NOMBRE_UNIV_"]));
$enuniversidad->setCIUDAD(validar($_POST["CIUDAD_"]));
$enuniversidad->setMUNICIPIO(validar($_POST["MUNICIPIO_"]));
$enuniversidad->setCOD_POSTAL(validar($_POST["COD_POSTAL_"]));
$rpta=$enuniversidad->Insertar_universidad();
return $rpta;
}

function CActualizar_universidad(){
$enuniversidad=new Clase_universidad();
$enuniversidad->setID_UNIVERSIDAD(validar($_POST["ID_UNIVERSIDAD_"]));
$enuniversidad->setUNIV_COD(validar($_POST["UNIV_COD_"]));
$enuniversidad->setNOMBRE_UNIV(validar($_POST["NOMBRE_UNIV_"]));
$enuniversidad->setCIUDAD(validar($_POST["CIUDAD_"]));
$enuniversidad->setMUNICIPIO(validar($_POST["MUNICIPIO_"]));
$enuniversidad->setCOD_POSTAL(validar($_POST["COD_POSTAL_"]));
$rpta=$enuniversidad->Actualizar_universidad();
return $rpta;
}

function CEliminar_universidad(){
$enuniversidad=new Clase_universidad();
$enuniversidad->setID_UNIVERSIDAD($_GET["id"]);
$rpta=$enuniversidad->Eliminar_universidad();
return $rpta;
}

function CRecuperar_universidad(){
$enuniversidad=new Clase_universidad();
$enuniversidad->setID_UNIVERSIDAD($_GET["id"]);
$rpta=$enuniversidad->Recuperar_universidad();
return $rpta;
}

function CListar_universidad(){
$enuniversidad=new Clase_universidad();
$rpta=$enuniversidad->Listar_universidad();
return $rpta;
}

function CListadoSimple_universidad(){
$enuniversidad=new Clase_universidad();
$rpta=$enuniversidad->ListadoSimple_universidad();
return $rpta;
}

function CBuscar_universidad($id){
$enuniversidad=new Clase_universidad();
$enuniversidad->setID_UNIVERSIDAD($id);
$rpta=$enuniversidad->Buscar_universidad();
return $rpta;}
?>