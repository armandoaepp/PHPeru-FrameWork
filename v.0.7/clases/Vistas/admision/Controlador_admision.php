<?php
include_once "../../Modelado/Modelo_admision.php"; 
include_once "../validacion.php"; 
function CRegistrar_admision(){
$enadmision=new Clase_admision();
$enadmision->setid(validar($_POST["id_"]));
$enadmision->settitulo(validar($_POST["titulo_"]));
$enadmision->setimagen(validar($_POST["imagen_"]));
$enadmision->setrequisitos(validar($_POST["requisitos_"]));
$enadmision->sethorarios(validar($_POST["horarios_"]));
$enadmision->setinversion(validar($_POST["inversion_"]));
$enadmision->setemail(validar($_POST["email_"]));
$rpta=$enadmision->Insertar_admision();
return $rpta;
}

function CActualizar_admision(){
$enadmision=new Clase_admision();
$enadmision->setid(validar($_POST["id_"]));
$enadmision->settitulo(validar($_POST["titulo_"]));
$enadmision->setimagen(validar($_POST["imagen_"]));
$enadmision->setrequisitos(validar($_POST["requisitos_"]));
$enadmision->sethorarios(validar($_POST["horarios_"]));
$enadmision->setinversion(validar($_POST["inversion_"]));
$enadmision->setemail(validar($_POST["email_"]));
$rpta=$enadmision->Actualizar_admision();
return $rpta;
}

function CEliminar_admision(){
$enadmision=new Clase_admision();
$enadmision->setid($_GET["id"]);
$rpta=$enadmision->Eliminar_admision();
return $rpta;
}

function CRecuperar_admision(){
$enadmision=new Clase_admision();
$enadmision->setid($_GET["id"]);
$rpta=$enadmision->Recuperar_admision();
return $rpta;
}

function CListar_admision(){
$enadmision=new Clase_admision();
$rpta=$enadmision->Listar_admision();
return $rpta;
}

function CListadoSimple_admision(){
$enadmision=new Clase_admision();
$rpta=$enadmision->ListadoSimple_admision();
return $rpta;
}

function CBuscar_admision($id){
$enadmision=new Clase_admision();
$enadmision->setid($id);
$rpta=$enadmision->Buscar_admision();
return $rpta;}
