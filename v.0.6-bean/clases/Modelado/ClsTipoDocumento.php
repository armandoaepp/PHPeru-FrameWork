<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsTipodocumento extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_tipodocumento($bean_tipodocumento)
{
$idtipodocumento = $bean_tipodocumento->getIdtipodocumento();
$tipodocumento = $bean_tipodocumento->getTipodocumento();
$estado = $bean_tipodocumento->getEstado();

$this->query = "CALL usp_set_tipodocumento('$idtipodocumento','$tipodocumento','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_tipodocumento($bean_tipodocumento)
{
$idtipodocumento = $bean_tipodocumento->getIdtipodocumento();
$tipodocumento = $bean_tipodocumento->getTipodocumento();
$estado = $bean_tipodocumento->getEstado();

$this->query = "CALL usp_upd_tipodocumento('$idtipodocumento','$tipodocumento','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_tipodocumento_estado($bean_tipodocumento)
{
$idtipodocumento = $bean_tipodocumento->getIdtipodocumento();
$estado = $bean_tipodocumento->getEstado();

$this->query = "CALL usp_upd_tipodocumento_Estado('$idtipodocumento','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_tipodocumento_by_idtipodocumento($bean_tipodocumento)
{
$idtipodocumento = $bean_tipodocumento->getIdtipodocumento();

$this->query = "CALL usp_get_tipodocumento_by_idtipodocumento('$idtipodocumento')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_tipodocumento()
{
$this->query = "CALL usp_get_tipodocumento();"
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>