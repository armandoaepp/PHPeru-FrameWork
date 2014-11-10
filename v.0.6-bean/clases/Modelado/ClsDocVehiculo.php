<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsDocvehiculo extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_docvehiculo($bean_docvehiculo)
{
$iddocvehiculo = $bean_docvehiculo->getIddocvehiculo();
$idvehiculo = $bean_docvehiculo->getIdvehiculo();
$idtipodocumento = $bean_docvehiculo->getIdtipodocumento();
$item = $bean_docvehiculo->getItem();
$fecharegistro = $bean_docvehiculo->getFecharegistro();
$fechaemision = $bean_docvehiculo->getFechaemision();
$fechacaducidad = $bean_docvehiculo->getFechacaducidad();
$archivo = $bean_docvehiculo->getArchivo();
$glosa = $bean_docvehiculo->getGlosa();
$estado = $bean_docvehiculo->getEstado();

$this->query = "CALL usp_set_docvehiculo('$iddocvehiculo','$idvehiculo','$idtipodocumento','$item','$fecharegistro','$fechaemision','$fechacaducidad','$archivo','$glosa','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_docvehiculo($bean_docvehiculo)
{
$iddocvehiculo = $bean_docvehiculo->getIddocvehiculo();
$idvehiculo = $bean_docvehiculo->getIdvehiculo();
$idtipodocumento = $bean_docvehiculo->getIdtipodocumento();
$item = $bean_docvehiculo->getItem();
$fecharegistro = $bean_docvehiculo->getFecharegistro();
$fechaemision = $bean_docvehiculo->getFechaemision();
$fechacaducidad = $bean_docvehiculo->getFechacaducidad();
$archivo = $bean_docvehiculo->getArchivo();
$glosa = $bean_docvehiculo->getGlosa();
$estado = $bean_docvehiculo->getEstado();

$this->query = "CALL usp_upd_docvehiculo('$iddocvehiculo','$idvehiculo','$idtipodocumento','$item','$fecharegistro','$fechaemision','$fechacaducidad','$archivo','$glosa','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_docvehiculo_estado($bean_docvehiculo)
{
$iddocvehiculo = $bean_docvehiculo->getIddocvehiculo();
$estado = $bean_docvehiculo->getEstado();

$this->query = "CALL usp_upd_docvehiculo_Estado('$iddocvehiculo','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_docvehiculo_by_iddocvehiculo($bean_docvehiculo)
{
$iddocvehiculo = $bean_docvehiculo->getIddocvehiculo();

$this->query = "CALL usp_get_docvehiculo_by_iddocvehiculo('$iddocvehiculo')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_docvehiculo()
{
$this->query = "CALL usp_get_docvehiculo();"
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>