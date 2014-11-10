<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsTipomensaje extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_tipomensaje($bean_tipomensaje)
{
$idtipomensaje = $bean_tipomensaje->getIdtipomensaje();
$tipomensaje = $bean_tipomensaje->getTipomensaje();
$estado = $bean_tipomensaje->getEstado();

$this->query = "CALL usp_set_tipomensaje('$idtipomensaje','$tipomensaje','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_tipomensaje($bean_tipomensaje)
{
$idtipomensaje = $bean_tipomensaje->getIdtipomensaje();
$tipomensaje = $bean_tipomensaje->getTipomensaje();
$estado = $bean_tipomensaje->getEstado();

$this->query = "CALL usp_upd_tipomensaje('$idtipomensaje','$tipomensaje','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_tipomensaje_estado($bean_tipomensaje)
{
$idtipomensaje = $bean_tipomensaje->getIdtipomensaje();
$estado = $bean_tipomensaje->getEstado();

$this->query = "CALL usp_upd_tipomensaje_Estado('$idtipomensaje','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_tipomensaje_by_idtipomensaje($bean_tipomensaje)
{
$idtipomensaje = $bean_tipomensaje->getIdtipomensaje();

$this->query = "CALL usp_get_tipomensaje_by_idtipomensaje('$idtipomensaje')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_tipomensaje()
{
$this->query = "CALL usp_get_tipomensaje();"
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>