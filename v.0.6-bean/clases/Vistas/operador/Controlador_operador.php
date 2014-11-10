<?php
include_once "../../Modelado/Modelo_operador.php"; 
include_once "../validacion.php"; 
function CRegistrar_operador(){
$enoperador=new Clase_operador();
$enoperador->setidoperador(validar($_POST["idoperador_"]));
$enoperador->setnombre(validar($_POST["nombre_"]));
$enoperador->setnom_operador(validar($_POST["nom_operador_"]));
$enoperador->setpass_operador(validar($_POST["pass_operador_"]));
$enoperador->settelefono1(validar($_POST["telefono1_"]));
$enoperador->settelefono2(validar($_POST["telefono2_"]));
$enoperador->settelefono3(validar($_POST["telefono3_"]));
$enoperador->setcodubigeo(validar($_POST["codubigeo_"]));
$enoperador->setfechareg(validar($_POST["fechareg_"]));
$enoperador->setidtransp(validar($_POST["idtransp_"]));
$enoperador->setestado("A");
$enoperador->setsuperusuario(validar($_POST["superusuario_"]));
$rpta=$enoperador->Insertar_operador();
return $rpta;
}

function CActualizar_operador(){
$enoperador=new Clase_operador();
$enoperador->setidoperador(validar($_POST["idoperador_"]));
$enoperador->setnombre(validar($_POST["nombre_"]));
$enoperador->setnom_operador(validar($_POST["nom_operador_"]));
$enoperador->setpass_operador(validar($_POST["pass_operador_"]));
$enoperador->settelefono1(validar($_POST["telefono1_"]));
$enoperador->settelefono2(validar($_POST["telefono2_"]));
$enoperador->settelefono3(validar($_POST["telefono3_"]));
$enoperador->setcodubigeo(validar($_POST["codubigeo_"]));
$enoperador->setfechareg(validar($_POST["fechareg_"]));
$enoperador->setidtransp(validar($_POST["idtransp_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$enoperador->setestado($estado);
$enoperador->setsuperusuario(validar($_POST["superusuario_"]));
$rpta=$enoperador->Actualizar_operador();
return $rpta;
}

function CEliminar_operador(){
$enoperador=new Clase_operador();
$enoperador->setidoperador($_GET["id"]);
$rpta=$enoperador->Eliminar_operador();
return $rpta;
}

function CRecuperar_operador(){
$enoperador=new Clase_operador();
$enoperador->setidoperador($_GET["id"]);
$rpta=$enoperador->Recuperar_operador();
return $rpta;
}

function CListar_operador(){
$enoperador=new Clase_operador();
$rpta=$enoperador->Listar_operador();
return $rpta;
}

function CListadoSimple_operador(){
$enoperador=new Clase_operador();
$rpta=$enoperador->ListadoSimple_operador();
return $rpta;
}

function CBuscar_operador($id){
$enoperador=new Clase_operador();
$enoperador->setidoperador($id);
$rpta=$enoperador->Buscar_operador();
return $rpta;}
?>