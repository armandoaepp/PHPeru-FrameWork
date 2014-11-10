<?php
include_once "../../Modelado/Modelo_msjemail.php"; 
include_once "../validacion.php"; 
function CRegistrar_msjemail(){
$enmsjemail=new Clase_msjemail();
$enmsjemail->setidmsjemail(validar($_POST["idmsjemail_"]));
$enmsjemail->setidproceso(validar($_POST["idproceso_"]));
$enmsjemail->setidtipomensaje(validar($_POST["idtipomensaje_"]));
$enmsjemail->setitem(validar($_POST["item_"]));
$enmsjemail->setemail(validar($_POST["email_"]));
$enmsjemail->setasunto(validar($_POST["asunto_"]));
$enmsjemail->setmensaje(validar($_POST["mensaje_"]));
$enmsjemail->setcabecera(validar($_POST["cabecera_"]));
$enmsjemail->setfechareg(validar($_POST["fechareg_"]));
$enmsjemail->setestado("A");
$rpta=$enmsjemail->Insertar_msjemail();
return $rpta;
}

function CActualizar_msjemail(){
$enmsjemail=new Clase_msjemail();
$enmsjemail->setidmsjemail(validar($_POST["idmsjemail_"]));
$enmsjemail->setidproceso(validar($_POST["idproceso_"]));
$enmsjemail->setidtipomensaje(validar($_POST["idtipomensaje_"]));
$enmsjemail->setitem(validar($_POST["item_"]));
$enmsjemail->setemail(validar($_POST["email_"]));
$enmsjemail->setasunto(validar($_POST["asunto_"]));
$enmsjemail->setmensaje(validar($_POST["mensaje_"]));
$enmsjemail->setcabecera(validar($_POST["cabecera_"]));
$enmsjemail->setfechareg(validar($_POST["fechareg_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$enmsjemail->setestado($estado);
$rpta=$enmsjemail->Actualizar_msjemail();
return $rpta;
}

function CEliminar_msjemail(){
$enmsjemail=new Clase_msjemail();
$enmsjemail->setidmsjemail($_GET["id"]);
$rpta=$enmsjemail->Eliminar_msjemail();
return $rpta;
}

function CRecuperar_msjemail(){
$enmsjemail=new Clase_msjemail();
$enmsjemail->setidmsjemail($_GET["id"]);
$rpta=$enmsjemail->Recuperar_msjemail();
return $rpta;
}

function CListar_msjemail(){
$enmsjemail=new Clase_msjemail();
$rpta=$enmsjemail->Listar_msjemail();
return $rpta;
}

function CListadoSimple_msjemail(){
$enmsjemail=new Clase_msjemail();
$rpta=$enmsjemail->ListadoSimple_msjemail();
return $rpta;
}

function CBuscar_msjemail($id){
$enmsjemail=new Clase_msjemail();
$enmsjemail->setidmsjemail($id);
$rpta=$enmsjemail->Buscar_msjemail();
return $rpta;}
