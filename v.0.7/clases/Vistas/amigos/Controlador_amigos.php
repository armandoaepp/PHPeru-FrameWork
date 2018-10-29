<?php
include_once "../../Modelado/Modelo_amigos.php"; 
include_once "../validacion.php"; 
function CRegistrar_amigos(){
$enamigos=new Clase_amigos();
$enamigos->setid(validar($_POST["id_"]));
$enamigos->settitulo(validar($_POST["titulo_"]));
$enamigos->setimagen(validar($_POST["imagen_"]));
$enamigos->setimagen_2(validar($_POST["imagen_2_"]));
$enamigos->setemail(validar($_POST["email_"]));
$enamigos->setorden(validar($_POST["orden_"]));
$enamigos->setestado("A");
$enamigos->setfecha(validar($_POST["fecha_"]));
$rpta=$enamigos->Insertar_amigos();
return $rpta;
}

function CActualizar_amigos(){
$enamigos=new Clase_amigos();
$enamigos->setid(validar($_POST["id_"]));
$enamigos->settitulo(validar($_POST["titulo_"]));
$enamigos->setimagen(validar($_POST["imagen_"]));
$enamigos->setimagen_2(validar($_POST["imagen_2_"]));
$enamigos->setemail(validar($_POST["email_"]));
$enamigos->setorden(validar($_POST["orden_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$enamigos->setestado($estado);
$enamigos->setfecha(validar($_POST["fecha_"]));
$rpta=$enamigos->Actualizar_amigos();
return $rpta;
}

function CEliminar_amigos(){
$enamigos=new Clase_amigos();
$enamigos->setid($_GET["id"]);
$rpta=$enamigos->Eliminar_amigos();
return $rpta;
}

function CRecuperar_amigos(){
$enamigos=new Clase_amigos();
$enamigos->setid($_GET["id"]);
$rpta=$enamigos->Recuperar_amigos();
return $rpta;
}

function CListar_amigos(){
$enamigos=new Clase_amigos();
$rpta=$enamigos->Listar_amigos();
return $rpta;
}

function CListadoSimple_amigos(){
$enamigos=new Clase_amigos();
$rpta=$enamigos->ListadoSimple_amigos();
return $rpta;
}

function CBuscar_amigos($id){
$enamigos=new Clase_amigos();
$enamigos->setid($id);
$rpta=$enamigos->Buscar_amigos();
return $rpta;}
