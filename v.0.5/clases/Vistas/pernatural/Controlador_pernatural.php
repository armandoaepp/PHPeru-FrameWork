<?php
include_once "../../Modelado/Modelo_pernatural.php"; 
include_once "../validacion.php"; 
function CRegistrar_pernatural(){
$enpernatural=new Clase_pernatural();
$enpernatural->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpernatural->setcPerNatApePaterno(validar($_POST["cPerNatApePaterno_"]));
$enpernatural->setcPerNatApeMaterno(validar($_POST["cPerNatApeMaterno_"]));
$enpernatural->setnPerNatSexo(validar($_POST["nPerNatSexo_"]));
$enpernatural->setnPerNatEstCivil(validar($_POST["nPerNatEstCivil_"]));
$rpta=$enpernatural->Insertar_pernatural();
return $rpta;
}

function CActualizar_pernatural(){
$enpernatural=new Clase_pernatural();
$enpernatural->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enpernatural->setcPerNatApePaterno(validar($_POST["cPerNatApePaterno_"]));
$enpernatural->setcPerNatApeMaterno(validar($_POST["cPerNatApeMaterno_"]));
$enpernatural->setnPerNatSexo(validar($_POST["nPerNatSexo_"]));
$enpernatural->setnPerNatEstCivil(validar($_POST["nPerNatEstCivil_"]));
$rpta=$enpernatural->Actualizar_pernatural();
return $rpta;
}

function CEliminar_pernatural(){
$enpernatural=new Clase_pernatural();
$enpernatural->setcPerCodigo($_GET["id"]);
$rpta=$enpernatural->Eliminar_pernatural();
return $rpta;
}

function CRecuperar_pernatural(){
$enpernatural=new Clase_pernatural();
$enpernatural->setcPerCodigo($_GET["id"]);
$rpta=$enpernatural->Recuperar_pernatural();
return $rpta;
}

function CListar_pernatural(){
$enpernatural=new Clase_pernatural();
$rpta=$enpernatural->Listar_pernatural();
return $rpta;
}

function CListadoSimple_pernatural(){
$enpernatural=new Clase_pernatural();
$rpta=$enpernatural->ListadoSimple_pernatural();
return $rpta;
}

function CBuscar_pernatural($id){
$enpernatural=new Clase_pernatural();
$enpernatural->setcPerCodigo($id);
$rpta=$enpernatural->Buscar_pernatural();
return $rpta;}
?>