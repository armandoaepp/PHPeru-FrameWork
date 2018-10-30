<?php 
# Clase Generada - Creado por @armandaepp 
class Carrera extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método SAVE
public function save($bean_carrera)
{
try{

$titulo = $bean_carrera->getTitulo();
$descripcion = $bean_carrera->getDescripcion();
$slide = $bean_carrera->getSlide();
$imagen = $bean_carrera->getImagen();
$presentacion = $bean_carrera->getPresentacion();
$porque = $bean_carrera->getPorque();
$donde = $bean_carrera->getDonde();
$certificacion = $bean_carrera->getCertificacion();
$titulos = $bean_carrera->getTitulos();
$inversion = $bean_carrera->getInversion();
$titulacion = $bean_carrera->getTitulacion();
$detalleduracion = $bean_carrera->getDetalleduracion();
$detalledia = $bean_carrera->getDetalledia();
$detallehorario = $bean_carrera->getDetallehorario();
$detallelugar = $bean_carrera->getDetallelugar();
$detalleprecio = $bean_carrera->getDetalleprecio();
$detalleequipos = $bean_carrera->getDetalleequipos();
$detalleconsultas = $bean_carrera->getDetalleconsultas();
$detalledirigido = $bean_carrera->getDetalledirigido();
$aquien = $bean_carrera->getAquien();
$temas = $bean_carrera->getTemas();
$nombreseo = $bean_carrera->getNombreseo();
$orden = $bean_carrera->getOrden();
$estado = $bean_carrera->getEstado();
$fecha = $bean_carrera->getFecha();

$consulta="INSERT INTO carrera VALUES('$titulo','$descripcion','$slide','$imagen','$presentacion','$porque','$donde','$certificacion','$titulos','$inversion','$titulacion','$detalleduracion','$detalledia','$detallehorario','$detallelugar','$detalleprecio','$detalleequipos','$detalleconsultas','$detalledirigido','$aquien','$temas','$nombreseo','$orden','$estado','$fecha')";
$this->execute_query();
$status = $this->status_exe  ;
return $status;

}catch(exception $e){

 throw new Exception($e->getMessage());

 }
}
# Método Actualizar
public function update($bean_carrera)
{
try{

$id = $bean_carrera->getId();
$titulo = $bean_carrera->getTitulo();
$descripcion = $bean_carrera->getDescripcion();
$slide = $bean_carrera->getSlide();
$imagen = $bean_carrera->getImagen();
$presentacion = $bean_carrera->getPresentacion();
$porque = $bean_carrera->getPorque();
$donde = $bean_carrera->getDonde();
$certificacion = $bean_carrera->getCertificacion();
$titulos = $bean_carrera->getTitulos();
$inversion = $bean_carrera->getInversion();
$titulacion = $bean_carrera->getTitulacion();
$detalleduracion = $bean_carrera->getDetalleduracion();
$detalledia = $bean_carrera->getDetalledia();
$detallehorario = $bean_carrera->getDetallehorario();
$detallelugar = $bean_carrera->getDetallelugar();
$detalleprecio = $bean_carrera->getDetalleprecio();
$detalleequipos = $bean_carrera->getDetalleequipos();
$detalleconsultas = $bean_carrera->getDetalleconsultas();
$detalledirigido = $bean_carrera->getDetalledirigido();
$aquien = $bean_carrera->getAquien();
$temas = $bean_carrera->getTemas();
$nombreseo = $bean_carrera->getNombreseo();
$orden = $bean_carrera->getOrden();
$estado = $bean_carrera->getEstado();
$fecha = $bean_carrera->getFecha();

$consulta="UPDATE carrera SET 26titulo='$this->titulo',
descripcion='$this->descripcion',
slide='$this->slide',
imagen='$this->imagen',
presentacion='$this->presentacion',
porque='$this->porque',
donde='$this->donde',
certificacion='$this->certificacion',
titulos='$this->titulos',
inversion='$this->inversion',
titulacion='$this->titulacion',
detalleduracion='$this->detalleduracion',
detalledia='$this->detalledia',
detallehorario='$this->detallehorario',
detallelugar='$this->detallelugar',
detalleprecio='$this->detalleprecio',
detalleequipos='$this->detalleequipos',
detalleconsultas='$this->detalleconsultas',
detalledirigido='$this->detalledirigido',
aquien='$this->aquien',
temas='$this->temas',
nombreseo='$this->nombreseo',
orden='$this->orden',
estado='$this->estado',
fecha='$this->fecha',
 WHERE id='$this->id'";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_carrera_estado($bean_carrera)
{
$id = $bean_carrera->getId();
$fecha = $bean_carrera->getFecha();

$this->query = "CALL usp_upd_carrera_estado('$id','$fecha')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_carrera_by_id($bean_carrera)
{
$id = $bean_carrera->getId();

$this->query = "CALL usp_get_carrera_by_id('$id')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_carrera()
{
$this->query = "CALL usp_get_carrera();"
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>