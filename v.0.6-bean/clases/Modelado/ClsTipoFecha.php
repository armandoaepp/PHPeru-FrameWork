<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsTipoFecha extends ClsConexion {
# CONSTRUCT
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_tipofecha($bean_tipofecha)
{
$idtipofecha = $bean_tipofecha->getIdtipofecha();
$tipofecha = $bean_tipofecha->getTipofecha();
$estado = $bean_tipofecha->getEstado();

$this->query = "CALL usp_set_tipofecha('$idtipofecha','$tipofecha','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_tipofecha($bean_tipofecha)
{
$idtipofecha = $bean_tipofecha->getIdtipofecha();
$tipofecha = $bean_tipofecha->getTipofecha();
$estado = $bean_tipofecha->getEstado();

$this->query = "CALL usp_upd_tipofecha('$idtipofecha','$tipofecha','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_tipofecha_estado($bean_tipofecha)
{
$idtipofecha = $bean_tipofecha->getIdtipofecha();
$estado = $bean_tipofecha->getEstado();

$this->query = "CALL usp_upd_tipofecha_Estado('$idtipofecha','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_tipofecha_by_idtipofecha($bean_tipofecha)
{
$idtipofecha = $bean_tipofecha->getIdtipofecha();

$this->query = "CALL usp_get_tipofecha_by_idtipofecha('$idtipofecha')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos
public function get_tipofecha()
{
$this->query = "CALL usp_get_tipofecha();"$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>