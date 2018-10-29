<?php
include_once "../../Modelado/Modelo_carrera.php"; 
include_once "../validacion.php"; 
function CRegistrar_carrera(){
$encarrera=new Clase_carrera();
$encarrera->setid(validar($_POST["id_"]));
$encarrera->settitulo(validar($_POST["titulo_"]));
$encarrera->setdescripcion(validar($_POST["descripcion_"]));
$encarrera->setslide(validar($_POST["slide_"]));
$encarrera->setimagen(validar($_POST["imagen_"]));
$encarrera->setpresentacion(validar($_POST["presentacion_"]));
$encarrera->setporque(validar($_POST["porque_"]));
$encarrera->setdonde(validar($_POST["donde_"]));
$encarrera->setcertificacion(validar($_POST["certificacion_"]));
$encarrera->settitulos(validar($_POST["titulos_"]));
$encarrera->setinversion(validar($_POST["inversion_"]));
$encarrera->settitulacion(validar($_POST["titulacion_"]));
$encarrera->setdetalleduracion(validar($_POST["detalleduracion_"]));
$encarrera->setdetalledia(validar($_POST["detalledia_"]));
$encarrera->setdetallehorario(validar($_POST["detallehorario_"]));
$encarrera->setdetallelugar(validar($_POST["detallelugar_"]));
$encarrera->setdetalleprecio(validar($_POST["detalleprecio_"]));
$encarrera->setdetalleequipos(validar($_POST["detalleequipos_"]));
$encarrera->setdetalleconsultas(validar($_POST["detalleconsultas_"]));
$encarrera->setdetalledirigido(validar($_POST["detalledirigido_"]));
$encarrera->setaquien(validar($_POST["aquien_"]));
$encarrera->settemas(validar($_POST["temas_"]));
$encarrera->setnombreseo(validar($_POST["nombreseo_"]));
$encarrera->setorden(validar($_POST["orden_"]));
$encarrera->setestado("A");
$encarrera->setfecha(validar($_POST["fecha_"]));
$rpta=$encarrera->Insertar_carrera();
return $rpta;
}

function CActualizar_carrera(){
$encarrera=new Clase_carrera();
$encarrera->setid(validar($_POST["id_"]));
$encarrera->settitulo(validar($_POST["titulo_"]));
$encarrera->setdescripcion(validar($_POST["descripcion_"]));
$encarrera->setslide(validar($_POST["slide_"]));
$encarrera->setimagen(validar($_POST["imagen_"]));
$encarrera->setpresentacion(validar($_POST["presentacion_"]));
$encarrera->setporque(validar($_POST["porque_"]));
$encarrera->setdonde(validar($_POST["donde_"]));
$encarrera->setcertificacion(validar($_POST["certificacion_"]));
$encarrera->settitulos(validar($_POST["titulos_"]));
$encarrera->setinversion(validar($_POST["inversion_"]));
$encarrera->settitulacion(validar($_POST["titulacion_"]));
$encarrera->setdetalleduracion(validar($_POST["detalleduracion_"]));
$encarrera->setdetalledia(validar($_POST["detalledia_"]));
$encarrera->setdetallehorario(validar($_POST["detallehorario_"]));
$encarrera->setdetallelugar(validar($_POST["detallelugar_"]));
$encarrera->setdetalleprecio(validar($_POST["detalleprecio_"]));
$encarrera->setdetalleequipos(validar($_POST["detalleequipos_"]));
$encarrera->setdetalleconsultas(validar($_POST["detalleconsultas_"]));
$encarrera->setdetalledirigido(validar($_POST["detalledirigido_"]));
$encarrera->setaquien(validar($_POST["aquien_"]));
$encarrera->settemas(validar($_POST["temas_"]));
$encarrera->setnombreseo(validar($_POST["nombreseo_"]));
$encarrera->setorden(validar($_POST["orden_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$encarrera->setestado($estado);
$encarrera->setfecha(validar($_POST["fecha_"]));
$rpta=$encarrera->Actualizar_carrera();
return $rpta;
}

function CEliminar_carrera(){
$encarrera=new Clase_carrera();
$encarrera->setid($_GET["id"]);
$rpta=$encarrera->Eliminar_carrera();
return $rpta;
}

function CRecuperar_carrera(){
$encarrera=new Clase_carrera();
$encarrera->setid($_GET["id"]);
$rpta=$encarrera->Recuperar_carrera();
return $rpta;
}

function CListar_carrera(){
$encarrera=new Clase_carrera();
$rpta=$encarrera->Listar_carrera();
return $rpta;
}

function CListadoSimple_carrera(){
$encarrera=new Clase_carrera();
$rpta=$encarrera->ListadoSimple_carrera();
return $rpta;
}

function CBuscar_carrera($id){
$encarrera=new Clase_carrera();
$encarrera->setid($id);
$rpta=$encarrera->Buscar_carrera();
return $rpta;}
