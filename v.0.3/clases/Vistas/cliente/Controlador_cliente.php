<?php
include_once "../../Modelado/Modelo_cliente.php"; 
include_once "../validacion.php"; 
function CRegistrar_cliente(){
$encliente=new Clase_cliente();
$encliente->setClienteId(validar($_POST["ClienteId_"]));
$encliente->setClienteNombre(validar($_POST["ClienteNombre_"]));
$encliente->setClienteRepresentante(validar($_POST["ClienteRepresentante_"]));
$encliente->setClienteEmail(validar($_POST["ClienteEmail_"]));
$encliente->setClienteFax(validar($_POST["ClienteFax_"]));
$encliente->setClienteDireccion(validar($_POST["ClienteDireccion_"]));
$encliente->setClienteCodigoPostal(validar($_POST["ClienteCodigoPostal_"]));
$encliente->setClienteNota(validar($_POST["ClienteNota_"]));
$encliente->setClienteTelefono(validar($_POST["ClienteTelefono_"]));
$encliente->setClienteMovil(validar($_POST["ClienteMovil_"]));
$encliente->setPaisId(validar($_POST["PaisId_"]));
$rpta=$encliente->Insertar_cliente();
return $rpta;
}

function CActualizar_cliente(){
$encliente=new Clase_cliente();
$encliente->setClienteId(validar($_POST["ClienteId_"]));
$encliente->setClienteNombre(validar($_POST["ClienteNombre_"]));
$encliente->setClienteRepresentante(validar($_POST["ClienteRepresentante_"]));
$encliente->setClienteEmail(validar($_POST["ClienteEmail_"]));
$encliente->setClienteFax(validar($_POST["ClienteFax_"]));
$encliente->setClienteDireccion(validar($_POST["ClienteDireccion_"]));
$encliente->setClienteCodigoPostal(validar($_POST["ClienteCodigoPostal_"]));
$encliente->setClienteNota(validar($_POST["ClienteNota_"]));
$encliente->setClienteTelefono(validar($_POST["ClienteTelefono_"]));
$encliente->setClienteMovil(validar($_POST["ClienteMovil_"]));
$encliente->setPaisId(validar($_POST["PaisId_"]));
$rpta=$encliente->Actualizar_cliente();
return $rpta;
}

function CEliminar_cliente(){
$encliente=new Clase_cliente();
$encliente->setClienteId($_GET["id"]);
$rpta=$encliente->Eliminar_cliente();
return $rpta;
}

function CRecuperar_cliente(){
$encliente=new Clase_cliente();
$encliente->setClienteId($_GET["id"]);
$rpta=$encliente->Recuperar_cliente();
return $rpta;
}

function CListar_cliente(){
$encliente=new Clase_cliente();
$rpta=$encliente->Listar_cliente();
return $rpta;
}

function CListadoSimple_cliente(){
$encliente=new Clase_cliente();
$rpta=$encliente->ListadoSimple_cliente();
return $rpta;
}

function CBuscar_cliente($id){
$encliente=new Clase_cliente();
$encliente->setClienteId($id);
$rpta=$encliente->Buscar_cliente();
return $rpta;}
?>